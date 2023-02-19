<?php
// 1. Write a Reusable  PHP Function that can check Even & Odd Number And Return Decision

    function checkNumber(int $num){
        return 1 == $num % 2 ? 'Odd Number' : 'Even Number';
    }

    echo checkNumber(3);

    echo "\n";
// 2. 1+2+3...…….100  Write a loop to calculate the summation of the series


    $sum = 0;
	for($i = 1; $i <= 100; $i++){
        $sum =  $sum + $i ;
    }

	echo  "The summation of the series is: {$sum}";