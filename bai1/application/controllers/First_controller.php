<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class First_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		echo "Hello World";
	}

}

/* End of file first_controller.php */
/* Location: ./application/controllers/first_controller.php */