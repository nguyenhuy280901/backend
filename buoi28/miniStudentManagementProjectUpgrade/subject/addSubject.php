<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../lib/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<title>Thêm Môn Học</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<div class="container">
		<a href="listSubject.php" class="btn btn-info">Subjects</a>
		<h1>Thêm Môn Học</h1>
		<script src="../lib/jquery/jquery.min.js" type="text/javascript" charset="utf-8" async defer></script>
		<script src="../lib/bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
		<form action="saveSubject.php" method="POST" accept-charset="utf-8">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<div class="form-group">
							<div class="col">
								<label>Tên</label>
								<input type="text" class="form-control" placeholder="Tên Môn Học Mới" required name="name">
							</div>
					
						</div>
						<div class="form-group">
							<label>Số tín chỉ</label>
								<input type="text" class="form-control" placeholder="Chỉ số tín chỉ" required name="number_of_credit">
						</div>
						

						
						
						<div class="form-group">
							<button class="btn btn-success" type="submit">Lưu</button>
						</div>
					
					</div>		
				</div>
			</div>
		</form>
	</div>
</body>
</html>