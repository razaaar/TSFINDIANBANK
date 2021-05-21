<?php 
    $servername ="localhost";
    $username="root";
    $password="";
    $dbname="indian_bank";

    $conn =mysqli_connect($servername,$username ,$password ,$dbname);

    if(!$conn)
    {
        die("Could not connect to the databases due to the following error -->".mysqli_connect_error());
    }

?>