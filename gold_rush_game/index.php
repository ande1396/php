<?php

	session_start();


?> 

<!DOCTYPE HTML> 
<html lang="en-US">
<head>
	<title>basic IIII</title>
	<link rel="stylesheet" type="text/css" href="basic_4.css">
</head>
	<body>

		<p>Your Gold:<?php if(isset($_SESSION['gold']) and !empty($_SESSION['gold']))   //if gold is set in the session and not empty
						{
							echo $_SESSION['gold'];
							 
						}
						else
						{
							echo " Empty"; 
						}

					
			        ?> 
		</p>
		<div id= "main">
			<form id="logout" action="process.php" method="post">
				<input type="hidden" name="action" value="reset">
				<input type="submit" value="reset">
			</form> 

			<div id="one">
				<h2>Farm</h2>
				<p>Earn 10-20 golds</p>
				<form id="user_login" action="process.php" method="post">
						<input type="hidden" name="building" value="farm"> <!-- building ismname ofmtem input-->
							
						<input type="submit" value="Fine Gold">
				</form>

			</div>

			<div id="two">
				<h2>Cave</h2>
				<p>Earn 5-10 golds</p>
				<form id="user_login" action="process.php" method="post">
						<input type="hidden" name="building" value="cave">
							
						<input type="submit" value="Fine Gold">
				</form>
			</div>


			<div id ="three">
				<h2>House</h2>
				<p>Earn 2-5 golds</p>
				<form id="user_login" action="process.php" method="post">
						<input type="hidden" name="building" value="house">
						
						<input type="submit" value="Fine Gold">
				</form>		
			</div>

			<div id="four">
				<h2>Casino!</h2>
				<p>Earn 0-50 golds</p>
				<form id="user_login" action="process.php" method="post">
						<input type="hidden" name="building" value="casino">
							
						<input type="submit" value="Fine Gold">
				</form>
			</div> 

		</div> 
		<div class="bottom">
			<p class="activities">Activities:</p>

			<?php
				if(isset($_SESSION['activities']))
				{
					echo $_SESSION['activities'];
				}

				// session_destroy();
			?>
		</div> 
	</body>
</html>