 <?php 
include 'model.php';

if (isset($_POST["update"])) {
    if (isset($_POST["edit_title"]) && isset($_POST["edit_disc"]) && isset($_POST["edit_id"])) {
        if(!empty($_POST['edit_title']) && !empty($_POST['edit_disc']) && !empty($_POST['edit_id'])){

            $data['edit_id'] = $_POST['edit_id'];
            $data['edit_title'] = $_POST['edit_title'];
            $data['edit_disc'] = $_POST['edit_disc'];
            $data['tablee'] = $_POST['tablee'];
            $data['tekdata'] = $_POST['tekdata'];

            $model = new Model();
            $update = $model->update($data);

            // $query = "INSERT INTO records (title,disc) VALUES ('$title', '$disc')";
        }
        else {
            echo "
                <script> alert(''net poley); </script>
            ";
        }
    }
} 

?>