<?php
include 'crud1.php';

$obj=new database();

//insert record
if (isset($_POST['save'])){
    echo $obj->insert($_POST);
}

//update record

if (isset($_POST['update'])){
    echo $obj->update($_POST);
}

//delete record

if(isset($_GET['deleteid'])){
    $delid=$_GET['deleteid'];
   echo $mydel=$obj->deleterecord($delid);
}


if (isset($_POST['delete'])){
    echo $obj->deleterecord($_POST);
}

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
    <!-- success msg -->
    <?php
    //insert
    if(isset($_GET['msg'])) {
        $msg = $_GET['msg'];
        echo '<div class="alert alert-danger">' . $msg . '  </div>';
    }
    ?>
            <h2 style="text-align: center">Display Records</h2>
    <table class="table table-bordered">
        <a href="crud2.php" class="btn btn-primary"> add</a>
        <thead>
        <tr class="bg-info">
            <th>action</th>
            <th>vehiclename</th>
            <th>color</th>
            <th>mileage</th>
            <th>mobilenumber</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $data=$obj->display();
        foreach ($data as $value){
            ?>

            <tr>
                <td>
                    <a href="crud3.php?editid=<?php echo $value['id'];?>" class="btn btn-info"> edit</a>
                    <a href="crud.php?deleteid=<?php echo $value['id'];?>" class="btn btn-danger" onclick=" return checker()" > del</a>
                </td>
                <td><?php  echo $value['vehiclename']; ?></td>
                <td><?php  echo $value['color']; ?></td>
                <td><?php  echo $value['mileage']; ?></td>
                <td><?php  echo $value['mobilenumber']; ?></td>

            </tr>
            <?php
        }
        ?>
    </table>
    <script type="text/javascript">
        function checker(){
            var result=confirm('Are you Sure?');
            if('$delid'){
                alert("you pressed ok");
            }
            else{
                alert("you pressed cancel")
            }
        }
    </script>
</div>
</body>
</html>
