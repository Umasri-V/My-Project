<?php

include 'config.php';

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $phonenumber = $_POST['phonenumber'];
    $city = $_POST['city'];

    $sql="insert into emp (name,age,phonenumber,city) values('$name','$age','$phonenumber','$city')";
    //execute query
    $res=mysqli_query($conn,$sql);
    if($res) {
        // echo "data inserted";
        header('location:employee1.php?msg=Record Inserted Successfully');
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
        .container{
            padding-top: 50px;
            margin-right: 80px;
        }
        .btn{
            margin-right: 40%;
            font-size:20px;
            background-color:gray;
            color: orange;
        }

        input[type=text],[type=number]{
            padding: 10px;
            margin-bottom: 20px;
            width: 350px;
            border-radius: 15px;
            border: 2px solid darkseagreen;
        }

        fieldset {
            background-color: #eeeeee;
        }

        legend {
            background-color: gray;
            color: white;
            padding: 5px 10px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <form method="post">
                <fieldset>
                    <legend> Employee Page </legend>
                    <table class="table">
                        <tbody>
                        <tr>
                            <td>Name:  </td>
                            <td> <input type="text" name="name" placeholder="Enter Your Name" required></td>
                        </tr>
                        <tr>
                            <td>Age: </td>
                            <td> <input type="number" name="age" placeholder="Enter Your Age" required></td>
                        </tr>
                        <tr>
                            <td>Phone Number : </td>
                            <td> <input type="number" name="phonenumber" placeholder="Enter Your PhoneNumber" required></td>
                        </tr>
                        <tr>
                            <td>City: </td>
                            <td> <input type="text" name="city" placeholder="Enter Your City" required></td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: center">
                                <button type="submit" class="btn" name="submit">Submit<a href="employee1.php" </button>
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
