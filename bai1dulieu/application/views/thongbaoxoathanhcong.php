<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Xóa thành công</title>
	<!-- Kết nối thư viện bootstrap và css -->
	<script type="text/javascript" src="../../public/vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="../../public/1.js"></script>
	<link rel="stylesheet" href="../../public/vendor/bootstrap.css">
	<link rel="stylesheet" href="../../public/vendor/font-awesome.css">
 	<link rel="stylesheet" href="../../public/1.css">
</head>
<body>
	<?php require('header_sim.php') ?>
	<h2 class="text-xs-center">Bạn đã xóa thành công số sim!</h2>
	<div class="container text-xs-center">
		<a href="<?= base_url(); ?>index.php/showData/" class="btn btn-info">Về trang chủ</a>
	</div>
</body>
</html>