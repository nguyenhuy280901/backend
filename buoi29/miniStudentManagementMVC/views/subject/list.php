<?php include '../layout/header.php' ?>
    <h1>Danh Sách Môn Học</h1>
    <a href="SubjectController.php?action=add" class="btn btn-info">Add</a>
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
                $i = 0;
                foreach ($subjects as $subject) {
                    $i++;
            ?>
            <tr>
                <td><?=$i?></td>
                <td><?=$subject->getId()?></td>
                <td><?=$subject->getName()?></td>
                <td><?=$subject->getNumberOfCredit()?></td>
                <td><a href="SubjectController.php?action=edit&id=<?=$subject->getId()?>">Sửa</a></td>
                <td><a href="SubjectController.php?action=delete&id=<?=$subject->getId()?>">Xóa</a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
<?php include '../layout/footer.php' ?>

