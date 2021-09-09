<?php

    class Model{
        private $server = "lockalhost";
        private $username = "admin";
        private $password = "admin";
        private $db = "tasks";
        private $conn;

    //     public function __construct() {
    //         try {
    //             $this->conn = new PDO("mysql:host=$this->server;dbname=$this->db,$this->username,$this->password");
    //         } catch (PDOException $e) {
    //             echo "net conecta k BD" . $e -> getMessage();
    //         }
    //     }
    // $conn = mysqli_connect("localhost", "admin", "admin", "tasks");

        public function __construct() {
            try {
                $this->conn = new PDO("mysql:host=localhost;dbname=tasks", "admin", "admin");  
            } catch (PDOException $e) {
                echo "net conecta k BD" . $e -> getMessage();
            }
        }

        public function insert(){
            if (isset($_POST["submit"])) {
                if (isset($_POST["title"]) && isset($_POST["disc"])) {
                    if(!empty($_POST['title']) && !empty($_POST['disc'])){

                        $title = $_POST['title'];
                        $disc = $_POST['disc'];

                        $query = "INSERT INTO records (title,disc) VALUES ('$title', '$disc')";
                        
                        if ($sql = $this->conn->exec($query)) {
                            echo "
                            <div class='alert alert-success alert-dismissible fade show' role='alert'>
                            Ydachno v basy
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'> 
                            <span aria-hidden='true'>&times </span>
                            </button>
                            </div>
                            ";
                        } else {echo "fail"; }
                    }
                    else {
                        echo "
                        <div class='alert alert-success alert-dismissible fade show' role='alert'>
                        Pustie stroki
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'> 
                        <span aria-hidden='true'>&times </span>
                        </button>
                        </div>
                        ";
                    }
                }
            } 
        }


        public function fetch() {
            $data = null;

            $stmt=$this->conn->prepare("SELECT * FROM records");

            $stmt->execute();

            $data = $stmt->fetchAll();

            return $data;
        }
    }

?>