<?php
// format: (host, username, password, database_name)
$link = mysqli_connect("localhost", "root", "root", "TTR");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect." . mysqli_connect_error());
}

if (isset( $_POST['submit'])) {
	$username = $_POST['username']; 
	$password = $_POST['password'];
} 

echo "$username";
echo "$password";

$sql = ("SELECT * FROM account WHERE username='$username' AND password='$password'";);

if(mysqli_query($link, $sql)){
    echo "Logged in successfully.";
    header("Refresh:3; logged_in_index.html");
} 
else{
	echo "Test.";
    echo "ERROR: Not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>