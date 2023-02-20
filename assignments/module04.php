<?php
/**
 *  1.Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.) */

    function shortArrayOfStringsByLength($arrayOfStrings){
        function cmp($a, $b) { 
            $a = strlen($a);
            $b = strlen($b);
        
            if ( $a == $b) {
                return 0;
            }
            return ($a > $b) ? -1 : 1;
        }
                
        usort($arrayOfStrings, "cmp");

        return $arrayOfStrings[0];
    }

    $text = "I love Bangladesh very much";
    $strArray = explode(' ', $text);

    echo shortArrayOfStringsByLength($strArray) . "\n";

    echo PHP_EOL;


/**
* 2.Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.*/ 

    function concatinateTwoStrings($str1, $str2){
        return $str1 . $str2;
    }

    // Output : Hello-World!
    echo concatinateTwoStrings('Hello', '-World!'); 

    echo PHP_EOL;


/**
 * 3.Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.*/ 

    function removeFirstAndLastElements($array){
        // Remove last and first element
        // Make a new array with slice
        $slicedArray = array_slice($array, 1, -1);

       return $slicedArray;
    }

    $inputArray = ['Frist', 1, 2, 3,4,5 , "Last"];

    // Removes Last & First elements from the array and Prints
    print_r(removeFirstAndLastElements($inputArray));

    echo PHP_EOL;


/** 4.Write a PHP function to check if a string contains only letters and whitespace.*/

   function strValidity($stringInput){

        // valid characters as $validatedStrings
        $validatedStrings = "abcdefghijklmnopurstuvwxyz ";
        $length = strlen($stringInput);

        $toLower = strtolower($stringInput);

        for($i = 0; $i<$length; $i++){
            // Check the 
            if(strstr($validatedStrings, $toLower[$i] ) == 0 ){
                return "Srting Validation Failed! \n";
            } 
         
        }

        return "The supplied strign has passed the validation test. \n";
   }

   // Test the streig validatin Funcion
  echo  strValidity('I love Bangladesh'); // will pass the validation
  echo  strValidity('I love Bangladesh!'); // Failed as  containg non valid '!' character

  echo PHP_EOL;


/** 
 * 5.Write a PHP function to find the second largest number in an array of numbers.*/ 

    function secondLargestNumber($numbers){
        function comp($a, $b) { 
        
            if ( $a == $b) {
                return 0;
            }
            return ($a > $b) ? -1 : 1;
        }
                
        usort($numbers, "comp");

        return $numbers[1];
    }

    $nums = [3, 4, 5 , 6, 2, 1, 0]; // here second largest == 5 

    echo "The Second Largest Number is: " . secondLargestNumber($nums);



/** To complete the assignment, create a PHP file and write the code for each of the above functions. You should also include example usage for each function, to show that it is working correctly.*/
?>