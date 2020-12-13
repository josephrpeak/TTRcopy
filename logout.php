<?php
	session_start();

	echo "Logging out...";
	session_unset();
	session_destroy();
	header("Refresh:2; index.html");
?>