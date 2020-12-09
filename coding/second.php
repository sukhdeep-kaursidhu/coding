<?php 

	$numArray = [0,1,2,3,4,5,6,7,7,8,9,10];

	$dupNum = array();

	$countValue = array_count_values($numArray);

	foreach ($countValue as $key=>$value) {
		if($value>1) {
			$dupNum[] = $key;
		}
	}

	print_r($dupNum);

 ?>