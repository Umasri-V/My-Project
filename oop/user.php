<?php
include 'con.php';

$obj=new database();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2 style="color: red">Display Records</h2><br>
    <table class="table">
        <thead>
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Confirm password</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $data=$obj->display();
        foreach ($data as $value){
            ?>

            <tr>
                <td><?php  echo $value['username']; ?></td>
                <td><?php  echo $value['email']; ?></td>
                <td><?php  echo $value['password']; ?></td>
                <td><?php  echo $value['confirmpassword']; ?></td>
            </tr>
            <?php
        }
        ?>
    </table>

</div>
</body>
</html>
