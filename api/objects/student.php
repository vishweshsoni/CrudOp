<?php
    class Student{
        private $conn;
        private $tablename="student_details";
        public $id;
        public $name;
        public $gender;
        public $address;
        public function __construct($db){
                $this->conn= $db;
        }
        function read(){
            $query="SELECT * FROM student_details";
            $stmt=$this->conn->prepare($query);
            $stmt->execute();          
            return $stmt;
        }
        function create(){
            $query="INSERT INTO ".$this->tablename." SET name=:name,gender=:gender,address=:address";
            $stmt = $this->conn->prepare($query);
            //sanitize;
            
            $this->name=htmlspecialchars(strip_tags($this->name));
            $this->gender=htmlspecialchars(strip_tags($this->gender));
            $this->address=htmlspecialchars(strip_tags($this->address));
            
            //bind value
            
            $stmt->bindParam(':name', $this->name);
            $stmt->bindParam(':gender', $this->gender);
            $stmt->bindParam(':address', $this->address);
            if($stmt->execute()){
                return true;
            }
         
            return false;        
        
        }

        
    }
?>