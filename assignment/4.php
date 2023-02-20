<?php
// 1.Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.)
function sortByArray( $strings ) {
    usort( $strings, function ( $a, $b ) {
        return strlen( $a ) - strlen( $b );
    } );
    return $strings;
}
$strings = array( 'apple', 'banana', 'orange', 'plum', 'dates', 'mango' );
$sorted_strings = sortByArray( $strings );
print_r( $sorted_strings );

// 2.Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.
function concatenate_strings( $string1, $string2 ) {
    $len1 = strlen( $string1 );
    $len2 = strlen( $string2 );
    $result = '';
    $i = $len1 - 1;
    $j = $len2 - 1;
    while ( $i >= 0 && $j >= 0 ) {
        $result = $string1[$i] . $string2[$j] . $result;
        $i--;
        $j--;
    }
    while ( $i >= 0 ) {
        $result = $string1[$i] . $result;
        $i--;
    }
    while ( $j >= 0 ) {
        $result = $string2[$j] . $result;
        $j--;
    }
    return $result;
}
$string1 = "hello";
$string2 = "world";
$result = concatenate_strings( $string1, $string2 );
echo $result; // Output: "oWrldeHllo"

// 3.Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.
function shift_pop( $arr ) {
    array_shift( $arr ); // remove the first element
    array_pop( $arr ); // remove the last element
    return $arr;
}
$my_array = array( "apple", "banana", "orange", "kiwi", "grape" );
$modified_array = shift_pop( $my_array );
print_r( $modified_array );

// 4.Write a PHP function to check if a string contains only letters and whitespace.
function regularExpression( $str ) {
    return preg_match( '/^[a-zA-Z\s]+$/', $str );
}
$string1 = "This is a string with only letters and whitespace";
$string2 = "This is a string with 123 and some special characters !@#$%^&*";
if ( regularExpression( $string1 ) ) {
    echo "String 1 contains only letters and whitespace";
} else {
    echo "String 1 contains other characters besides letters and whitespace";
}
echo "<br>";
if ( regularExpression( $string2 ) ) {
    echo "String 2 contains only letters and whitespace";
} else {
    echo "String 2 contains other characters besides letters and whitespace";
}

// 5.Write a PHP function to find the second largest number in an array of numbers.
function find_second_largest( $arr ) {
    $largest = $arr[0];
    $second_largest = $arr[0];
    foreach ( $arr as $num ) {
        if ( $num > $largest ) {
            $second_largest = $largest;
            $largest = $num;
        } elseif ( $num > $second_largest && $num != $largest ) {
            $second_largest = $num;
        }
    }
    return $second_largest;
}
$my_array = array( 5, 10, 20, 15, 25, 30 );
$second_largest = find_second_largest( $my_array );
echo "The second largest number in the array is: " . $second_largest;

// To complete the assignment, create a PHP file and write the code for each of the above functions. You should also include example usage for each function, to show that it is working correctly.