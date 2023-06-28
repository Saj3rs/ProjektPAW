<?php

namespace app\controllers;
use core\SessionUtils;
use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\LoginForm;
use core\Validator;
use core\Message;
use core\Messages;

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
                App::getSmarty()->assign("flastname","");
                App::getSmarty()->assign("ftitle","");
                App::getSmarty()->assign("login", $this->form->login);        
                App::getSmarty()->assign("books","");      
        
        
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
                    App::getMessages()->addMessage(new Message("Wystąpił błąd podczas pobierania rekordów", Message::ERROR));
                    if (getConf()->debug) {
                    App::getMessages()->addMessage(new Message($e, Message::ERROR));
                }
        }
        if(empty($this->loginfo)){
                    
                    App::getMessages()->addMessage(new Message("Inserted Incorrect Credentials", Message::ERROR),"lerror"); 
                    
        }else{
            foreach($this->loginfo as $item) {
                RoleUtils::addRole($item["rnazwa"]);
                SessionUtils::store("userid", $item["id_user"]);
                App::getSmarty()->assign("ufname",$item["uimie"]);
                App::getSmarty()->assign("ulname",$item["unazwisko"]);
            }
        } 
                

       
        
       /* if(RoleUtils::inRole("Admin")){
            App::getSmarty()->display("admin_view.tpl");
        }
        else 
            if(RoleUtils::inRole("User")){
                App::getSmarty()->display("logged_view.tpl");
            }
            else{
                App::getSmarty()->display("main_view.tpl");
            }
        */
        }else{App::getMessages()->addMessage(new Message("Inserted Empty Credentials", Message::ERROR),"lerror"); }
        App::getRouter()->forwardTo("view");
    }
    
    public function action_dologout() {        
        if(RoleUtils::inRole("User")){
            RoleUtils::removeRole("User");
        }
        if(RoleUtils::inRole("Admin")){
            RoleUtils::removeRole("Admin");
        }
        SessionUtils::remove("userid");
        App::getSmarty()->clearAllAssign();
        App::getRouter()->redirectTo("view");

    }
    
    
    
}
    