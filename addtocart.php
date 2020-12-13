<?php
// format: (host, username, password, database_name)
$link = mysqli_connect("localhost", "root", "root", "TTR");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect." . mysqli_connect_error());
}

//Attempt insert query execution
$sql = "INSERT INTO cart (product_name, product_price) VALUES ('$_POST[title]','$_POST[price]')";
if(mysqli_query($link, $sql)){
    echo "Added to cart successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
