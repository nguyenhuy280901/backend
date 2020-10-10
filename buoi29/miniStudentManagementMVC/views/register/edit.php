<?php include "../layout/header.php"?>  
    <h1>Cập nhật điểm</h1>
    <form action="RegisterController.php?action=update" method="POST">
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
<?php include "../layout/footer.php"?>