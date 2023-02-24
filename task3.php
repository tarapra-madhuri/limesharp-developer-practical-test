<?php
/*without using any built in functions, only a for loop, return the next binary number in a string or as an array*/

/*
	To execute this code write below line to xampp console
	php -r "require 'task3.php'; next_binary_number([1,0,0,0,0,0,0,0,0,1]);"
*/
function next_binary_number($number) {
	//Start finding next binalry number logic

	//count array length
	$l = count($number);	

	// start bits examination from rear
	for ($i = $l - 1; $i >= 0; $i--)
	{
		// if '0', then convert it to '1'
		if ($number[$i] == '0'){
			$number[$i] = 1;
			break;
		}
		// else convert '1' to '0'
		else{
			$number[$i] = 0;
		}			
	} //end of for loop
	
	if ($i < 0){
		array_unshift($number, 1);
	}
	//End of finding next binalry number logic
	
	//Next binary number representation code
	$finalNextBinaryNumber = '';

	foreach($number as $n){

		if($finalNextBinaryNumber != '')
			$finalNextBinaryNumber .= ', '.$n;

		else
			$finalNextBinaryNumber .= $n;
	}
		echo 'The next binary number is: ' . $finalNextBinaryNumber;
}
?>
