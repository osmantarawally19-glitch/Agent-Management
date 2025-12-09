<?php

//Creating database 
$serverName = "localhost";
$userName = "root";
$pass = "";
$conn = mysqli_connect($serverName, $userName, $pass);

if(!$conn){
    die("connection error: ".mysqli_connect());
}
// create the database
$sqlDB = "CREATE DATABASE AgentManagement";
if(mysqli_query($conn, $sqlDB)){
    echo "Database created successfully";
}
else {
    echo "Error in creating the database ".mysql_error($conn);
}

?>