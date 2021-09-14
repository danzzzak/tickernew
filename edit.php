<?php
include "model.php";
$edit_id = $_POST['edit_id'];
$model = new Model();
$row = $model->edit($edit_id);
if(!empty($row)) {  ?>
<form action="" method="post" id="form">
    <div>
        <input type="hidden" id="edit_id" value="<?php echo $row['id'] ?>">
    </div>
    <div class="form-group">
        <label for="">label</label>
        <input type="text" id='edit_title' class="form-control" value="<?php echo $row['title'];  ?>">
    </div>
    <div class="form-group">
        <label for="">disc</label>
        <input type="text" id='edit_disc' class="form-control" value="<?php echo $row['disc'];  ?>">
    </div>
    <div class="form-group">
        <label for="">tekdata</label>
        <input type="text" id='edit_tekdata' class="form-control" value="<?php echo $row['tekdata'];  ?>">
    </div>
    <div>
        <?php require_once('tablemodal.php'); ?>
    </div>
    <div>
        <label for="">opis</label>
        <input type="text" id='opis' class="form-control" value="<?php echo $row['opis'];  ?>">
    </div>
    <div class="form-group">
        <button type='submit' id='update' class="btn btn-outline-primary">update</button>
    </div>
</form>
<?php }

?>