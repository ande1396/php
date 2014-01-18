<?php
	session_start();


	if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
	{
		$error_message = "The email address you entered " .  ($_POST['email']) . " is a VALID email address! Thank you!";
		
		$_SESSION['errors'] = $error_message;
		header('location: index.php');
	}
	else
	{
		$error_message = "The email address you entered " .  ($_POST['email']) . " is NOT a valid email address! Please re-enter the email address.";

		$_SESSION['errors'] = $error_message ;
		header('location: index.php');
	}

	if((!is_int($_POST['first_name'])) AND (!is_int($_POST['last_name'])))
	{
		$error_message_2 = "This is a valid name";
		$_SESSION['errors_2'] = $error_message_2;
		 header('location: index.php');

	}
	else
	{
		$error_message_3 = "NOT A VALID name!!!!!!";
		$_SESSION['errors_2'] = $error_message_3;
		header('location: index.php');
	}
	if(strlen($_POST['password']) > 6)
	{
		$error_message_3 = "Password is correct length";
		$_SESSION['errors_3'] = $error_message_3;
		header('location: index.php');
	}
	else
	{
		$error_message_3 = "Password is INVALID";
		$_SESSION['errors_3'] = $error_message_3;
		header('location: index.php');

	}
	if(checkdate($_POST['birth_date']) == TRUE)
	{
		$error_message_4 = "Thank you for submitting the correct info";
		$_SESSION['errors_4'] = $error_message_4;
		header('location: index.php');
	}
	else
	{
		$error_message_4 = "Not a valid birth date";
		$_SESSION['errors_4'] = $error_message_4;
		header('location: index.php');

	}


?>

<!-- if first and last name != int or number
	echo
	else no

	if passord length is greater than 6 char
	echo valid
	else echo not valid

	if birth_date is a valid date
	echo correct info
	else not valid


	also highlight the editted fields -->
