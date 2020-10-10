<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../lib/bootstrap-3.3.7-dist/css/bootstrap.min.css">
        <title>Danh Sách Môn Học</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <div class="container">
        <a href="../student/listStudent.php" class="btn btn-info">Students</a>
        <a href="../subject/listSubject.php" class="btn btn-info">Subject</a>
        <a href="../register/listRegister.php" class="btn btn-info">Register</a>	
        <h1>Danh Sách Môn Học</h1>
        <a href="addSubject.php" class="btn btn-info">Add</a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Mã MH</th>
                    <th>Tên</th>
                    <th>Số tín chỉ</th>
                    <th colspan="2">Tùy Chọn</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "../connectDB.php";

                    $sql = "SELECT * FROM subject";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0){
                        $i = 0;
                        while($row = $result->fetch_assoc()){
                            $i++;
                            ?>
                                <tr>
                                    <td><?=$i?></td>
                                    <td><?=$row["id"]?></td>
                                    <td><?=$row["name"]?></td>
                                    <td><?=$row["number_of_credit"]?></td>
                                    <td><a href="editSubject.php?id=<?=$row["id"]?>">Sửa</a></td>
                                    <td><a href="deleteSubject.php?id=<?=$row["id"]?>">Xóa</a></td>
                                </tr>
                            <?php
                        }
                    }
                    $conn->close();
                ?>
                
            </tbody>
        </table>
        <script src="../lib/jquery/jquery.min.js" type="text/javascript" charset="utf-8" async defer></script>
        <script src="../lib/bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
    </body>
</html>

