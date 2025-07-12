<?php 
class Database{
    public $db_name="php_project";
    public $db_user="root";
    public $db_pass="";
    public $db_host="localhost";

    public function connect(){
        $options=[
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::FETCH_DEFAULT => PDO::FETCH_OBJ
        ];
        $dsn="mysql:host=$this->db_host; dbname=$this->db_name";
        //mysqli, pdo
        try{
            $db=new PDO($dsn, $this->db_user, $this->db_pass, $options );
            return $db;
           // echo "Connected to database";
        }catch(PDOException $e){
            echo "Connection failed to database.". $e->getMessage();
        }
    }
}

//$db=new Database();
//$db->connect();