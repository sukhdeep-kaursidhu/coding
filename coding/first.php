<?php 	

	$numArray = [1,25,85,65,78,95,100,120,152];

	$countNum = count($numArray);

	$sumArray = 0;

	for($i=0;$i<$countNum;$i++) {
		$sumArray += $numArray[$i];
	}

	echo $sumArray;

 ?>