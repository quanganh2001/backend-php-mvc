<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hello extends CI_Controller {

	public function index()
	{
		$this->load->view('hello_world');
	}

}

/* End of file Hello.php */
/* Location: ./application/controllers/Hello.php */