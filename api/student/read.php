<?php
    header("Access-control-Allow-Origin: *");
    header("Content-type:application/json;charset-UTF-8");
    include_once '../config/database.php';
    include_once '../objects/student.php';
    $database= new Database();
    $db=$database->getConnection();
    $student=new Student($db);
    $stmt=$student->read();
    $num = $stmt->rowCount();
    if($num>0){
            $student_array=array();
            $student_array["records"]=array();
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                    extract($row);
                    $student_item =array(
                            "id"=>$id,
                            "name"=>$name,
                            "gender"=>$gender,
                            "address"=>$address,
                    );
                array_push($student_array["records"],$student_item);
            }
            http_response_code(200);
            echo json_encode($student_array);           
    }else if($num<=0){
        http_response_code(404);//Not Found;
        echo json_encode(array("message"=>"No Students Found"));
    }
?>


