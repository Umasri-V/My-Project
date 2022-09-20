<?php
include 'config.php';

$id=$_GET['viewid'];

$sql="select * from emp where id=$id";

$res=mysqli_query($conn,$sql);

$row=mysqli_fetch_assoc($res);
$name=$row['name'];
$age=$row['age'];
$phonenumber=$row['phonenumber'];
$city=$row['city'];

?>



<!doctype html>
<html lang="en">
<head>
    <title>Employee</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        .view{
            font-size: xx-large;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <form method="post" class="view">
                <h2 style="color: crimson"> Employee Details </h2><br>
                <table class="table table-bordered">
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>age</th>
                    <th>phonenumber</th>
                    <th>city</th>
                </tr>
                    <tr>
                        <td><?php echo $id;?></td>
                        <td><?php echo $name;?></td>
                        <td><?php echo $age;?></td>
                        <td><?php echo $phonenumber;?></td>
                        <td><?php echo $city;?></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
</body>
</html>

