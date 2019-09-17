<?php
    $servername= "localhost";
    $username="root";
    $password="";
    $dbname="student";
    $conn= new mysqli($servername,$username,$password,$dbname);
    $id=$_GET['id'];
    $q="DELETE FROM student_details WHERE id=$id";
    $result = $conn->query($q);
    if($result){
        header('location:display.php');
    }
    


?>