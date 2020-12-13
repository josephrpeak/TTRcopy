<?php
// format: (host, username, password, database_name)
$link = mysqli_connect("localhost", "root", "root", "TTR");
 
// Check connection
/*if($link === false){
    die("ERROR: Could not connect." . mysqli_connect_error());
}*/

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

if (isset( $_POST['submit'])) {
	$username = $_POST['username']; 
	$password = $_POST['password'];
} 

// Perform query 
$result = mysqli_query($link, "SELECT * FROM account WHERE username=$username and password=$password");

if(mysqli_num_rows($result)==1)
{
	echo "Logged in successfully.";
    header("Refresh:3; logged_in_index.html");
    mysqli_free_result($result);
}
else
{
	header("Refresh:3; login.html");
	echo "Could not find your account.";
	mysqli_free_result($result);
}

// Close connection
mysqli_close($link);
?>