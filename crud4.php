<?php
include 'crud1.php';

$obj=new database();


if (isset($_POST['update'])){
    $obj->update($_POST);
}

if(isset($_GET['viewid'])) {
    $viewid = $_GET['viewid'];
    $myrecord1 = $obj->view($viewid);
}
?>
<!doctype html>
<html lang="en">
<head>
    <title>Vehicle</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body class="index">
<div class="container " >
    <form method="post">

        <p>View Data</p>

        <p><?php echo $myrecord1['vehiclename'];?></p><br>
        <p><?php echo $myrecord1['color'];?></p><br>
        <p><?php echo $myrecord1['mileage'];?></p><br>
        <p><?php echo $myrecord1['mobilenumber'];?></p>

    </form>
</div>
</body>
</html>
