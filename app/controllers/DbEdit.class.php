<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\LoginForm;
use app\forms\BookBorrowForm;




class DbEdit {

  
    private $where;
    private $form;
    private $user_id;

	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new BookBorrowForm();
                
	}
    
    public function getWhere(){
        $this->form->book_id = ParamUtils::getFromRequest('book_id');
        $this->form->user_id = 1;
        //$this->form->user_id = ParamUtils::getFromSession('user_id');
                 $search_params = []; //przygotowanie pustej struktury (aby była dostępna nawet gdy nie będzie zawierała wierszy)
		if (( isset($this->form->book_id) && strlen($this->form->book_id) > 0)){
			$search_params['id_book'] = $this->form->book_id; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu
			//$search_params['id_user'] = NULL; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu
		
                        
                }
		$num_params = sizeof($search_params);
		if ($num_params > 1) {
			$this->where = [ "AND" => &$search_params ];
		} else {
			$this->where = &$search_params;
		}
    }

    public function action_borrow() {
	$this->getWhere();
        
        try{
            App::getDB()->update('books', [
                "id_user"=>$this->form->user_id
                
            ], $this->where);
                    App::getMessages()->addMessage(new \core\Message($this->where, \core\Message::ERROR));
                    
                   
		} catch (PDOException $e){
                    App::getMessages()->addMessage(new \core\Message("Wystąpił błąd podczas pobierania rekordów", \core\Message::ERROR));
                    if (getConf()->debug) {
                    App::getMessages()->addMessage(new \core\Message($e, \core\Message::ERROR));
                }
        }
               
        
       
        App::getRouter()->forwardTo('view');
        
    }
    
}
