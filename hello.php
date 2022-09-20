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
                        <th><button type="submit" name="del" class="btn btn-danger">Delete All</button></th>
                        <th>id</th>
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
                    $sql="SELECT * from emp";
                    $res=mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_array($res) ){
                        $id = $row['id'];
                        $name = $row['name'];
                        $age = $row['name'];
                        $phonenumber = $row['phonenumber'];
                        $city = $row['city'];
                       echo '<tr>
                <td><input type="checkbox" name="chk[]" value="<?='.$id. ';?>"></td>
                <th>'. $id . '</th>
                <td>'. $name.'</td>
                <td>'. $age.'</td>
                <td>'. $phonenumber.'</td>
                <td>'. $city.'</td>
                    <td>
                        <button class="btn btn-info"><a href="view1.php?viewid='.$id.'">View</a></button>
                        <button class="btn btn-warning"><a href="edit1.php?editid='.$id.'">edit</a></button>
                        <button class="btn btn-danger"><a href="delete1.php?deleteid='.$id.'">delete </a></button>
                    </td>
                    </tr>';
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

