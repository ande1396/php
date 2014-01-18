<DOCTYPE HTML>
<html lang-"en-US">
<head>
	<meta charset="UTF-8">
	<title>Advanced 1</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
	<style type="text/css">
	
/*	table {
		background-color: black;
	}*/
	/*tr td {
		background-color: red;

	}

	tr:nth-child(even){
		background-color: green;
	}
	tr:nth-child(odd){
		background-color: green;
	}*/
	</style>
	
</head>
<body>


<?php

echo "<table>";

	for($x=1; $x<9; $x++)
	{
		echo "<tr>";

		for($y=1; $y < 9; $y++)
		{
			if($x % 2==0 && $y % 2==0)
			{
				echo "<td style='background-color:black; color: black'>" . $x . "</td>"; //concatinate with a dot or take out the qoutes 
			}
			else if($x % 2== 0 && $y % 2 != 0)
			{
				echo "<td style='background-color:red; color: red'>" . $y . "</td>";
			}
			else if($x %2 != 0 && $y%2 == 0)
			{
				echo "<td style='background-color:red; color: red'>" . $x * $y . "</td>";
			}
			else
			{
				echo "<td style='background-color:black; color: black'>" . $y . "s</td>";
			}

		}

		echo "</tr>";
	}
echo "</table>";



?>




<?php

// echo "<table>";

// 	for($x=1; $x<9; $x++)
// 	{
// 		echo "<tr>";

// 		for($y=1; $y < 9; $y++)
// 		{
			
// 			if ($x % 2== 0)
// 			{
// 				echo "<td ='background-color:yellow'>";
		
// 			}
// 			else if ($x % 2 != 0)
// 			{
// 				echo "<td ='background-color:red'>";
		
// 			}

// 			else 
// 			{
// 				echo "";
// 			}
			
// 			echo "</td>";
// 		}


		

// 		echo "</tr>";
// 	}



// echo "</table>";


?>








</body>
</html> 