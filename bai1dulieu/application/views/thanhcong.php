<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Thành công</title>

	<base href="/bai1dulieu/index.php/AddData/">
	<!-- Kết nối thư viện bootstrap và css -->
	<script type="text/javascript" src="../../public/vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="../../public/1.js"></script>
	<link rel="stylesheet" href="../../public/vendor/bootstrap.css">
	<link rel="stylesheet" href="../../public/vendor/font-awesome.css">
 	<link rel="stylesheet" href="../../public/1.css">
</head>
<body>
	<?php require('header_sim.php') ?>
	<h1 class="text-xs-center display-3">Dữ liệu đã được insert thành công</h1>
		<a href="<?php echo base_url(); ?>index.php/showData" class="btn btn-info btn-lg">Quay về trang chủ 
			<i class="fa fa-chevron-left"></i>
		</a>
</body>
</html>