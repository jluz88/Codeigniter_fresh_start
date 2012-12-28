<?php
/**
 * Test Controller
 */
class Home extends CI_Controller {
	
	public function __Construct() {
		parent::__Construct();
		
		$this->template->set_layout('public');
	}
	
	public function index()
    {
		$this->template->build('home_view');
    }
	
	public function test($value='')
	{
		$this->template->build('test_view');
	}
}