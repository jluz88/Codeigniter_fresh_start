<?php
/**
 * 
 */
class Api extends REST_Controller{
	
	public function __Construct()
	{
		parent::__Construct();
		$this->load->model('api_model');
	}

	public function albums_get()
	{
		$user_id = $this->get('user_id');

		$return = $this->api_model->get_something($user_id);

		$this->response($return);
	}
	
}