<?php ob_start(); ?>
<?php session_start(); 
require("connection.php");
        
        // var_dump($_POST);

        //UPDATE
        //figure out which student it is and if they have a latest clock
        if (isset($_POST['update_action']) && $_POST['update_action'] == "update" ) 
        {
                update();//fixed from prior version to match based on id (getting id from select value while still showing name)
        }

        if (isset($_POST['clock_in_action']) && $_POST['clock_in_action'] == 'clock_in') 
        {
                clock_in();
        }

        if (isset($_POST['clock_out_action']) && $_POST['clock_out_action'] == 'clock_out') 
        {
                clock_out();
        }

        if (isset($_POST['student_action']) && $_POST['student_action'] == 'new_student') 
        {
                new_student();
        }



        function update()
        {
              $query = "SELECT * FROM students WHERE id = '" . $_POST['id'] . "'";
                $student = fetch_record($query);
                $student_id = $student['id'];
                $query = "SELECT * FROM clocks WHERE student_id ='" . $student_id . "' ORDER BY clockintime DESC LIMIT 1";
                $latest_clock = fetch_record($query);
                // var_dump($latest_clock);
                // die();

                //have they ever done a clock before?
                if($latest_clock)
                {
                        if(!empty($latest_clock['clockouttime'])) //clockout time is set, //clockouttime is part of the array(var_dump) NULL
                        {
                                // var_dump($latest_clock['clockouttime']);
                                //         die();
                                //time for a new clock in
                                $_SESSION['clock'] = "clockin";
                                $_SESSION['student_info'] = $student;
                                header('Location: clock.php');
                        }
                        else //clockout time not yet set, //clockin time is a value like '2013-11-02'
                        {  //option to clock out of this one
                                $_SESSION['clock'] = "clockout";
                                $_SESSION['student_info'] = $student;
                                header('Location: clock.php');
                        }
                }
                else //no clock yet
                {
                        //set clock in form
                        $_SESSION['clock'] = "clockin";
                        $_SESSION['student_info'] = $student;
                        header('Location: clock.php');
                }  
        }
        

        function clock_in()
        {
                //we need to clock in 
                // var_dump($_POST);
                // die();
                $query = "INSERT INTO clocks (student_id, clockintime, created_at, updated_at) VALUES ('{$_SESSION['student_info']['id']}', now(), now(), now())"; 
                // echo $query;
                // die();
                mysql_query($query);
                header('Location: index.php');
        }
        
        function clock_out()
        {
                
                // here we need to lock out
                 $query = "SELECT * FROM clocks WHERE student_id ='" . $_SESSION['student_info']['id'] . "' ORDER BY clockintime DESC LIMIT 1";
                 // echo $query;
                 $updated_clock = fetch_record($query);
                 $query = "UPDATE clocks SET clockouttime=NOW(), note = '" . $_POST['note'] .
                                        "' WHERE id = " . $updated_clock['id'];['id'];
                 // echo $query;
                 // die();
                mysql_query($query);
                header('Location: index.php');
        }

        function new_student()
        {
                $query = "INSERT INTO students (first_name, last_name, created_at, updated_at) VALUES ('{$_POST['first_name']}', '{$_POST['last_name']}', NOW(), NOW())";
                // echo $query;
                // die();
                // mysql_query($query);
                // header('Location: clock.php');
                $db_students = mysql_query($query);
                $student['people'] = $db_students;
                // header('Location: clock.php');
                echo json_encode($student);
        }
?>