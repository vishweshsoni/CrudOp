<?php
class Database{
    private $host="localhost";
    private $db_name="student";
    private $username="root";
    private $password="";
    public $conn;
    public function getConnection(){
            $this->conn= null;
            try{
                $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
                $this->conn->exec("set names utf8");
            }catch(PDOException $e){
                    echo "Connection Error:".$d->getMessage();
            }
            return $this->conn;
    }

}
?>