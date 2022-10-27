<?php

namespace App\Controllers;

//os recursos do miniframework
use MF\Controller\Action;
use MF\Model\Container;

class UserController extends Action {

	public function login() {

		$this->render('login');
	}
	public function registrar() {

		$this->render('registrar');
	}
}


?>