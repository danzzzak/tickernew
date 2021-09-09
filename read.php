<?php
include "model.php";

$read_id = $_POST['read_id'];
$model = new Model();
$row = $model->read($read_id);

if(!empty($row)) { ?>
<p> title - <?php echo $row['title'] ?></p>
<p> disc - <?php echo $row['disc'] ?></p>



<?php

}

?>