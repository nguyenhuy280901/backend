<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Xem Điểm</title>
	<link rel="stylesheet" href="vendor/bootstrap-4.5.0-dist/css/bootstrap.min.css">
	<script type="text/javascript" src="vendor/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="vendor/bootstrap-4.5.0-dist/js/bootstrap.min.js"></script>
	<!-- <script type="text/javascript" src="js/script.js"></script> -->
</head>
<body>
	<main>
		<?php
			if(isset($_POST["xemdiem"])){
				$tongdiem = ($_POST["toan"] + $_POST["ly"])*2 + $_POST["hoa"];
				$result = $tongdiem >= 24 ? "Đậu" : "Rớt";
			}
		?>
		<section class="xem-diem">
			<form action="index.php" method="POST">
				<div class="container-fluid">
					<h2 class="text-center">Xem đậu/rớt ĐH</h2>
					<div class="row mb-2">
						<div class="col-md-6 text-right">
							Toán: 
						</div>
						<div class="col-md-6">
							<input id="toan" name="toan" type="number" placeholder="Toán" class="form-control" min=0 max=10>
						</div>
					</div>
					<div class="row mb-2">
						<div  class="col-md-6 text-right">
							Lý: 
						</div>
						<div class="col-md-6">
							<input id="ly" name="ly" type="number" placeholder="Lý" class="form-control" min=0 max=10>
						</div>
					</div>
					<div class="row mb-2">
						<div  class="col-md-6 text-right">
							Hóa: 
						</div>
						<div class="col-md-6">
							<input id="hoa" name="hoa" type="number" placeholder="Hóa" class="form-control" min=0 max=10>
						</div>
					</div>
					<div class="row mb-2">
						<div class="col-md-6">
							
						</div>
						<div class="col-md-6">
							<input type="submit" name="xemdiem" value="Xem" class="calc btn btn-primary">
						</div>
					</div>
					<div class="row mb-2">
						<div class="col-md-6">
							
						</div>
						<div class="col-md-6">
							Bạn: <span>
								<?php 							
									echo isset($result) ? $result : "";
								?>	
								</span>
						</div>
					</div>
				</div>
			</form>	
		</section>
	</main>
</body>
</html>