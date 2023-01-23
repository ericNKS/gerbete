<?php

namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap {

	protected function initRoutes() {

		$routes['home'] = array(
			'route' => '/',
			'controller' => 'indexController',
			'action' => 'index'
		);
		$routes['login'] = array(
			'route' => '/login',
			'controller' => 'userController',
			'action' => 'login'
		);
		$routes['registrar'] = array(
			'route' => '/registrar',
			'controller' => 'userController',
			'action' => 'registrar'
		);
		$routes['autenticar'] = array(
			'route' => '/autenticar',
			'controller' => 'userController',
			'action' => 'autenticar'
		);
		$routes['cadastrar'] = array(
			'route' => '/cadastrar',
			'controller' => 'userController',
			'action' => 'cadastrar'
		);
		$routes['sair'] = array(
			'route' => '/sair',
			'controller' => 'userController',
			'action' => 'sair'
		);
		$routes['perfil'] = array(
			'route' => '/perfil',
			'controller' => 'perfilController',
			'action' => 'perfil'
		);

		$this->setRoutes($routes);
	}

}

?>