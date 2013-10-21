<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

	/**
	 * @var array the app wide helpers
	 */	
	public $helpers = array('Html','Js' => array('Jquery'), 'Session','Form');
	
	/**
	 * @var array the app wide helpers
	 */	
	public $components = array('Auth','Session','RequestHandler');
	
	/**
	 *
	 * custom App-Wide beforeFilter 
	 */
	public function beforeFilter() {

		$this->Auth->authenticate = array('Form');

		$this->Auth->authError = "You are not allowed to access this page!";

		$this->Auth->loginAction = array('controller' => 'users', 'action' => 'login', 'manager' => false,'plugin' => false);
		$this->Auth->logoutRedirect = array('controller' => 'projects', 'action' => 'index', 'manager' => false,'plugin' => false);
	}

	/**
	 * the app-wide beforeRender method
	 * 
	 * @return void 0
	 */
	public function beforeRender()
	{	
		
		//set a view variable if the request comes from a mobile
		$isMobile = 0;
		if ($this->request->is('mobile')) {
			$isMobile = 1;
		}

		$this->set(array('isMobile' => $isMobile));
	}
	
}