<?php
  session_start();

  $link = mysqli_connect("localhost", "root", "root", "TTR");
  $username = mysqli_real_escape_string($link,$_POST['username']);
  $password = mysqli_real_escape_string($link,$_POST['password']); 

  $sql = "SELECT * FROM account WHERE username = '$username' and password = '$password'";

  $result = mysqli_query($link,$sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $active = $row['active'];
  $error = "Your Login Name or Password is invalid";
  $count = mysqli_num_rows($result);
  
  if($count > 0) {
    echo "Logged in successfully. Redirecting to homepage...";
    header("Refresh:3; logged_in_index.html");
    exit();
  }
  else {
     echo $error;
   }
?>