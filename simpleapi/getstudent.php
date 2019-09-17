<?php
    $servername= "localhost";
    $username="root";
    $password="";
    $dbname="student";
    $conn= new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_error){
              echo "Connection failed";
    }else{
       
        $sql = "SELECT * FROM student_details";
        $result = $conn->query($sql);
         if($result){
                        // while($row = $result->fetch_assoc()){
                        //                 echo "id:".$row["id"]."-Name".$row["name"]."".row["gender"];
                        // }
                        
                                if($result->num_rows>0){
                                               while($row= $result->fetch_assoc()){
                                                        echo " ".$row["id"]."Name: ".$row["name"]." Gender: ".$row["gender"]." address: ".$row["address"]." <br>d";
                                               }
                                }
                        
         }else{
                        echo "0 resutls";
         }
         echo "Connected Successfully";
            }
                
        

?>
