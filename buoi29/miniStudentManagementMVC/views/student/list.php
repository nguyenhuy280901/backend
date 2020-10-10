<?php include '../layout/header.php' ?>
    <h1>Danh sách sinh viên</h1>
    <a href="StudentController.php?action=add" class="btn btn-info">Add</a>
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
                $stt = 0;
                foreach($students as $student){
                    $stt++;
            ?>
                <tr>
                    <td><?=$stt?></td>
                    <td><?=$student->getId()?></td>
                    <td><?=$student->getName()?></td>
                    <td><?=$student->getBirthday()?></td>
                    <td><?=$student->getGenderName()?></td>
                    <td><a href="StudentController.php?action=edit&id=<?=$student->getId()?>">Sửa</a></td>
                    <td><a href="StudentController.php?action=delete&id=<?=$student->getId()?>">Xóa</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
<?php include '../layout/footer.php' ?>
