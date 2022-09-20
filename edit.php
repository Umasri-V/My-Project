<?php
include 'config.php';

if(isset($_GET['msg'])){
    $msg=$_GET['msg'];
    echo '<div class="alert alert-info">'.$msg.'  </div>';
}


$id=$_GET['editid'];

$sql="select * from vehicle where id=$id";
$res=mysqli_query($conn,$sql);

$row=mysqli_fetch_assoc($res);
$regno=$row['regno'];
$vehiclename=$row['vehiclename'];
$color=$row['color'];
$mileage=$row['mileage'];
$mobilenumber=$row['mobilenumber'];
$address=$row['address'];



if(isset($_POST['submit'])) {
    $regno = $_POST['regno'];
    $vehiclename = $_POST['vehiclename'];
    $color = $_POST['color'];
    $mileage = $_POST['mileage'];
    $mobilenumber = $_POST['mobilenumber'];
    $address = $_POST['address'];

    $sql="update vehicle set id=$id,vehiclename='$vehiclename',color='$color',mileage=$mileage,mobilenumber=$mobilenumber,address='$address' where id=$id";
    $res=mysqli_query($conn,$sql);
    if($res) {
        //echo "data updated";
        header('location:vehicle.php?msg=Updated Successfully');
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
<body>
<div class="container-fluid well ">
    <div class="row">
        <div class="col-lg-12">
            <form method="post">
                <fieldset>
                    <legend> Vehicle Page </legend>
                    <table class="table">
                        <tbody>
                        <tr>
                            <td>Reg No : </td>
                            <td> <input type="number" name="regno" placeholder="Enter Your regno" value=<?php echo $regno;?>>
                                </td>
                        </tr>
                        <tr>
                            <td>Vehicle Name:  </td>
                            <td> <input type="text" name="vehiclename" placeholder="Enter Your vehiclename" value=<?php echo $vehiclename;?>>
                            </td>
                        </tr>
                        <tr>
                            <td>Color: </td>
                            <td> <input type="text" name="color" placeholder="Enter Your color" value=<?php echo $color;?>></td>
                        </tr>
                        <tr>
                            <td>Mileage : </td>
                            <td> <input type="number" name="mileage" placeholder="Enter Your mileage" value=<?php echo $mileage;?>></td>
                        </tr>
                        <tr>
                            <td>Mobile Number : </td>
                            <td> <input type="number" name="mobilenumber" placeholder="Enter Your mobilenumber" value=<?php echo $mobilenumber;?>></td>
                        </tr>
                        <tr>
                            <td>Address: </td>
                            <td> <input type="text" name="address" placeholder="Enter Your address" value=<?php echo $address;?>></td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: center">
                                <button type="submit" class="btn" name="submit">Update </button>
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
