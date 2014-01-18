<?php

session_start();

require("connection.php");


// var_dump($_POST);
// die();

if (isset($_POST['update_action']) && $_POST['update_action'] == "update" ) 
	{
		
		update();
	}


function update()
	{
		$query = "SELECT * FROM students WHERE id = '" . $_POST['id'] . "'";
		// echo $query;
		// die();
		$student = fetch_record($query);
		// var_dump($student);
		// die();
		$student_id = $student['id'];
		// var_dump($student_id);
		// die();
		$query = "SELECT * from clocks WHERE student_id = '" . $student_id . "' ORDER BY clockintime DESC LIMIT 1";
		// echo $query;
		// die();
		$updated_clock = fetch_record($query);
		// var_dump($updated_clock);
		// die();
		if($updated_clock)
		{
		
                if(!isset($updated_clock['clockouttime'])) //clockouttime is part of the array(var_dump) NULL
                {
						//option to clock out of this one
                        $_SESSION['step2'] = "clockout";
                        $_SESSION['student_info'] = $student;
                        header("location: clock_in.php");
                        
                }
                else //clockin time is a value like '2013-11-02'
                {
                        //time for a new clock in
                        $_SESSION['step2'] = "clockin";
                        $_SESSION['student_info'] = $student;
                        header("location: clock_in.php");
                }
        }
        else //if they've never done a clock before
        {
                //set clock in form
                $_SESSION['step2'] = "clockin";
                $_SESSION['student_info'] = $student;
                header("location: clock_in.php");
        }



	}





?>