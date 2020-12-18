<?php
session_start();
// format: (host, username, password, database_name)
$link = mysqli_connect("localhost", "root", "root", "TTR");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect." . mysqli_connect_error());
}

if($_SESSION['username'] = $username){
    
}



mysqli_close($link);
?>