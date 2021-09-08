<?php

include "model.php";
$model = new Model();
$rows = $model -> fetch();
var_dump($rows); // json?

?>

<table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>disc</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i=1
            if (!empty($rows)) {
                foreach ($rows as $row) { ?>
                    <tr>
                        <td><?php   echo $i++ ?></td>
                        <td><?php echo $row['title'] ?></td>
                        <td><?php echo $row['disc'] ?></td>
                    </tr>
                }
            }
        ?>
    </tbody>
</table>