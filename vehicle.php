<!doctype html>
<html lang="en">
<head>
    <title>Vehicle Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
    <style>
        .btn2{
            background-color:gold;
            font-size: 15px;
            margin-bottom: 40px;
            padding: 10px;
        }
        .container{
            margin-top: 30px;
        }
    </style>
</head>
<body>
<form action="deleteallve.php" method="post">
<div class="container well">
    <div class="row">
        <div class="col-sm-12">
            <button class="btn2"><a href="index.php"> + Add Vehicle list </a></button>
            <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th><button type="submit" name="submit" class="btn btn-danger">Delete All</button> </th>
                        <th>id</th>
                        <th>regno</th>
                        <th>vehiclename</th>
                        <th>color</th>
                        <th>mobilenumber</th>
                        <th>address</th>
                        <th>action</th>
                    </tr>
                    </thead>
                <tbody>
                <?php
                    include 'config.php';

                if(isset($_GET['msg'])){
                    $msg=$_GET['msg'];
                    echo '<div class="alert alert-success">'.$msg.'  </div>';
                }

                $sql="SELECT * from vehicle";
                    $res=mysqli_query($conn,$sql);
                while ($row=mysqli_fetch_array($res))
                {
                    echo "<tr>";
                    echo "<td><input type='checkbox' name='chk[]' value='".$row['id']."'</td><td>".$row['id']."</td><td>".$row['regno']."</td><td>".$row['vehiclename']."</td><td>".$row['color']."</td><td>".$row['mobilenumber']."</td><td>".$row['address']."</td>";
                    echo ' <td>  
                        <button class="btn btn-info"><a href="view.php?viewid='.$row['id'].'">View</a></button>
                        <button class="btn btn-warning"><a href="edit.php?editid='.$row['id'].'">edit</a></button>
                        <button class="btn btn-danger"><a href="delete.php?deleteid='.$row['id'].'">delete </a></button>
                    </td>';
                    echo "</tr>";
                }
                ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
</form>
</body>
</html>
