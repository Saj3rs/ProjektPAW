<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\LoginForm;
use app\forms\BookSearchForm;




class DbView {

  
    private $where;
    private $form;
    private $lform;
    private $records;

	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new BookSearchForm();
		$this->lform = new LoginForm();
                
	}
    
    public function getWhere(){
                 $search_params = []; //przygotowanie pustej struktury (aby była dostępna nawet gdy nie będzie zawierała wierszy)
		if ( isset($this->form->title) && strlen($this->form->title) > 0) {
			$search_params['books.tytul[~]'] = $this->form->title.'%'; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu
		}
		if ( isset($this->form->author) && strlen($this->form->author) > 0) {
			$search_params['authors.nazwisko[~]'] = $this->form->author.'%'; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu
		}
                
		$num_params = sizeof($search_params);
		if ($num_params > 1) {
			$this->where = [ "AND" => &$search_params ];
		} else {
			$this->where = &$search_params;
		}
		$where ["ORDER"] = "books.tytul";
    }

    public function action_view() {
	$this->getWhere();
        
        try{
             $this->records = App::getDB()->select('books', [
                "[>]authors"=>["id_author"=>"id_author"],
                "[>]users"=>["id_user"=>"id_user"]
            ],
            [
                "books.id_book",
                "books.tytul",
                "books.gatunek",
                "authors.imie(aimie)",
                "authors.nazwisko(anazwisko)",
                "users.imie(uimie)",
                "users.nazwisko(unazwisko)"
            ], $this->where);
                    
                   
		} catch (PDOException $e){
                    App::getMessages()->addMessage(new \core\Message("Wystąpił błąd podczas pobierania rekordów", \core\Message::ERROR));
                    if (getConf()->debug) {
                    App::getMessages()->addMessage(new \core\Message($e, \core\Message::ERROR));
                }
        }
               
        
        App::getSmarty()->assign("books", $this->records);        
        App::getSmarty()->display("test.tpl");
        
    }
    
}