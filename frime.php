<?php 
	$prime = 2;
	for ($i = 1; $i <= $prime; $i++) {
		if ($prime%$i == 0) {
			$count++;
		} if ($count==2) {
			echo $count;
		}
		
	}

 ?>