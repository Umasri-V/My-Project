<?php
include 'config.php';

$id=$_GET['viewid'];

$sql="select * from vehicle where id=$id";

$res=mysqli_query($conn,$sql);

$row=mysqli_fetch_assoc($res);
$regno=$row['regno'];
$vehiclename=$row['vehiclename'];
$color=$row['color'];
$mileage=$row['mileage'];
$mobilenumber=$row['mobilenumber'];
$address=$row['address'];

?>



<!doctype html>
<html lang="en">
<head>
    <title>Vehicle</title>
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
        <div class="col-lg-12">
            <div class="view">
                <h2 style="color: green">Vehicle Details</h2><br>
                <table class="table table-bordered">
                    <tr>
                        <th>id</th>
                        <th>regno</th>
                        <th>vehiclename</th>
                        <th>color</th>
                        <th>mobilenumber</th>
                        <th>address</th>
                    </tr>
                    <tr>
                        <td><?php echo $id;?></td>
                        <td><?php echo $regno;?></td>
                        <td><?php echo $vehiclename;?></td>
                        <td><?php echo $color;?></td>
                        <td><?php echo $mobilenumber;?></td>
                        <td><?php echo $address;?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>
