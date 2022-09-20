<?php

include 'config.php';

if(isset($_GET['msg'])){
    $msg=$_GET['msg'];
    echo '<div class="alert alert-danger">'.$msg.'  </div>';
}

if(isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "delete from vehicle where id=$id";
    $res = mysqli_query($conn, $sql);
    if ($res) {
      header('location:vehicle.php?msg=Deleted Successfully');
          //echo "Deleted successfully";
    } else {
        die(mysqli_error($conn));
    }
}
?>