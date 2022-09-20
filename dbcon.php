<?php

// Create connection
    $conn = mysqli_connect('localhost', 'root','Umasri@123', 'student');

    if (!$conn){
        die('Connect Error'.mysqli_connect_error());
    }
