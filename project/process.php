<?php 
include "database.php";

class Process{
   
    public function create(){
        $conn=new Database();
        $db=$conn->connect();

        $name="mgmg";
        $email="mgmg@gmail.com";
        $password="password";

        $query="insert into users (name, email, password) 
        values (:name, :email, :password)";
        $stmt=$db->prepare($query);
        $stmt->execute([":name"=>$name, ":email"=>$email, ":password"=>$password]);
    }
}

$p=new Process();
$p->create();