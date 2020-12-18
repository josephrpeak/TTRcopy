<?php
session_start();
// format: (host, username, password, database_name)
$link = mysqli_connect("localhost", "root", "root", "TTR");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect." . mysqli_connect_error());
}

if (isset ($POST['username'])){
    $username = $_POST['username'];
    $id = $_SESSION['username'];
    $sql = "UPDATE account SET username = '$username";
    $result = mysql_query($result) or die ("Unable to update" . mysql_error());
}

if (isset ($POST['password'])){
    $username = $_POST['password'];
    $id = $_SESSION['password'];
    $sql = "UPDATE account SET password = '$password";
    $result = mysql_query($result) or die ("Unable to update" . mysql_error());
}

if (isset ($POST['email'])){
    $username = $_POST['email'];
    $id = $_SESSION['email'];
    $sql = "UPDATE account SET email = '$email";
    $result = mysql_query($result) or die ("Unable to update" . mysql_error());
}



mysqli_close($link);
?>