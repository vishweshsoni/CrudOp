<?php
$con = mysqli_connect("localhost", "root", "", "test2");

$username = $_REQUEST["username"];
$password = $_REQUEST["password"];

$sql = "select * from user where username = '$username' and password = '$password' Limit 0,1";

$result = mysqli_query($con, $sql);


if(mysqli_num_rows($result) > 0){
    $data =  new \stdClass();
    $data->error = true;
    $data->message = "login Successful";
    
    echo json_encode($data);    
}
else{
    $data =  new \stdClass();
    $data->error = false;
    $data->message = "invalid username or password";
    
    echo json_encode($data);
}


?>
