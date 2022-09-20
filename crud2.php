<!doctype html>
<html lang="en">
<head>
    <title>Vehicle</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        .btn1{
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
        .container{
            margin-right: 80px;
        }
    </style>
</head>
<body class="index">
<div class="container " >

<form method="post" action="crud.php">
    <h2 style="margin-bottom: 40px;margin-left: 40%"> Vehicle Page </h2>
    <table class="table table-bordered table-striped">
        <tbody>

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
            <td colspan="2" style="text-align: center">
                <button type="submit" class="btn1" name="save">Submit</button>
            </td>
        </tr>
        </tbody>
    </table>

</form>

</div>
</body>
</html>