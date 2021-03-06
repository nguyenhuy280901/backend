<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thêm sinh viên</title>
    <link rel="stylesheet" href="../lib/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <a href="listStudent.php" class="btn btn-info">Students</a>
        <h1>Thêm sinh viên</h1>
        <script src="../lib/jquery/jquery.min.js"></script>
        <script src="../lib/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <form action="saveStudent.php" method="POST">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <div class="col">
                                <label>Tên</label>
                                <input type="text" class="form-control" placeholder="Tên của bạn" required name="name">
                            </div>
                    
                        </div>
                        <div class="form-group">
                            <label>Birthday</label>
                                <input type="date" class="form-control" placeholder="Ngày sinh của bạn" required name="birthday">
                        </div>
                        
                        <div class="form-group">
                            <label>Chọn Giới tính</label>
                            <select class="form-control" id="gender" name="gender" required>
                                <option value="0">Nam</option>
                                <option value="1">Nữ</option>
                                <option value="2">Khác</option>
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