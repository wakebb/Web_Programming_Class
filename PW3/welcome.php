<?php

	session_start();
	
	// checking if session is set
	if(isset($_SESSION['name']) && isset($_SESSION['username']) && !empty($_SESSION['name']) && !empty($_SESSION['username'])){
		echo "Welcome " . $_SESSION['name'] . "(" . $_SESSION['username'] . ")!";
		echo "Have fun! =)";
	}
	else{
		header("Location: login.html");
		exit();
	}
	
?>