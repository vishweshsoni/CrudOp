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
        }

?>
<html>
<head>
        
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <div class="col-lg-12">
        
        <h1 clas="text-warning text-center">Display Table data</h1>
        <br>
        <br>
        <table class="table table-striped table-hover table-border">

            <tr class="bg-dark text-white text-center">
                <th>ID</th>    
                <th>Username</th>
                <th>gender</th>
                <th>Address</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
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
                    if($result->num_rows>0){
                        while($row= $result->fetch_assoc()){
                     

            ?>        
            <tr class="text-center">
                <td><?php echo$row["id"];?></td>    
                <td><?php echo$row["name"];?></td>
                <td><?php echo$row["gender"];?></td>
                <td><?php echo$row["address"];?></td>
                <td>
                <button class="btn-danger btn">
                <a href="delete.php?id=<?php echo $row["id"];?>" class="text-white">
                Delete
                </a>
                </td>
                <td>
                </button>
                <button class="btn-primary btn">
                <a href="update.php?id=<?php echo $row["id"];?>" class="text-white">
                Update
                </a>
                </button> 
                </td>
                
            <?php
                           //  echo " ".$row["id"]."Name: ".$row["name"]." Gender: ".$row["gender"]." address: ".$row["address"]." <br>d";
                                
                        }
                    }
               }
            ?>
            </tr>
        </table>
            </div>
    </div>
</body>
</html>