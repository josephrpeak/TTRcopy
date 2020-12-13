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
	$email = $_POST['email'];
} 

//Attempt insert query execution
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo("$email is not a valid email address");
    header("Refresh:3; index.html");
}

else{
	$sql = "INSERT INTO account (username, password, email) VALUES ('$_POST[username]','$_POST[password]','$_POST[email]')";
}

if(mysqli_query($link, $sql)){
    echo "Account created successfully. Redirecting to homepage...";
    $_SESSION['username'] = $username;
    header("Refresh:3; logged_in_index.html");
} 
else{
	echo "Test.";
    echo "ERROR: Not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
