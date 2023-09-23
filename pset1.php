<?php

$string = "This is a poorly written program with little structure and readability.";
$number = 42;


/**
 * Modify the string var to zero spaces.
 *
 * @param string $strInput The string holder.
 * @return string Result of the no space string.
*/
function strRmSpaces (string $strInput): string{
    $string = $strInput;

    $string = str_replace(' ', '', $string);
    $string = strtolower($string);

    echo "\nNo space string: ". $string . "<br>";
    return $string;
}


/**
 * Modify the string var to lowercase.
 *
 * @param string $strInput The string holder.
 * @return string Result of the lowercase string.
*/
function strLcase (string $strInput): string{
    $string = $strInput;

    $string = strtolower($string);

    echo "\nLowercase string: ". $string . "<br>";
    return $string;
}


/**
 * Identify if the number is even or odd.
 *
 * @param int $num1 Parameter that takes the input number.
 * @return int Return the number and if it is odd or even.
*/
function oddOrEven (int $num1): int{
    $number = $num1;
    
    if ($number % 2 == 0) {
        echo "\nThe number " . $number . " is even.";
       } else {
        echo "\nThe number " . $number . " is odd.";
       };

    return $number;
}


strRmSpaces($string);
strLcase($string);
oddOrEven($number);

?>