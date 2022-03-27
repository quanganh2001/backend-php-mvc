<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Xem dữ liệu</title>

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
	<div class="container">		 
			<h3 class="text-xs-center"> Các sim và giá hiện có </h3>
			<hr>		 
	</div>

<div class="container">
	<div class="row">
		 	
		 	<?php foreach ($dulieutucontroller as $key => $value): ?>
		 		
		 
				<div class="col-sm-4">
					<div class="card card-block">
						<h3 class="card-title">Số sim: <?= $value['so'] ?></h3>
						<p class="card-text">Giá tiền : <?= $value['gia'] ?>   </p>
 						<a href="../showData/deleteData/<?=  $value['id'] ?>" class="btn btn-danger xoa"> <i class="fa fa-times"></i></a>

 					 	<a href="../showData/editSim/<?=  $value['id'] ?>" class="btn btn-warning xoa"> <i class="fa fa-pencil"></i></a>
 					 
	 				</div>
				</div>
			 
			<?php endforeach ?>
		 
	</div>
</div>
	
</body>
</html>