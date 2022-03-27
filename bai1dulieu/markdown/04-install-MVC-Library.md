Nội dung bài học

[Chuẩn bị tài nguyên](#chuẩn-bị-tài-nguyên)

[Các bước để link đến file thư việc trong mô hình MVC](#các-bước-để-link-đến-file-thư-viện-trong-mô-hình-mvc)

# Chuẩn bị tài nguyên
- tải source code: https://drive.google.com/file/d/0B0vWsbgxzDLEcFBPRFdvTmpaVjA/view?usp=sharing&resourcekey=0-FZXAaypis4qGQ6rnVuc2aA
# Các bước để link đến file thư viện trong mô hình mvc
1. Copy các thư viện (bootstrap, font, js, jquery,...) vào ngoài application.
2. Khi link thư viện sẽ không link được luôn, mà phải sử dụng hàm base_url() (*Cách này không được*)
3. Kích hoạt url trong file autoload

![enter image description here](https://i.imgur.com/tZpDsE4.png)

4. kích hoạt thêm cái base url trong file config.php

![enter image description here](https://i.imgur.com/Vl7UZZ7.png)

5. Thêm đường dẫn trong view bằng hàm echo base_url();

*Tất cả những gì liên quan đến style, ảnh các thứ em cho ra 1 thư mục public riêng*

![public files](https://i.imgur.com/e2PtKg2.png)

Ví dụ minh họa
```html
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Thêm mới số sim điện thoại</title>

	<!-- Kết nối thư viện bootstrap và css -->
	<script type="text/javascript" src="../public/vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="../public/1.js"></script>
	<link rel="stylesheet" href="../public/vendor/bootstrap.css">
	<link rel="stylesheet" href="../public/vendor/font-awesome.css">
 	<link rel="stylesheet" href="../public/1.css">

 	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
</head>
<body>
	<div class="container">
		<h2 class="text-xs-center">Thêm số điện thoại ở trong form sau</h2>
		<hr>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-8 push-sm-2">
				<form>
					
					<div class="card">
					<div class="card-block">
						<fieldset class="form-group">
							<label for="formGroupExampleInput">Số sim</label>
							<input type="text" class="form-control" id="formGroupExampleInput" placeholder="vd: 0977991953">
						</fieldset>
						<fieldset class="form-group">
							<label for="formGroupExampleInput2">Giá sim</label>
							<input type="text" class="form-control" id="formGroupExampleInput2" placeholder="vd: 500000">
						</fieldset>
						<input type="submit" class="btn btn-success btn-block" value="Nhập vào MySQL">
					</div>
					</div>	

				</form>
			</div>
		</div>
	</div>
</body>
</html>
```