<?php

    // class Model{
    //     private $server = "lockalhost";
    //     private $username = "admin";
    //     private $password = "admin";
    //     private $db = "tasks";
    //     private $conn;

    //     public function __construct() {
    //         try {
    //             $this->conn = new PDO("mysql:host=$this->server;dbname=$this->db,$this->username,$this->password");
    //         } catch (PDOException $e) {
    //             echo "net conecta k BD" . $e -> getMessage();
    //         }
    //     }
    $connect = mysqli_connect("localhost", "admin", "admin", "tasks");


        public function insert(){
            if (isset($_POST["submit"])) {
                if (isset($_POST["title"]) && isset($_POST["disc"])) {
                    echo $title = $_POST['title'];
                    echo $disc = $_POST['disc'];
                }
            }
        }
        insert();

    // }

?>