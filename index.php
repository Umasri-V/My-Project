<?php

include 'config.php';

if(isset($_GET['msg'])){
    $msg=$_GET['msg'];
    echo '<div class="alert alert-success">'.$msg.'  </div>';
}


if(isset($_POST['submit'])) {
    $regno = $_POST['regno'];
    $vehiclename = $_POST['vehiclename'];
    $color = $_POST['color'];
    $mileage = $_POST['mileage'];
    $mobilenumber = $_POST['mobilenumber'];
    $address = $_POST['address'];

    $sql="insert into vehicle(regno,vehiclename,color,mileage,mobilenumber,address) values('$regno','$vehiclename','$color','$mileage','$mobilenumber','$address')";
  //execute query
    $res=mysqli_query($conn,$sql);
    if(!$res) {
      // echo "data inserted";
        header('location:vehicle.php?msg=Inserted Successfully');
    }
    else{
        die(mysqli_error($conn));
    }
}
?>



<!doctype html>
<html lang="en">
<head>
    <title>Vehicle</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        .btn{
            margin-right: 40%;
            font-size:20px;
            background-color:grey;
            color: crimson;
        }
        fieldset {
            background-color: #eeeeee;
        }

        .index{
            padding-top: 50px;
        }

        legend {
            background-color: gray;
            color: white;
            padding: 5px 10px;
        }

        input[type=text],[type=number]{
            padding: 10px;
            width: 350px;
            border-radius: 15px;
            border: 2px solid darkseagreen;
        }
    </style>
</head>
<body class="index">
<div class="container well ">
    <div class="row">
        <div class="col-lg-12">
            <form action="vehicle.php" method="post">
                <fieldset>
                    <legend> Vehicle Page </legend>
                    <table class="table">
                        <tbody>
                        <tr>
                            <td>Reg No : </td>
                            <td> <input type="number" name="regno" placeholder="Enter Your Regno" required></td>
                        </tr>
                        <tr>
                            <td>Vehicle Name:  </td>
                            <td> <input type="text" name="vehiclename" placeholder="Enter Your VehicleName" required></td>
                        </tr>
                        <tr>
                            <td>Color: </td>
                            <td> <input type="text" name="color" placeholder="Enter Your Color" required></td>
                        </tr>
                        <tr>
                            <td>Mileage : </td>
                            <td> <input type="number" name="mileage" placeholder="Enter Your Mileage" required></td>
                        </tr>
                        <tr>
                            <td>Mobile Number : </td>
                            <td> <input type="number" name="mobilenumber" placeholder="Enter Your MobileNumber" required></td>
                        </tr>
                        <tr>
                            <td>Address: </td>
                            <td> <input type="text" name="address" placeholder="Enter Your Address"/></td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: center">
                                <button type="submit" class="btn" name="submit">Submit<a href="vehicle.php" </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </fieldset>
            </form>
        </div>
    </div>
</div>
</body>
</html>
