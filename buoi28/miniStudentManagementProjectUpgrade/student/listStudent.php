<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sinh viên</title>
    <link rel="stylesheet" href="../lib/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <a href="../student/listStudent.php" class="btn btn-info">Students</a>
        <a href="../subject/listSubject.php" class="btn btn-info">Subject</a>
        <a href="../register/listRegister.php" class="btn btn-info">Register</a>
        <h1>Danh sách sinh viên</h1>
        <a href="addStudent.php" class="btn btn-info">Add</a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Mã SV</th>
                    <th>Tên</th>
                    <th>Ngày Sinh</th>
                    <th>Giới Tính</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "../connectDB.php";

                    $sql = "SELECT * FROM student";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0){
                        $i = 0;
                        $gender_map = [0 => "Nam", 1 => "Nữ", 2 => "Kxđ"];
                        while($row = $result->fetch_assoc()){
                            $i++;
                            $gender = $gender_map[$row["gender"]];
                            // "php echo " thay thế bằng dấu "="
                            ?>
                                <tr>
                                    <td><?=$i?></td>
                                    <td><?=$row["id"]?></td>
                                    <td><?=$row["name"]?></td>
                                    <td><?=$row["birthday"]?></td>
                                    <td><?=$gender?></td>
                                    <td><a href="editStudent.php?id=<?=$row["id"]?>">Sửa</a></td>
                                    <td><a href="deleteStudent.php?id=<?=$row["id"]?>">Xóa</a></td>
                                </tr>
                            <?php
                        }
                    }
                    $conn->close();
                ?>
            </tbody>
        </table>
        <script src="../lib/jquery/jquery.min.js"></script>
        <script src="../lib/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    </div>
</body>
</html>

