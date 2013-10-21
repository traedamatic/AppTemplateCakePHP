<?php
App::uses('AppController', 'Controller');
/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {

	/**
	 * Controller name
	 *
	 * @var string
	 */
	public $name = 'Pages';

	/**
	 * This controller does not use a model
	 *
	 * @var array
	 */
	public $uses = array();


	/**
	 *
	 *beforeFilter
	 *
	 *
	 */
	public function beforeFilter() {
		parent::beforeFilter();

		$this->Auth->allow();
		$this->Auth->deny(array('manager_dashboard'));
	}	

	/**
	 * default index page
	 * @return [type] [description]
	 */
	public function index()
	{
		//render index		
	}

	/**
	 * manager dashboard
	 */
	public function manager_dashboard() {
		$this->layout = 'manager';

	}

}