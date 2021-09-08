<?php

    class Model{
        private $server = "localhost";
        private $username = "root  ";
        private $password = "admin";
        private $db = "tasks";
        private $conn;

        public function __construct() {
            try {
                $this->conn = new PDO("mysql:host=$this->server;dbname=$this->db,$this->username,$this->password");
            } catch (PDOException $e) {
                echo "net conecta k BD" . $e -> getMessage();
            }
        }

        public function insert(){
            if (isset($_POST["submit"])) {
                if (isset($_POST["title"]) && isset($_POST["disc"])) {
                    echo $title = $_POST['title'];
                    echo $disc = $_POST['disc'];
                }
            }
        }

    }

?>