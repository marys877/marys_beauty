<?php
    $conn = mysqli_connect("localhost","root","","marys_beauty","3306");
    if ($conn == false){
        die("Connection Error". mysqli_connect_error());
    }
?>  