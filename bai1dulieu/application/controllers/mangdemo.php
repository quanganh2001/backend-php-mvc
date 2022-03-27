<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mangdemo extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		// $sv[0] = "Viet";
		// $sv[1] = "Hung";
		// $sv[2] = "Hieu";

		// $mang2 = array("viet","hung","hieu");


		// for($i = 0 ; $i<3 ; $i++)
		// {
		// 	echo "<pre>";
		// 	echo $mang2[$i];
		// 	echo "</pre>";
		// }

		// $mang3 = array("sv01"=>"viet", "sv02"=>"hung","svss"=>"hieu");

		// echo $mang3['sv02']; 

		// // để duyệt mảng này dùng vòng lặp tên foreach 
		// foreach ($mang3 as $key => $value) {

		// 	echo "<pre>";
		// 	echo "Key : ".$key;
		// 	echo "</pre>";

		// 	echo "<pre>";
		// 	echo "Value : ".$value;
		// 	echo "</pre>";



		// }

		// test mang nhieu chieu 
		$thucdon = array(
			'an_sang' => array(
				'khai_vi' => array(
					'sup'=>"luon",
					'ruou'=>"vodka",
					), 
				'mon_chinh' => array(
					'com' => "com rang",
					'pho' =>"pho bo"
					), 
				'mon_trang_mieng' => array(
					'kem' => "Kem y",
					'nuoc' =>"cafe"
					)  
				), 
			'an_trua' => array(
				'khai_vi' => array(
					'sup'=>"luon sang",
					'ruou'=>"vodka",
					), 
				'mon_chinh' => array(
					'com' => "com rang",
					'pho' =>"pho bo"
					), 
				'mon_trang_mieng' => array(
					'kem' => "Kem y",
					'nuoc' =>"cafe"
					)  
				), 
			'an_toi' => array(
				'khai_vi' => array(
					'sup'=>"luon toi",
					'ruou'=>"vodka",
					), 
				'mon_chinh' => array(
					'com' => "com rang",
					'pho' =>"pho bo"
					), 
				'mon_trang_mieng' => array(
					'kem' => "Kem y",
					'nuoc' =>"cafe"
					)  
				) 

			);

		// duyet cac phan tu trong mang 
		foreach ($thucdon as $key => $value) {
			echo "Key : " .$key;
			
				foreach ($value as $key2 => $value2) {
					echo "<pre>";					
					echo "Key2 la : $key2";

					echo "
					Value2 la :  ";
						foreach ($value2 as $key3 => $value3) {
							echo "Key3 la : $key3";
							echo "Value3 la : $value3";
						}
					echo "</pre>";
				}
			echo "<hr>";
		}
	}

}

/* End of file mangdemo.php */
/* Location: ./application/controllers/mangdemo.php */