<?php
include 'config.php';

if(isset($_GET['msg'])){
    $msg=$_GET['msg'];
    echo '<div class="alert alert-info">'.$msg.'  </div>';
}

$id=$_GET['editid'];

$sql="select * from emp where id=$id";
$res=mysqli_query($conn,$sql);

$row=mysqli_fetch_assoc($res);
$name=$row['name'];
$age=$row['age'];
$phonenumber=$row['phonenumber'];
$city=$row['city'];



if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $phonenumber = $_POST['phonenumber'];
    $city = $_POST['city'];

    $sql="update emp set name='$name',age='$age',phonenumber=$phonenumber,city='$city' where id=$id";
    $res=mysqli_query($conn,$sql);
    if($res) {
        //echo "data updated";
        header('location:employee1.php?msg=Updated Successfully');
    }
    else{
        die(mysqli_error($conn));
    }
}
?>



<!doctype html>
<html lang="en">
<head>
    <title>Employee</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        .btn{
            margin-right: 40%;
            font-size:20px;
            background-color:grey;
            color: crimson;
        }
        input[type=text],[type=number]{
            padding: 10px;
            margin-bottom: 20px;
            width: 350px;
            border-radius: 15px;
            border: 2px solid darkseagreen;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <form method="post">
                <h2> Employee Details </h2><br>
                <input type="text" name="name" placeholder="Enter Your Name" value="<?php echo $name;?>"><br>
                <input type="number" name="age" placeholder="Enter Your Age" value=<?php echo $age;?>><br>
                <input type="number" name="phonenumber" placeholder="Enter Your PhoneNumber" value=<?php echo $phonenumber;?>><br>
                <input type="text" name="city" placeholder="Enter Your City" value=<?php echo $city;?>><br>
                <button type="submit" class="btn" name="submit">Update<a href="employee1.php" </button>
            </form>
        </div>
    </div>
</div>
</body>
</html>

