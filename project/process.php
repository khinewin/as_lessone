<?php 
include "database.php";

class Process{
    public $db=null;
   public function __construct()
   {
        $conn=new Database();
        $this->db=$conn->connect();
   }
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

$p=new Process();
var_dump($p->getUsers());