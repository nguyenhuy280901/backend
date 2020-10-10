<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../lib/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<title>Chỉnh Sửa Môn Học</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<div class="container">
		<a href="listSubject.php" class="btn btn-info">Subjects</a>
		<h1>Chỉnh Sửa Môn Học</h1>
		<form action="updateSubject.php" method="POST" accept-charset="utf-8">
			<?php
				$id = $_GET["id"];
                include "../connectDB.php";

                $sql = "SELECT * FROM subject WHERE id=$id";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
            ?>
			<div class="container">
				<div class="row">
					<input type="hidden" name="id" value="<?=$id?>">
					<div class="col-md-5">
						<div class="form-group">
							<div class="col">
								<label>Tên</label>
								<input type="text" class="form-control" placeholder="Tên của bạn" required name="name" value="<?=$row["name"]?>">
							</div>
						</div>
						<div class="form-group">
							<label>Số tín chỉ</label>
							<input type="text" class="form-control" placeholder="Số tín chỉ" required name="number_of_credit" value="<?=$row["number_of_credit"]?>">
						</div>
						<div class="form-group">
							<button class="btn btn-success" type="submit">Lưu</button>
						</div>
					
					</div>		
				</div>
			</div>
		</form>
	</div>

	<script src="../lib/jquery/jquery.min.js" type="text/javascript" charset="utf-8" async defer></script>
		<script src="../lib/bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
</body>
</html>
