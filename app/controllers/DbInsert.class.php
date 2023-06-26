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
    }
    

    public function action_adduser() {
        $this->getWhat();
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
                
                        App::getMessages()->addMessage(new Message("tylko jedno", Message::ERROR));
                        App::getMessages()->clear();

            } catch (PDOException $e){
                App::getMessages()->addMessage(new Message("Wystąpił błąd podczas wpisywania rekordu do bazy danych", Message::ERROR));
                if (getConf()->debug) {
                    App::getMessages()->addMessage(new Message($e, Message::ERROR));
                }
            }
            App::getRouter()->forwardTo('view');
        }
    }
}  