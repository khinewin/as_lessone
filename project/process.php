<?php 
include "database.php";

class Process{
    public $db=null;
   public function __construct()
   {
        $conn=new Database();
        $this->db=$conn->connect();
   }
   public function login($email, $pass){
        $old_query="select * from users where email='$email'";
        $old_result=$this->db->query($old_query);
        $result=$old_result->fetch();
        if($result){
            
            $old_pass=$result['password'];
            if(password_verify($pass, $old_pass)){
                $_SESSION['user_auth']=$result;
                header("location: dashboard.php");
            }else{
                $_SESSION['error_msg']="Authentication failed.";
                header("location: index.php");
            } 
        }else{
            $_SESSION['error_msg']="The email not found on our record.";
            header("location: index.php");
        }

   }
   public function register($name, $email, $pass){

        $old_query="select email from users where email='$email'";
        $old_result=$this->db->query($old_query);
        $result=$old_result->fetch();
        if($result){
            $_SESSION['error_msg']="The selected email is already token.";
            header("location: register.php");
            return ;
        }

        $query="insert into users (name, email, password) values (:name, :email, :password)";
        $stmt=$this->db->prepare($query);
        $pass_hash=password_hash($pass, PASSWORD_BCRYPT);
        $stmt->execute([":name"=>$name, ":email"=>$email,":password"=>$pass_hash ]);
        $_SESSION['success_msg']="The user account has been signup.";
        header("location: register.php");
   }

   //md5, sha1, bcrypt    
}
