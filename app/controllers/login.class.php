<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\LoginForm;
use core\Validator;

class login {

  
    private $where;
    private $form;
    private $loginfo;
    private $v;
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new LoginForm();
                $this->v = new Validator();
                
	}
    
    public function getWhere(){
                $this->form->login = ParamUtils::getFromRequest('login');
                $this->form->pass = ParamUtils::getFromRequest('password');
                App::getSmarty()->assign("login", $this->form->login);        

        
        
                 $search_params = []; //przygotowanie pustej struktury (aby była dostępna nawet gdy nie będzie zawierała wierszy)
		if ( isset($this->form->login) && strlen($this->form->login) > 0 && isset($this->form->pass) && strlen($this->form->pass) > 0) {
			$search_params['users.login'] = $this->form->login; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu
			$search_params['users.haslo'] = $this->form->pass; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu  
                }else{
			return false;
                }
                
		$num_params = sizeof($search_params);
		if ($num_params > 1) {
			$this->where = [ "AND" => &$search_params ];
		} else {
			$this->where = &$search_params;
		}
                return true;
                
    }

    public function action_dologin() {
	 
        if($this->getWhere()){
      
        try{
             $this->loginfo = App::getDB()->select('users', [
                "[>]roles"=>["id_role"=>"id_role"]
            ],
            [
                "users.id_user",
                "roles.nazwa(rnazwa)",
                "roles.admin",
                "users.imie(uimie)",
                "users.nazwisko(unazwisko)"
            ], $this->where);
                    
                   
		} catch (PDOException $e){
                    App::getMessages()->addMessage(new \core\Message("Wystąpił błąd podczas pobierania rekordów", \core\Message::ERROR));
                    if (getConf()->debug) {
                    App::getMessages()->addMessage(new \core\Message($e, \core\Message::ERROR));
                }
        }
        if(empty($this->loginfo)){
                    App::getMessages()->addMessage(new \core\Message("Incorrect Credentials", \core\Message::ERROR));  
        }else{
            foreach($this->loginfo as $item) {
                RoleUtils::addRole($item["rnazwa"]);
            }
        } 
        if(RoleUtils::inRole("Admin"))
            {echo "IN ADMIN";}
        }
        else{
            App::getMessages()->addMessage(new \core\Message("Please input both your login and password", \core\Message::ERROR));
        }
        App::getSmarty()->display("test.tpl");
    }
    
    public function sessionStarter(){
        
        
    }
    
}
    