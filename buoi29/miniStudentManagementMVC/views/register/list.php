<?php include "../layout/header.php"?>		
    <h1>Danh sách sinh viên đăng ký môn học</h1>
    <a href="RegisterController.php?action=add" class="btn btn-info">Add</a>
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
            $stt = 0;
            foreach($registers as $register) {
                $stt++;
            ?>
            <tr>
                <td><?=$stt?></td>
                <td><?=$register->getStudentId()?></td>
                <td><?=$register->getStudent()->getName()?></td>
                <td><?=$register->getSubjectId()?></td>
                <td><?=$register->getSubject()->getName()?></td>
                <td><?=$register->getScore()?></td>
                <td>
                    <a href="RegisterController.php?action=edit&student_id=<?=$register->getStudentId()?>&student_name=<?=$register->getStudent()->getName()?>&subject_id=<?=$register->getSubjectId()?>&subject_name=<?=$register->getSubject()->getName()?>&score=<?=$register->getScore()?>">
                        Cập nhật điểm
                    </a>
                </td>
                <td>
                    <a href="RegisterController.php?action=delete&student_id=<?=$register->getStudentId()?>&subject_id=<?=$register->getSubjectId()?>">
                        Xóa
                    </a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
<?php include "../layout/footer.php"?>

