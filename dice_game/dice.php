<?php

	$count = 1;
	$prev_dice = 0;

	$result_summary = array(0, 0, 0, 0, 0, 0, 0);

	for($i=0; $i<50; $i++)
	{
		$dice = rand(1,6);
		echo "Attempt # ". $count . ", Rolled the dice and got: ", $dice . "<br />";
		
		if($dice == $prev_dice)
		{
			echo "<b>Wow you rolled the same num twice </b>";
		}


		$prev_dice = $dice;
		$count = $count + 1;

		$result_summary[$dice] = $result_summary[$dice] + 1;
	}


	var_dump($result_summary);
	$posts = array();
?> 

	<h2>Summary Table</h2>

	<ul>
		<li>Number 1: <?php echo $result_summary[1]; ?> times</li>
		<li>Number 2: <?php echo $result_summary[2]; ?> times</li>
		<li>Number 3: <?php echo $result_summary[3]; ?> times</li>
		<li>Number 4: <?php echo $result_summary[4]; ?> times</li>
		<li>Number 5: <?php echo $result_summary[5]; ?> times</li>
		<li>Number 6: <?php echo $result_summary[6]; ?> times</li>
	</ul>