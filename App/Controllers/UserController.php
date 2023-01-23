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
	public function autenticar() {

		$usuario = Container::getModel('Usuario');
		if($_POST['email'] !== '')
		{
			
			$usuario->__set('email', $_POST['email'])->__set('senha', $_POST['senha']);
			if($usuario->validaUser()){
				session_start();
				$_SESSION['conta'] = $usuario->validaUser();
				header('Location: /');
			}
			else{
				echo 'nao';
			}


		}else{
			header('Location: /login?email=vazio');
		}
	}
	public function cadastrar() {

		$usuario = Container::getModel('Usuario');
		if($_POST['senha'] === $_POST['confirmar-senha'] && $_POST['email'] !== '')
		{
			$usuario->__set('nome', $_POST['nome'])->__set('email', $_POST['email'])->__set('senha', $_POST['senha']);
			$user = $usuario->getUser();

			if(count($user) == 0){
				$usuario->registrar();
			}
			else{
				header("Location: /registrar?email=existente");
			}
		}
		else{
			echo 'Error';
		}
	}
	public function sair()
	{
		session_start();
		session_destroy();
		header("Location: /");
	}
}


?>