<?php
include 'config.php';

if(isset($_GET['msg'])){
    $msg=$_GET['msg'];
    echo '<div class="alert alert-warning">'.$msg.'  </div>';
}

$conn = mysqli_connect("localhost", "root","Umasri@123",'demo');

if(isset($_POST['submit'])) {
    $check=$_POST['chk'];
    // print_r($check);
    $chkarr=implode(",",$check);
    // echo $chkarr;
    $sql="DELETE FROM vehicle WHERE id IN ($chkarr)";
    $res=mysqli_query($conn,$sql);
    if($res){
        //echo "$chkarr";
        header('location:vehicle.php?msg=Rows are Deleted');
    }
    else{
        echo "something went wrong";
    }
}
?>

