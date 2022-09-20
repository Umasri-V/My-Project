<!doctype html>
<html lang="en">
<head>
    <title>Employee Details</title>
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
<div class="container well">
    <div class="row">
        <div class="col-sm-12">
            <button class="btn2"><a href="employee.php"> + Add Employee list </a></button>
            <form action="deleteall.php" method="post">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th><button type="submit" name="submit" class="btn btn-danger">Delete All</button></th>
                        <!--<th>id</th>-->
                        <th>name</th>
                        <th>age</th>
                        <th>phonenumber</th>
                        <th>city</th>
                        <th>operation</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    include 'config.php';

                    if(isset($_GET['msg'])){
                        $msg=$_GET['msg'];
                        echo '<div class="alert alert-success">'.$msg.'  </div>';
                    }

                    $sql="SELECT * from emp";
                    $res=mysqli_query($conn,$sql);?>
                    <?php
                    while ($row=mysqli_fetch_array($res))
                    {
                        echo "<tr>";
                        echo "<td>
                        <input type='checkbox' name='chk[]' value='".$row['']."'
                        </td>
                       
                        <td>".$row['name']."</td>
                        <td>".$row['age']."</td>
                        <td>".$row['phonenumber']."</td>
                        <td>".$row['city']."</td>";
                        echo ' <td>  
                        <button class="btn btn-info"><a href="view1.php?viewid='.$row['id'].'">View</a></button>
                        <button class="btn btn-warning"><a href="edit1.php?editid='.$row['id'].'">edit</a></button>
                        <button class="btn btn-danger"><a href="delete1.php?deleteid='.$row['id'].'">delete </a></button>
                    </td>';
                        echo "</tr>";
                    }
                    ?>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</div>
</body>
</html>



