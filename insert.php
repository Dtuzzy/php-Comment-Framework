<?php
	
	include('inc/session.php');
include_once("inc/database_connection.php"); //database connection
include_once("inc/prep_functions.php");


$name = $userDetails['user_name'];
$comments = $_REQUEST['comments'];


require("inc/database_connection.php");

mysqli_query($conn, "INSERT INTO comments(name, comments) VALUES('$name','$comments')");

mysqli_close($conn);
?>
