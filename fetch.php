<?php

include "model.php";
$model = new Model();
$rows = $model -> fetch();
// var_dump($rows); // json?

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
        $i=1;
            if (!empty($rows)) {
                foreach ($rows as $row) { ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['title'] ?></td>
                        <td><?php echo $row['disc'] ?></td>
                        <td>  
                            <a href="#" id="read" class="badge-info" value=" <?php echo $row['id']; ?>" data-toggle="modal" data-bs-target="#exampleModal"> read</a>                      
                            <a href="#" id="del" class="badge-danger" value=" <?php echo $row['id']; ?>">del</a>
                            <a href="#" id="edit" class="badge-warning" value=" <?php echo $row['id']; ?>">edit</a>
                        </td>
                    </tr>
                    <?php
                }
            }
            else {
                echo "pustie stroki";
            }
             ?>
        
    </tbody>
</table>