<?php

require_once('model.php');;
$model = new Model();
$rows = $model -> table();
?>

<select name="tablee" id="tableemodal">
    <?php
    echo "<option value=''>Выбор</option>";
        foreach ($rows as $row) {
            $rowid =  $row['kto'];
            echo "<option name='$rowid'> $rowid </option>";
        }
    ?>
</select>