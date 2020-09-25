<?php

    $conn  = new mysqli("localhost", "root", "", "informdb");
    if($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    else{
        echo"connection established ";
    }









?>