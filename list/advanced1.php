<DOCTYPE HTML>
<html lang-"en-US">
<head>
	<meta charset="UTF-8">
	<title>Advanced 1</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	
	<!-- <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css"> -->
	
	
</head>
<body>


<?php

$users = array( 
   array('first_name' => 'Michael', 'last_name' => ' Choi '),
   array('first_name' => 'John', 'last_name' => 'Supsupin'),
   array('first_name' => 'Mark', 'last_name' => ' Guillen'),
   array('first_name' => 'KB', 'last_name' => 'Tonel'), 
   array('first_name' => 'Kyle', 'last_name' => 'Anderson'), 
   array('first_name' => 'Kyle', 'last_name' => 'Anderson'),
   array('first_name' => 'Kyle', 'last_name' => 'Anderson'),
   array('first_name' => 'Kyle', 'last_name' => 'Anderson'),
   array('first_name' => 'Kyle', 'last_name' => 'Anderson'),
   array('first_name' => 'Kyle', 'last_name' => 'Anderson'),
   array('first_name' => 'Kyle', 'last_name' => 'Anderson'),
   array('first_name' => 'Kyle', 'last_name' => 'Anderson'),
   array('first_name' => 'Kyle', 'last_name' => 'Anderson'),
   array('first_name' => 'Kyle', 'last_name' => 'Anderson')
);

	echo "<table class='table table-striped'>"; //start table
	echo "<thead><tr>";//table head
	echo "<th> User #</th><th>First Name</th><th>Last Name</th><th>FULL NAME</th><th>FULL NAME in UPPER</th><th>Length of Name</th>";
	echo "</tr></thead>";
	// END TAVLE HEAD
	for($i=0; $i<count($users); $i++) 
	{
		if(($i + 1) % 5 == 0)
		{
			echo "<tr style= 'background-color: yellow'>";
		}
		else 
		{
			echo "<tr>"; //start row
		}
		echo "<td>".($i + 1)."</td>"; //first column, use ($i + 1) if you want the numbers to start at 1
		foreach ($users[$i] as $user) 
		{
			echo "<td>".$user."</td>"; // second and third columns
		}
		
		$full_name = trim($users[$i]["first_name"])." ".trim($users[$i]["last_name"]);
		echo "<td>".$full_name."</td>"; // full name column
		echo "<td>".strtoupper($full_name)."</td>";//full name in uppercase
		echo "<td>".strlen($full_name)."</td>";//full name length column 
		echo "</tr>"; //end row
	}
	echo "</table>"; //end table



?> 

</body>
</html> 