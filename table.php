<?php

require_once('model.php');;
$model = new Model();
$rows = $model -> table();
// var_dump($rows);
?>

<select name="tablee" id="tablee">
    <?php
        echo "<option value=''>Выбор</option>";
        foreach ($rows as $row) {
            $rowid =  $row['kto'];
            echo "<option name='$rowid'> $rowid </option>";
        }
    ?>
</select>