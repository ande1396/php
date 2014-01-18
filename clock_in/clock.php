<?php ob_start(); ?>
<?php session_start(); 
require("connection.php");

?>

<html>
<head>
    <meta charset="UTF-8">
	<title>Clock In</title>
	<link rel="stylesheet" type="text/css" href="css/Clock.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

	<script type="text/javascript">
	$(document).ready(function(){
			

			$('.new').submit(function(){
				$.post(
						$(this).attr('action'),
						 $(this).serialize(),

						 function(response)
						 {
						 	console.log(response);
						 	$("#id").html(response.people) // id is for select--bad name
						 		$('#first_name').val(""),
						 		$('#last_name').val("");
						 }

				          ,"json");
							return false;
			});	
});

	</script>
	
</head>

	<body>
		<div id="wrapper">
			<div id="top">
				<h1>Clock In/Out</h1>
				<a class="right" href="index.php">Summary</a> 

				<div id="new_student">
					<form class="new" action="process.php" method="post">
						<input type="hidden" name="student_action" value="new_student">
						<!-- <input type="text" name="student_name" value="full_name"> -->

						<label for="first_name">Student First Name:</label>
						<input type="text" id="first_name" name="first_name" placeholder="First Name">
						<label for="last_name">Student Last Name:</label>
						<input type="text" id="last_name" name="last_name" placeholder="Last Name">

						<input type="submit" value="Add Student!">

					</form>

				</div>

				<h2>Step 1: Choose your Name</h2>
				<h5><b>Ajax now used--reload page to see your name appear</b></h5>
				<h4>After you are clocked in, update again to bring up Clock out sheet. Thanks</h4>
				<h5>(Will appear below)</h5>
				
				<form action="process.php" method="post">
					<input type="hidden" name="update_action" value="update">
					<select name="id">			
						<?php
							$query = "SELECT id, first_name, last_name FROM students";
							$students = fetch_all($query); 
								foreach ($students as $student) 
								{ 
									$full_name = $student['first_name'] . " " . $student['last_name']; 
								
									echo "<option value = " . $student['id'] . ">" . $full_name . "</option>"; 

						 		}

							?> <!-- key="id" value="foreach" --> 
					</select>
					<input type="submit" value="Update">
				</form>


			</div><!-- end of top --> 
			<div id="bottom">

			<?php
	                        //clock in
	                        if(isset($_SESSION['clock']) && $_SESSION['clock'] == "clockin")
	                        {      ?>
	                                <div>
	                                                <h3><?= "Hello," . " " .  $_SESSION['student_info']['first_name'] . "!" ?> </h2>
	                                                
	                                                <form action='process.php' method='post'>
	                                                        <input type='hidden' name='clock_in_action' value='clock_in'>
	                                                        <input type='submit' value='Clock In!'>
	                                                </form>
	                                </div>
	                     <?php           unset($_SESSION['clock']);
	                       } 
	                        //clock out
	                        elseif(isset($_SESSION['clock']) && $_SESSION['clock'] == "clockout")
	                        { ?> 
	                                <div class>
	                                                <h3><?= $_SESSION['student_info']['first_name'] ?></h2>
	                                                <form action='process.php' method='post'>
	                                                        <p><?= "Date:" . date('M jS Y', time()) ?></p>
	                                                        <p><?= "Time:" . date('h:i:s a', time()) ?> </p>
	                                                        <p>Notes:</p><textarea name='note'></textarea>
	                                                        
	                                                        <input type='hidden' name='clock_out_action' value='clock_out'>
	                                                        <br>
	                                                        <input type='submit' value='Clock Out!'>
	                                                </form>
	                                        </div>
	                    <?php            unset($_SESSION['clock']);
	                        }
	                ?>

	            </div><!-- end of bottom -->
	    </div> <!-- end of wrapper --> 
	</body>
</html>