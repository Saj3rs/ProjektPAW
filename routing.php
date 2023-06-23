<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('view'); #default action
//App::getRouter()->setLoginRoute('view'); #action to forward if no permissions

Utils::addRoute('dologin', 'login');
Utils::addRoute('dologout','login');
Utils::addRoute('view', 'DbView');
Utils::addRoute('borrow', 'DbEdit',['User','Admin']);
Utils::addRoute('return', 'DbEdit',['Admin']);
Utils::addRoute('modify', 'DbEdit',['Admin']);
//Utils::addRoute('action_name', 'controller_class_name');