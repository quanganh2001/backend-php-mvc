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
			<h3 class="text-xs-center"> Sửa số và giá tiền  </h3>
			<hr>		 
	</div>

<div class="container">
	<div class="row">
		 	
		 	<?php foreach ($mangketqua as $key => $value): ?>
		 		
		  	<div class="container">
				<div class="row">
					<div class="col-sm-8 push-sm-2">
						<form action="../showData/updateData" method="post" enctype="multidata/form-data">

							<div class="card">
							<div class="card-block">
								  
									<input  name="id"    type="hidden" class="form-control" id="formGroupExampleInput" placeholder="vd : 09090909" value="<?= $value['id'] ?>">
								 
								 <fieldset class="form-group">
									<label for="formGroupExampleInput">Số sim </label>
									<input name="so" type="text" class="form-control" id="formGroupExampleInput" placeholder="vd : 09090909" value="<?= $value['so'] ?>">
								</fieldset>
								<fieldset class="form-group">
									<label for="formGroupExampleInput2">Giá sim</label>
									<input name="gia" type="text" class="form-control" id="formGroupExampleInput2" placeholder="vd : 4500000" value="<?= $value['gia'] ?>">
								</fieldset>
								<input type="submit" class="btn btn-success btn-block" value="Lưu ">
							</div>
							</div>

							
						</form>
					</div>
				</div>
			</div>
			 
			<?php endforeach ?>
		 
	</div>
</div>
	
</body>
</html>