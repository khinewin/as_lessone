<?php 
include "database.php";

class Process{
    public $db=null;
   public function __construct()
   {
        $conn=new Database();
        $this->db=$conn->connect();
   }

   public function register($name, $email, $pass){
        $query="insert into users (name, email, password) values (:name, :email, :password)";
        $stmt=$this->db->prepare($query);
        $pass_hash=password_hash($pass, PASSWORD_BCRYPT);
        $stmt->execute([":name"=>$name, ":email"=>$email,":password"=>$pass_hash ]);
        $_SESSION['success_msg']="The user account has been signup.";
        header("location: register.php");
   }

   //md5, sha1, bcrypt




    public function create(){    

        $name="mgmg";
        $email="mgmg@gmail.com";
        $password="password";

        $query="insert into users (name, email, password) 
        values (:name, :email, :password)";
        $stmt=$this->db->prepare($query);
        $stmt->execute([":name"=>$name, ":email"=>$email, ":password"=>$password]);
    }
    function getUsers(){
        $query="select * from users";
        $stmt=$this->db->query($query);
        return $stmt->fetchAll();
    }
}
