<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Second_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		echo "<h2>";
		echo "Hello, again!";
		echo "</h2>";
	}

}

/* End of file Second_controller.php */
/* Location: ./application/controllers/Second_controller.php */