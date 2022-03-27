Nội dung bài học

[Thử nghiệm](#thử-nghiệm)

[First controller](#first_controller)

[Nhập dữ liệu về số điện thoại](#nhập-dữ-liệu-về-số-điện-thoại)

Những file source code đều được lưu trong folder application và views
# Thử nghiệm
## First_controller
```php
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
```
Kết quả là:
```php
Hello World
```
## Nhập dữ liệu về số điện thoại
```php
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Third_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$sdt['danhsachsodienthoai'] = array('0977991953', '0356326737', '0335284119', '0123456789');

		$this->load->view('third_view', $sdt);
		// view chỉ nhận truyền vào là một cái mảng
	}

}

/* End of file Third_controller.php */
/* Location: ./application/controllers/Third_controller.php */
```
```php
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>View đầu tiên</title>
	<style>
		h3 {
			text-align: center;
			font-family: 'segoe ul light';
			border-bottom: 1px solid gray;
			padding: 10px;
		}
	</style>
</head>
<body>
	<h3>Dữ liệu các số điện thoại của cửa hàng bán SIM</h3>
	<ul>
		<?php foreach ($danhsachsodienthoai as $key): ?>
			<li> <?php echo "$key"; ?> </li>
		<?php endforeach ?>
	</ul>
</body>
</html>
```
Kết quả là:
<b>Dữ liệu các số điện thoại của cửa hàng bán SIM</b>

-   0977991953
-   0356326737
-   0335284119
-   0123456789