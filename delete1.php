<?php

include 'config.php';
//$conn=mysqli_connect('localhost','root','Umasri@123','demo');

if(isset($_GET['msg'])){
    $msg=$_GET['msg'];
    echo '<div class="alert alert-danger">'.$msg.'  </div>';
}



if(isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "delete from emp where id=$id";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        header('location:employee1.php?msg=Deleted Successfully');
        //echo "Deleted successfully";
    } else {
        die(mysqli_error($conn));
    }
}
?>
