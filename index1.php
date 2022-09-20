<?php

if(isset($_POST['submit'])) {
    $regno = $_POST['regno'];
    $vehiclename = $_POST['vehiclename'];
    $color = $_POST['color'];
    $mileage = $_POST['mileage'];
    $mobilenumber = $_POST['mobilenumber'];
    $address = $_POST['address'];

    $conn = mysqli_connect("localhost", "root", "Umasri@123", "demo");
    if ($conn->connect_error) {
        die(" DataBase Connection failed: " . $conn->connect_error);
    }
    else {
        $SELECT = "SELECT * FROM vehicle";

      //  $stmt = $conn->prepare($SELECT);
        $stmt = $conn->prepare($INSERT);
        $stmt->bild_param("isssiis", $regno, $vehiclename, $color, $mileage, $mobilenumber, $address);
        $stmt->execute();
        echo "inserted";
    }
}

/*    $sql="INSERT INTO vehicle(regno,vehiclename,color,mileage,mobilenumber,address) VALUES (?,?,?,?,?,?,?)";
    $res=mysqli_query($conn,$sql);
    if($res) {
        echo "data inserted";
    }         }
*/
else{
    echo "please enter all the details";
}
?>