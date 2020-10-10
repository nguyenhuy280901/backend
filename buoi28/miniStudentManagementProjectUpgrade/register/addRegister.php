<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thêm sinh viên</title>
    <link rel="stylesheet" href="../lib/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../js/script.js"></script>
</head>
<body>
    <div class="container">
        <a href="listRegister.php" class="btn btn-info">Registers</a>
        <h1>Thêm đăng ký môn học</h1>
        <script src="../lib/jquery/jquery.min.js"></script>
        <script src="../lib/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <form action="saveRegister.php" method="POST">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="student_id">Tên sinh viên</label>
                            <select name="student_id" id="student_id">
                                <option value="">Vui lòng chọn tên sinh viên</option>
                            <?php
                                include "../connectDB.php";

                                $sql = "SELECT * FROM student";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0){
                                    while($row = $result->fetch_assoc()){
                                    ?>
                                <option value="<?=$row["id"]?>"><?=$row["id"]?> - <?=$row["name"]?></option>
                                    <?php
                                    }
                                }
                                $conn->close();
                            ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="subject_id">Tên môn học</label>
                            <select name="subject_id" id="subject_id">
                                
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