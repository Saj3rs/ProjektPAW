<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('view'); #default action
//App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('view', 'DbView');
//Utils::addRoute('action_name', 'controller_class_name');