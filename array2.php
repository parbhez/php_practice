<?php 
	
		$array = [1,2,3,4,5,6,7,8,9];
		$tempArray = [];
		$finalArray = [];
		for ($i=0; $i<=count($array);$i++){
			if ($i>0 && $i%3==0) {
				$tempArray = array_reverse($tempArray);
				for($j=0;$j<count($tempArray);$j++){
					array_push($finalArray,$tempArray[$j]);
				}
				$tempArray = [];
			}
			if(array_key_exists($i,$array)){
				array_push($tempArray,$array[$i]);
			}
		}

		for ($i=0; $i<count($finalArray);$i++){
			if ($i>0 && $i%3==0) {
				print "<br>";
			}
			print $finalArray[$i];
		}


		print "<pre>";
		print_r($finalArray);

			user name: shoponline24bd
			Easeen168229


 ?>