<?php include "../layout/header.php"?>
    <h1>Thêm đăng ký môn học</h1>
    <form action="RegisterController.php?action=save" method="POST">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="student_id">Tên sinh viên</label>
                        <select name="student_id" id="student_id">
                            <?php
                                foreach ($students as $student) {
                            ?>
                            <option value="<?=$student->getId()?>"><?=$student->getId()?>-<?=$student->getName()?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="subject_id">Tên môn học</label>
                        <select name="subject_id" id="subject_id">
                            <?php
                                foreach ($subjects as $subject) {
                            ?>
                            <option value="<?=$subject->getId()?>"><?=$subject->getId()?>-<?=$subject->getName()?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Lưu</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
<?php include "../layout/footer.php"?>