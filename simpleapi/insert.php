<?php
    
    $servername= "localhost";
                $username="root";
                $password="";
                $dbname="student";
                $conn= new mysqli($servername,$username,$password,$dbname);
    if(isset($_POST['done'])){
            
            $name= $_POST['name'];
            $gender= $_POST['gender'];
            
            $q="INSERT INTO student_details(name,gender,address) VALUES('".$name."','".$gender."','Ahmedabad'   )";
            $result = $conn->query($q);
            

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
        <div class="col-lg-6 m-auto">
                <form method="post">
                        <div class="card">
                                <br>
                                <div class="card-header bg-dark">
                                  <h1 class="text-white text-center">Insert Opreation</h1>
                                </div>
                                <label>UserName</label>
                                <input type="text" name="name"class="form-control"><br>
                                <label>Gender</label>
                                <input type= "text" name="gender" class="form-control"><br>
                        
                                <button class="btn btn-success" type="submit" name="done">Submit</button>
                                <br>
                               
                        </div>
                </form>
        </div>
</body>
</html>