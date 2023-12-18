<?php
    $conn = mysqli_connect("localhost", "root", "", "mhs1");
    if (!$conn){
        die("Connection Failed: " . mysqli_connect_error());
    }else{
        echo "Connected succesfully";
    }

?>