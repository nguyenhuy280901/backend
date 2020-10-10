<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chỉnh sửa sinh viên</title>
	<link rel="stylesheet" href="../lib/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<div class="container">
		<a href="listStudent.php" class="btn btn-info">Students</a>
		<h1>Chỉnh sửa sinh viên</h1>
				<script src="../lib/jquery/jquery.min.js"></script>
		<script src="../lib/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
		<form action="updateStudent.php" method="POST">
			<?php
				$id = $_GET["id"];
                include "../connectDB.php";

                $sql = "SELECT * FROM student WHERE id=$id";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
            ?>
			<input type="hidden" name="id" value="<?=$id?>">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<div class="form-group">
							<div class="col">
								<label>Tên</label>
								<input type="text" class="form-control" placeholder="Tên của bạn" required name="name" value="<?=$row["name"]?>">
							</div>
					
						</div>
						<div class="form-group">
							<label>Birthday</label>
								<input type="date" class="form-control" placeholder="Ngày sinh của bạn" required name="birthday" value="<?=$row["birthday"]?>">
						</div>
						
						<div class="form-group">
							<label>Chọn Giới tính</label>
							<select class="form-control" id="gender" name="gender" required>
								<option value="0" <?= $row["gender"] == 0 ? "selected" : ""?>>Nam</option>
								<option value="1" <?= $row["gender"] == 1 ? "selected" : ""?>>Nữ</option>
								<option value="2" <?= $row["gender"] == 2 ? "selected" : ""?>>Khác</option>
							</select>
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