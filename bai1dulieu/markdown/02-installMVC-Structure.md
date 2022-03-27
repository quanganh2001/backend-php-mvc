Nội dung bài học:

[Cài đặt kiến trúc MVC](#cài-đặt-kiến-trúc-mvc)

[Chạy thử nghiệm](#chạy-thử-nghiệm)

# Cài đặt kiến trúc MVC
- Đầu tiên ta cài các extension như sau:
	+ bootstrap 4 autocomplete
	+ bootstrap 4 snippets
- tạo file mới ví dụ bai1dulieu rồi copy những file ở trong file CodeIgniter và copy vào thư mục htdocs.
# Chạy thử nghiệm
File addData_view.php
```php
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Thêm mới số sim điện thoại</title>
</head>
<body>
	<div class="container">
		<h2 class="text-xs-center">Thêm số điện thoại ở trong form sau</h2>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-8 push-sm-2">
				<form>
					<fieldset class="form-group">
						<label for="formGroupExampleInput">Example label</label>
						<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
					</fieldset>
					<fieldset class="form-group">
						<label for="formGroupExampleInput2">Another label</label>
						<input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Example input">
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
```
File AddData.php
```php
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AddData extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('addData_view');
		// echo "test xem chạy được chưa";
		// chạy qua đường dẫn là tên miền /index.php/addData/
	}

}

/* End of file AddData.php */
/* Location: ./application/controllers/AddData.php */
```
Cách chạy như sau: ```localhost/tên file/index.php/file trong cotrollers```