<?php
	$yourEmail = $conn->real_escape_string($_POST['email']);
	$sql="INSERT INTO emails (email) VALUES ('".$yourEmail."')";
	if(!$result = $conn->query($sql)){
	die('There was an error running the query [' . $conn->error . ']');
	}
	else
	{
	echo "Thank you! We will contact you soon";
	}
	}
	else
	{
	echo "Please fill Name and Email";
	}
?>