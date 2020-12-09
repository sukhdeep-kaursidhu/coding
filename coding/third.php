<?php 

	function getConsecutive($numArray) {

		$count = 0;
		$consec = 0;
		for($i = 0; $i < count($numArray); $i++) {
			if($numArray[$i] == 1) {
				$count += 1;
			}
			if($numArray[$i] == 0 && $consec < $count){
				$consec = $count;
				$count = 0;
			} 
		}
		return $consec;
	}

	$numArray = [1,0,1,1,0,0,1,1,1,1,0];
	echo getConsecutive($numArray);
 ?>