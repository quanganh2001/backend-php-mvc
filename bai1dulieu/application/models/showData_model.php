<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class showData_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getdatabase()
	{
		$this->db->select('*'); // lay het du lieu
		$ketqua = $this->db->get('so_sim'); // lay tu bang ten la so_sim  va luu vao  bien ketqua

		// dua ket qua thanh mot mang du lieu 
		$ketqua = $ketqua->result_array(); // bien doi $ketqua thanh mot mang 

		return $ketqua ; 
		//echo "<pre>";
		//var_dump($ketqua); // in ra ket qua xem thu cai coi

	}
	public function deleteDataById($id)
	{
		$this->db->where('id', $id);
		return	$this->db->delete('so_sim');		

	}
	public function editByID($i)
	{
		$this->db->select('*');	
		$this->db->where('id', $i);
		$dulieu = $this->db->get('so_sim');
		$dulieu = $dulieu->result_array();
		return $dulieu; 
	 
	}
	public function updateDataById($id,$so,$gia)
	{
		$dulieucanupdate = array(
			'id' => $id,
			'so' => $so,
			'gia' =>$gia 
			);

		$this->db->where('id', $id);
		return $this->db->update('so_sim', $dulieucanupdate);

	}

}

/* End of file showData_model.php */
/* Location: ./application/models/showData_model.php */