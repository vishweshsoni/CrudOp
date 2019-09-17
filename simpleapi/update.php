<?php
    $servername= "localhost";
    $username="root";
    $password="";
    $dbname="student";
    $conn= new mysqli($servername,$username,$password,$dbname);
    $id=$_GET['id'];
    echo "$id";
    if(isset($_POST['done'])){
            
        $name= $_POST['name'];
        $gender= $_POST['gender'];
        $q="update student_details set id='$id' , name='$name' , gender='$gender' where id='$id'";
        $result = $conn->query($q);
        if($result){
            header('location:display.php');
        }
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
                                  <h1 class="text-white text-center">Update Operation</h1>
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