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
        <h1>Danh sách sinh viên đăng ký môn học</h1>
        <a href="addRegister.php" class="btn btn-info">Add</a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Mã SV</th>
                    <th>Tên SV</th>
                    <th>Mã MH</th>
                    <th>Tên MH</th>
                    <th>Điểm</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "../connectDB.php";

                    $sql = "SELECT ss.*, st.name AS student_name, su.name AS subject_name FROM student_subject ss
                            JOIN student st ON st.id = ss.student_id
                            JOIN subject su ON su.id = ss.subject_id";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0){
                        $i = 0;
                        while($row = $result->fetch_assoc()){
                            $i++;
                        ?>
                            <tr>
                            <td><?=$i?></td>
                            <td><?=$row["student_id"]?></td>
                            <td><?=$row["student_name"]?></td>
                            <td><?=$row["subject_id"]?></td>
                            <td><?=$row["subject_name"]?></td>
                            <td><?=$row["score"]?></td>
                            <td>
                                <a href="editRegister.php?student_id=<?=$row["student_id"]?>&student_name=<?=$row["student_name"]?>&subject_id=<?=$row["subject_id"]?>&subject_name=<?=$row["subject_name"]?>&score=<?=$row["score"]?>"
                                >Cập nhật điểm</a>
                            </td>
                            <td>
                                <a href="deleteRegister.php?student_id=<?=$row["student_id"]?>&subject_id=<?=$row["subject_id"]?>"
                                >Xóa</a>
                            </td>
                            </tr>
                        <?php
                        }
                    }
                    $conn->close();
                ?>
            </tbody>
        </table>
    </div>
    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</body>
</html>

