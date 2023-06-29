<?php
namespace app\controllers;

use core\App;
use core\Utils;
use core\Message;
use core\Messages;
use core\SessionUtils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\NUserForm;




class DbInsert{
    public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new NUserForm();
                
	}

    public function getWhat(){
                $this->form->login = ParamUtils::getFromRequest('login');
                $this->form->pass = ParamUtils::getFromRequest('password');
                $this->form->fname = ParamUtils::getFromRequest('name');
                $this->form->lname = ParamUtils::getFromRequest('lname');
                if($this->form->login!=null&&$this->form->pass!=null&&$this->form->fname!=null&&$this->form->lname!=null){
                    return true;
                }
                else{
                    return false;
                }
    }
    

    public function action_adduser() {
        if($this->getWhat()){
            if((SessionUtils::load("userid",$keep = true))!=null&&RoleUtils::inRole("Admin")){    

                try{
                    $this->whyyy='insert(\'users\', [
                        "imie"=>$this->form->fname,
                        "nazwisko"=>$this->form->lname,
                        "login"=>$this->form->login,
                        "haslo"=>$this->form->pass,
                        "Data_utworzenia"=>"CURDATE()",
                        "id_role"=>\'2\'
                    ])';

                        App::getDB()->insert('users', [
                        "imie"=>$this->form->fname,
                        "nazwisko"=>$this->form->lname,
                        "login"=>$this->form->login,
                        "haslo"=>$this->form->pass,
                        "Data_utworzenia"=> App::getDB()->raw("CURRENT_DATE"),
                        "id_role"=>2
                    ]);

                } catch (PDOException $e){
                    App::getMessages()->addMessage(new Message("Database Access Error", Message::ERROR),"formerror");
                    if (getConf()->debug) {
                        App::getMessages()->addMessage(new Message($e, Message::ERROR));
                    }
                }
            }
        } else {
            App::getMessages()->addMessage(new Message("Every field must be filled while adding new users", Message::ERROR),"formerror");
            
        }
        App::getRouter()->forwardTo('view');
    }
}  