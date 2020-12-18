<?php
	session_start();

	// format: (host, username, password, database_name)
	$link = mysqli_connect("localhost", "root", "root", "TTR");
	 
	// Check connection
	if($link === false){
	    die("ERROR: Could not connect." . mysqli_connect_error());
	}
	$sql = "SELECT username, password, email FROM account WHERE username = '".$_SESSION['username']."'";

	$result = mysqli_query($link, $sql);
	if (mysqli_num_rows($result) > 0) {
	  // output data of each row
	  while($row = mysqli_fetch_assoc($result)) {
	    echo '<h1>Your username: '. $row['username'] . "<br /></h1>";
	    echo '<h1>Your email: '. $row['email'] . "<br /></h1>";
	  }
	} 
	else {
	  //echo ".$_SESSION['username']."
	  echo "0 results";
	}
	
?>
