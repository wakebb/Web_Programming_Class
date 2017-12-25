<?php

	$link = mysqli_connect("localhost","root","","HW3");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		exit();
	}

	$year = $_POST['year'];
	$gender = $_POST['gender'];

	$result = "";

	$query = "SELECT name,ranking FROM babynames WHERE year='$year' AND gender='$gender' ORDER BY ranking";
	$results = mysqli_query($link, $query);

	$result = "<table border='1px' padding='5px'><th>Name</th><th>Ranking</th>";
	while($row = mysqli_fetch_array($results))
	{
							
		$name = $row['name'];
		$rank = $row['ranking'];
		$result .= "<tr><td><pre>".$name ."</td><td>". $rank . "</pre></td></th>";
										
	}

	$result .= "</table>";
	echo $result;						
				
?>