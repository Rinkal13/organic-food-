<?php

	$id = $_GET['id'];

	include("connect.php");	

	$q = mysqli_query($cn,"DELETE FROM `response` WHERE id = '$id' ");

	echo "<script>window.location='response.php'</script>";	
	
?>
