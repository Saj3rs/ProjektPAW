<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\Message;
use core\Messages;
use core\SessionUtils;
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
        if((SessionUtils::load("userid",$keep = true))!=null){    
            $this->form->book_id = ParamUtils::getFromRequest('book_id');
            $this->form->user_id = SessionUtils::load("userid",$keep = true);
            $this->form->borrowed = ParamUtils::getFromRequest('borrowed');
            if(RoleUtils::inRole("Admin")==true || $this->form->borrowed==null){
                $this->getWhere();
                
                try{
                    App::getDB()->update('books', [
                        "id_user"=>$this->form->user_id

                    ], $this->where);
                            App::getMessages()->addMessage(new Message($this->where, Message::ERROR));


                        } catch (PDOException $e){
                            App::getMessages()->addMessage(new Message("Wystąpił błąd podczas pobierania rekordów", Message::ERROR));
                            if (getConf()->debug) {
                            App::getMessages()->addMessage(new Message($e, Message::ERROR));
                        }
                    }


            }
            App::getRouter()->forwardTo('view');
            
        }
    }
    
    public function action_return() {
        if(RoleUtils::inRole("Admin")){    
            $this->form->book_id = ParamUtils::getFromRequest('book_id');
            $this->form->user_id = SessionUtils::load("userid",$keep = true);
            $this->getWhere();
        
        try{
            App::getDB()->update('books', [
                "id_user"=>null
                
            ], $this->where);
                    App::getMessages()->addMessage(new Message($this->where, Message::ERROR));
                    
                   
		} catch (PDOException $e){
                    App::getMessages()->addMessage(new Message("Wystąpił błąd podczas pobierania rekordów", Message::ERROR));
                    if (getConf()->debug) {
                    App::getMessages()->addMessage(new Message($e, Message::ERROR));
                }
            }



            App::getRouter()->forwardTo('view');

        }
    }
    
}
