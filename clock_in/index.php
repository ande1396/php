<?php ob_start(); ?>
<?php session_start(); 
require("connection.php");


// var_dump($_SESSION['student_info']);
// die();
?>

<html>
<head>
	<meta charset="UTF-8">
	<title>Summary</title>
	<link rel="stylesheet" type="text/css" href="css/Clock.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
</head>
	<body>
		<div id="wrapper">
			<a class="right" href="clock.php">Clock In/Out</a> 
			<h1>Summary</h1>
			
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Name</th> 
						<th>Date</th>
						<th>Clock In</th>
						<th>Clock Out</th>
						<th>Total Hours</th>
						<th>Note</th> 
					</tr>

				</thead>
				<tbody>
					<?php
						$query = "SELECT students.first_name, students.last_name, clocks.clockintime, clocks.clockouttime, clocks.created_at, clocks.note FROM clocks LEFT JOIN students on students.id = clocks.student_id ORDER BY clockintime";
						// echo $query;
						//$students = fetch_all($query);
						//var_dump($students); //displays all of the students and the info 
						//die();
						$students = fetch_all($query);
	                                foreach($students as $student)
	                                {
	                                   
	                                    $date = date("m/d/Y", strtotime($student['clockintime']));
	                                    $clockintime = date('h:i:s a', strtotime($student['clockintime']));
	                                        if(isset($student['clockouttime']))
	                                        {
	                                                $clockouttime = date('h:i:s a', strtotime($student['clockouttime']));
	                                                $student_hours = round((strtotime($clockouttime) - strtotime($clockintime)) / 3600, 2) . " hrs";
	                                        //         $total_hours = round((strtotime($clockouttime) - strtotime($clockintime)) / 3600) . " hrs"; this is for a whole number
	                                        }
	                                        else
	                                        {
	                                                $clockouttime = null; // they have not clocked out yet
	                                                $total_hours = null; // Can't have any total hours because they have yet to clock out 
	                                        } ?> 

	                    	       		<tr>
	                            			<td><?= $student['first_name'] . " " . $student['last_name'] ?></td>
	                            			<td><?= $date ?></td>
	                            			<td><?= $clockintime ?></td>
	                            			<td><?= $clockouttime ?></td>
	                            			<td><?= $student_hours  ?></td>
	                            			<td><?= $student['note']  ?></td>
	                            		</tr>                              
	                            <?php  }
	                                ?>
	    		</tbody>
	        </table>
	    </div> <!-- end of wrapper --> 
	</body>
</html>