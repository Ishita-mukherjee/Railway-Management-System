<?php
    $db_name="employees";
    $un="root";
    $pw="";
    $host="localhost";
    mysqli_connect($host,$un,$pw) or die(mysqli_connect_error());
    echo("Connected to mySQL Database");
    mysqli_select_db($db_name) or die(mysqli_error());
    echo("Connected to employees");
    
?>