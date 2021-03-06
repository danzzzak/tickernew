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
                        $tablee = $_POST['tablee'];
                        $opis = $_POST['opis'];
                        $query = "INSERT INTO records (title,disc,tekdata,tablee,opis) VALUES ('$title', '$disc', NOW(), '$tablee', '$opis' )";
                        echo "$date";
                        
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

            $stmt=$this->conn->prepare("SELECT * FROM records ORDER BY id DESC");

            $stmt->execute();

            $data = $stmt->fetchAll();

            return $data;
        }

        public function del($del_id) {
            $query = "DELETE FROM records WHERE id = '$del_id' ";
            if ($sql = $this->conn->exec($query)) {
                echo "
                <div class='alert alert-success alert-dismissible fade show' role='alert'>
                DELITED
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'> 
                <span aria-hidden='true'>&times </span>
                </button>
                </div>
                ";
            } else {
                echo "neydacha delita";
            }
        } 

        public function read($read_id) {
            $data=null;
            $stmt = $this->conn->prepare("SELECT * FROM records WHERE id = '$read_id' ");
            $stmt->execute();
            $data = $stmt->fetch();
            return $data;
        }

        public function edit($edit_id) {
            $data = null;
            $stmt = $this->conn->prepare("SELECT * FROM records WHERE id = '$edit_id' ");
            $stmt->execute();
            $data=$stmt->fetch();
            return $data;
        }

        public function update($data) {
            $query = "UPDATE records SET title='$data[edit_title]', disc='$data[edit_disc]',
             tablee='$data[tablee]', opis='$data[opis]'
              WHERE id='$data[edit_id]'";
            
            if ($sql = $this->conn->exec($query) ) {
                echo "
                    <div class='alert alert-success alert-dismissible fade show' role='alert'>
                    Ydachno v basy update
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'> 
                    <span aria-hidden='true'>&times </span>
                    </button>
                    </div>
                    ";

            }else {
                echo "
                            <div class='alert alert-success alert-dismissible fade show' role='alert'>
                            neydacha updata
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'> 
                            <span aria-hidden='true'>&times </span>
                            </button>
                            </div>
                            ";
            }


        }

        public function table() {
            $data = null;

            $stmt=$this->conn->prepare("SELECT * FROM kogo");

            $stmt->execute();

            $data = $stmt->fetchAll();

            return $data;
        }


    }

?>