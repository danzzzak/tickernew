<?php
include "model.php";
$edit_id = $_POST['edit_id'];
$model = new Model();
$row = $model->edit($edit_id);
if(!empty($row)) { ?>
                    <form action="" method="post" id="form">
                    <div id="result"></div>
                    <div class="form-group">
                        <label for="">label</label>
                        <input type="text" id='edit_title' class="form-control" value ="<?php echo $row['title'];  ?>" >
                    </div>
                    <div class="form-group">
                    <label for="">disc</label>
                    <input type="text" id='edit_disc' class="form-control" value ="<?php echo $row['disc'];  ?>" >
                    </div>
                    <div class="form-group">
                        <button type = 'submit' id='update' class="btn btn-outline-primary">update</button>
                    </div>
                </form>
<?php }

?>