 <?php 	
// 		$array = [1,2,3,4,5,6,7,8,9,10];
// 		$array1 = array_chunk($array,3);
// 		echo '<pre>';
// 		print_r($array1);
// 		echo '</pre>';

		$array2 = [1,2,3,4,5,6,7,8,9,10];
		for ($i = 0; $i < count($array2) ; $i++) {
			if ($i > 0 && $i%3==0) {
				print "</br>";			
			}	
			echo $array2[$i];		
		}
		echo '</br>';
		echo '</br>';
		echo '</br>';
		//Reverse Array................
		$array3 = [1,2,3,4,5,6,7,8,9,10];
		$array4 = array_reverse($array3);
		for ($i = 0; $i <count($array4) ; $i++) {
			if ($i > 0 && $i%3==0) {
				print "</br>";
			}
			echo $array4[$i];
		}
		


 ?>