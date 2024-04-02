<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "researcher_connect";

    $conn = mysqli_connect($server, $username, $password, $database);

    if(!$conn)
    { 
        echo "Connection error" . mysqli_connect_error();
    }

?>