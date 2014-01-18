<?php

	session_start();

	if(isset($_POST['action']) && $_POST['action'] == 'reset')
	{
		redo(); 
	}

	else if((!isset($_SESSION['gold'])) && (!isset($_SESSION['activities'])))
	{
		$_SESSION['gold'] = 0;
		$_SESSION['activities'] = "";
	}
	// var_dump($_POST);

	if($_POST['building'] == 'farm')
	{
		farm();
	}
	else if ($_POST['building'] == 'cave')
	{
		cave();
	}
	else if ($_POST['building'] == 'house')
	{
		house();
	}
	else if ($_POST['building'] == 'casino')
	{
		casino();
	}
	
?> 

<?php


	function farm()
	{
		// echo "here";
		$amount = rand(10,20);
		$date = date('m/d/Y h:i:s a', time());
		// $_SESSION['gold'] += $amount;
		$_SESSION['gold'] = $_SESSION['gold'] + $amount;
		$_SESSION['activities'] .= "<h5> You picked farm. You have {$_SESSION['gold']} at {$date}</h5>";
		header('location: index.php');
		// $_TIME['time'] = "Gold recieved at" . $_SESSION['time'];
	}

	function cave()
	{
		// echo "here";
		$amount = rand(5,10);
		$date = date('m/d/Y h:i:s a', time());
		$_SESSION['gold'] += $amount;
		$_SESSION['activities'] .= "<h5> You picked cave. You have {$_SESSION['gold']} at {$date}</h5>";
		header('location: index.php');
	}

	function house()
	{
		// echo "here";
		$amount = rand(2,5);
		$date = date('m/d/Y h:i:s a', time());
		$_SESSION['gold'] += $amount;
		$_SESSION['activities'] .= "<h5> You picked house. You have {$_SESSION['gold']} at {$date}</h5>";
		header('location: index.php');
	}

	function casino()
	{
		// echo "here";
		$amount = rand(0,50);
		$date = date('m/d/Y h:i:s a', time());
		$_SESSION['gold'] += $amount;
		$_SESSION['activities'] .= "<h5> You picked casino. You have {$_SESSION['gold']} at {$date}</h5>";
		header('location: index.php');
	}

	function redo()
	{
		session_destroy();
		header('location: index.php');

	}


?>