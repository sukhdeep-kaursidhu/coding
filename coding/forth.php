<?php 

	function findPairs($arr, $sum) {

		$numPairs = "";

		$count = count($arr);

		for($i = 0; $i < $count; $i++) {
			for($j = $i+1; $j < $count; $j++) {
				if($arr[$i] + $arr[$j] == (int)$sum) {
					$numPairs .= "Pairs for sum: ".$sum." is : ".$arr[$i].",".$arr[$j]."<br />";
				} else {
					$numPairs .= "No pair found";
				}
			}
		}
		return $numPairs;

	}

	$numArray = [1,-4,7,2,10,12];

	$sum = 3;

	echo findPairs($numArray,$sum);

 ?>