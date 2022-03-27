<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AddData extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{


		$this->load->view('addData_view');
		// echo "test xem chay duoc chua";
		// chay qua duong dan la ten mien /index.php/addData/
	}
	public function insertData_controller()
	{
		// lay du lieu ve tu view		
		$sodienthoai =  $this->input->post('so');
		$giatien =  $this->input->post('gia');

		// truyen du lieu vao model 
		$this->load->model('addData_model');
		if($this->addData_model->insert($sodienthoai,$giatien)){
			// thanh cong roi
 			$this->load->view('thanhcong');
		}
		else 
		{
			echo "insert that bai roi xem lai code ";
		}
		
		


	}

}

/* End of file AddData.php */
/* Location: ./application/controllers/AddData.php */