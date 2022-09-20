<?php
include 'crud1.php';

$obj=new database();

if (isset($_POST['update'])){
    $obj->update($_POST);
}
//edit
if(isset($_GET['editid'])){
    $editid=$_GET['editid'];
    $myrecord=$obj->displayid($editid);
    ?>

<!doctype html>
<html lang="en">
<head>
    <title>Vehicle</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
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
        .btn{
            margin-bottom: 20px;
        }
    </style>
</head>
<body class="index">
<div class="container " >
<form method="post" action="crud.php">
        <fieldset>
            <legend> Vehicle Page </legend>
            <table class="table">
                <tbody>
                <tr>

                    <td> <input type="hidden" name="id" value=<?php echo $myrecord['id'];?>>
                    </td>
                </tr>
                <tr>
                    <td>Vehicle Name:  </td>
                    <td> <input type="text" name="vehiclename" placeholder="Enter Your vehiclename" value=<?php echo $myrecord['vehiclename'];?>>
                    </td>
                </tr>
                <tr>
                    <td>Color: </td>
                    <td> <input type="text" name="color" placeholder="Enter Your color" value=<?php echo $myrecord['color'] ;?>></td>
                </tr>
                <tr>
                    <td>Mileage : </td>
                    <td> <input type="number" name="mileage" placeholder="Enter Your mileage" value=<?php echo $myrecord['mileage'];?>></td>
                </tr>
                <tr>
                    <td>Mobile Number : </td>
                    <td> <input type="number" name="mobilenumber" placeholder="Enter Your mobilenumber" value=<?php echo $myrecord['mobilenumber'];?>></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center">
                        <input type="hidden" name="hid" value="<?php echo$myrecord['id'];?> ">
                        <button type="submit" class="btn btn-warning" name="update" value="update">Update </button>
                    </td>
                </tr>
                </tbody>
            </table>
        </fieldset>
    </form>
    <?php
}
?>
</div>
</body>
</html>
