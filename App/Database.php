<?php
    class Database{
        private $dsn;
        private $dbname;
        private $dbuser;
        private $pass;
        private $pdo;   
        public $err="";
        public function __construct($dsn="localhost:3308", $dbname="travel", $dbuser="root", $pass=""){
            $this->dsn= $dsn;
            $this->dbname= $dbname;
            $this->dbuser= $dbuser;
            $this->pass= $pass;
        }
        
        public function getpdo(){
            try{
            $pdo=new PDO('mysql:host=localhost:3308;dbname=travel','root','');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo= $pdo;
            } catch(EXCEPTION $libiti){
                echo $libiti->getMessage();
            }
            return $pdo;
        }

        public function register($username, $fname, $lname, $email, $pass, $tel){
            if(!empty($username) AND !empty($fname) AND !empty($lname) AND !empty($email) AND !empty($pass) AND !empty($tel)){
                $sql="insert into client(username, fname, lname, email, pass, tel) values(:username, :fname, :lname, :email, :pass, :tel)";
                $prepare= $this->getpdo()->prepare($sql);
                $execute= $prepare->execute([":username"=> $username, ":fname"=> $fname, ":lname"=> $lname, ":email"=> $email, ":pass"=> $pass, ":tel"=> $tel]);
                if($execute){
                    header("location: offre.php");
                }else{
                    $error= "*email or username already exists";
                }
            }else{
                $error= "*You should fill your informations";
            }
            $this->err=$error;
            return $error;
        }

        public function login($username, $pass){
            if(!empty($username) AND !empty($pass)){
                $sql="select * from client where username='$username' and pass='$pass'";
                $query= $this->getpdo()->query($sql);
                $dd= $query->rowCount();
                if($dd>0){
                    $_SESSION['username'] = $username;
                    header("location: offre.php");
                }else{
                    $error= "*username or password is incorrect";
                }
            }else{
                $error= "*You should fill your informations";
            }
            $this->err=$error;
            return $error;
        }

        public function loginn($username, $pass){
            if(!empty($username) AND !empty($pass)){
                $con="select * from admin where username='$username' and pass='$pass'";
                $query= $this->getpdo()->query($con);
                $mm= $query->rowCount();
                if($mm>0){
                    $_SESSION['username'] = $username;
                    header("location: admin-views/offre.php");
                }else{
                    $error= "*username or password is incorrect";
                }
            }else{
                $error= "*You should fill your informations";
            }
            $this->err=$error;
            return $error;
        }

        
        public function validation(){
            return $this->err;
        }

        public function contact($name, $email, $message){
            $sql="insert into contact(name, email, message) values(:name, :email, :message)";
            $prepare= $this->getpdo()->prepare($sql);
            $execute= $prepare->execute([":name"=>$name, "email"=>$email, "message"=>$message]);
            if($execute){
                $error="<div class='alert alert-success' role='alert'>
                your message is sent successfully
                </div>
                    ";
            }else{
                $error="<div class='alert alert-danger' role='alert'>
                your message was not sent successfully
                </div>
                    ";
            }
            $this->err=$error;
            return $error;
        }

    }

?>  

