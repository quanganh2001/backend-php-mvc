<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class showData extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		//$this->load->view('showData_view');
		//load cai model
		$this->load->model('showData_model');
		// goi ham getdatabase trong model 
		$dulieu =  $this->showData_model->getdatabase(); 

		$dulieu =   array('dulieutucontroller' => $dulieu ); // bien du lieu thanh mang voi key = dulieutucontroller
		//echo "<pre>";
		//var_dump($dulieu);
		$this->load->view('showData_view', $dulieu, FALSE);


	}
	public function deleteData($idnhanduoc)
	{
		  
		$this->load->model('showData_model');
		if($this->showData_model->deleteDataById($idnhanduoc))
		{
			$this->load->view('thongbaoxoathanhcong');
		}
		else
		{
			echo "chua xoa duoc"; 

		}

		
	}
	public function editSim($idlayve)
	{
		$this->load->model('showData_model');
		$ketqua = $this->showData_model->editByID($idlayve);	
		$ketqua = array('mangketqua' => $ketqua)	;

		// truyen ketqua nay vao view edit de sửa dữ liệu 
		$this->load->view('editData_view', $ketqua, FALSE);
	}

	public function updateData()
	{
		// lay du lieu tu view ve 

		$id = $this->input->post('id');
		$so = $this->input->post('so');
		$gia = $this->input->post('gia');

		//  echo "ID nhan duoc : $id";
		//  echo "so nhan duoc : $so";
		// echo "gia nhan duoc : $gia";

		$this->load->model('showData_model');

		// su dung ham trong model giao tiep voi du lieu voi gia tri nhan dc tu view
		if($this->showData_model->updateDataById($id,$so,$gia))
		{
			 echo " Insert Thanh cong";
			 echo "<a href=". base_url()."index.php/showData> Quay về trang chủ </a>"; 
		}
		else {
		 	echo " khong thanh cong";
		}


	}

}

/* End of file showData.php */
/* Location: ./application/controllers/showData.php */