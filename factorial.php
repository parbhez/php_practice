<?php 
	//factorial..........
	// $n= 6;
	// $fact = 1;
	// for ($i = 1; $i <=$n ; $i++) {
	// 	$fact = $fact*$i;
	// }
	// 	print $fact;

	// Recursive.......
	// function fact($number) {
	// 	if ($number == 1) {
	// 		return 1;
	// 	}
	// 	return $number*fact($number-1);
	// }

	// print fact(10);




$num =23;

for( $j = 2; $j <= $num; $j++ )
{
for( $k = 2; $k < $j; $k++ )
{
if( $j % $k == 0 )
{
break;
}

}
if( $k == $j )
	echo $j."</br>";
}
 
	
		