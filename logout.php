 <?php
 session_start();

 if (isset($_SESSION['username'])) {
   echo "User is logged in.";
 }
 else {
 	echo "User not logged in.";
 }
 ?>