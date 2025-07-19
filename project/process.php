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
}
