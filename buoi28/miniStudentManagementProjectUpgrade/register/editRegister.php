<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cập nhật điểm</title>
    <link rel="stylesheet" href="../lib/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <a href="listRegister.php" class="btn btn-info">Registers</a>
        <h1>Cập nhật điểm</h1>
        <form action="updateRegister.php" method="POST">
        	<?php
        		$student_id = $_GET["student_id"];
        		$student_name = $_GET["student_name"];
        		$subject_id = $_GET["subject_id"];
        		$subject_name = $_GET["subject_name"];
        		$score = $_GET["score"];
        	?>
            <input type="hidden" name="student_id" value="<?=$student_id?>">
            <input type="hidden" name="subject_id" value="<?=$subject_id?>">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>Tên sinh viên</label>
                            <span><?=$student_name?></span>
                        </div>
                        <div class="form-group">
                            <label>Tên môn học</label>
                            <span><?=$subject_name?></span>
                        </div>
                        <div class="form-group">
                            <label for="score">Điểm</label>
                            <input type="text" name="score" id="score" value="<?=$score?>">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success" type="submit">Lưu</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</body>
</html>