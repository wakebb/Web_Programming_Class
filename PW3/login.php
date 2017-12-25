<?php

	// starting a session
	session_start();

	$name="";
	$userName="";
	$password="";

	// checkig if the method attribute in form is of type "post" or not
	if($_SERVER["REQUEST_METHOD"] == "POST"){

		
		// if it is post, check if all the fields have been entered
		// name field
		if(empty($_POST["nameText"])){
			header("Location: login.html");
			exit();
		}
		else{
			$name=raw_input($_POST["nameText"]);
			
			// validate name by checking it it contains only letters
			if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
     			header("Location: login.html");
				exit();
			}
			
		}

		// username field
		if(empty($_POST["usernameText"])){
			header("Location: login.html");
			exit();
		}
		else{
			$userName=raw_input($_POST["usernameText"]);
			
			// validate name by checking it it contains only letters and numbers
			if(!preg_match("/^[a-zA-z0-9]*$/", $userName)){
				header("Location: login.html");
				exit();
			}
			
		}

		// password field
		if(empty($_POST["passwordText"])){
			header("Location: login.html");
			exit();
		}
		else{
			$password=raw_input($_POST["passwordText"]);
			
			// validate name by checking it it contains st least 6 characters
			if(strlen($password) < 6){
				header("Location: login.html");
				exit();
			}
			

		}

		// if it has come till here, it means 
		// all the fields have been enetered and they hav been validated

		// now a session needs to be created
		session_regenerate_id();
		$_SESSION['name'] = $name;
		$_SESSION['username'] = $userName;
		session_write_close();

		//redirect to welcome page
		header("Location: welcome.php");
		//echo $_SESSION['name'];
		//echo $_SESSION['username'];
	}

	function raw_input($data) {
  		$data = trim($data);
 		$data = stripslashes($data);
  		$data = htmlspecialchars($data);
  		return $data;
	}
?>