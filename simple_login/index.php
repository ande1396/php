<?php 
	session_start();
?>

<!DOCTYPE>
<html lang="en-Us">
<head>
	<meta charset="UTF-8">
	<title>Basic Login 5</title>   
</head>
<body>


	<div ="wrapper">
		<form id="Email Address" action="process.php" method="post">
			<h3 id="validation"> <?php 
			if(isset($_SESSION['errors']))
			{
				echo $_SESSION['errors'];	
			}
			?></h3> 
			<label> Email </label>
			<input type="text" name="email"> <br /> <!--name email is what you put in post--> 
			
			<h3><?php 
			if(isset($_SESSION['errors_2']))
			{
				echo $_SESSION['errors_2'];	
			}
			?></h3> 
			<label> first_name </label>
			<input type="text" name="first_name"><br />
		
			<h3><?php 
			if(isset($_SESSION['errors_2']))
			{
				echo $_SESSION['errors_2'];	
			}
			?></h3>  
			<label> last_name </label>
			<input type="text" name="last_name"><br />
			
			<h3><?php 
			if(isset($_SESSION['errors_3']))
			{
				echo $_SESSION['errors_3'];	
			}
			?></h3>
			<label> password </label>
			<input type="text" name="password"><br />
			
			<h3><?php 
			if(isset($_SESSION['errors_3']))
			{
				echo $_SESSION['errors_3'];	
			}
			?></h3> 
			<label> confirm_password </label>
			<input type="text" name="confirm"><br />
			
			<h3><?php 
			if(isset($_SESSION['errors_4']))
			{
				echo $_SESSION['errors_4'];	
			}
			?></h3>
			<label> birth_date </label>
			<input type="text" name="birth_date" placeholder="mm/dd/yyyy"><br />
			
			<input type="submit" value="Submit">
		</form>






	</div> 





	





</body>
</html>
<?php
session_destroy();

