<?php
//1no question ans
function sort_strings_by_length(array $strings): array
{
    usort($strings, function ($a, $b) {
        return strlen($a) - strlen($b);
    });
 
    return $strings;
}
$strings = ['apple', 'banana', 'cherry', 'date', 'elderberry'];
$sorted_strings = sort_strings_by_length($strings);
print_r($sorted_strings);
echo PHP_EOL;
//2no question ans
function concatenate_strings($str1, $str2)
{
    $len1 = strlen($str1);
    $len2 = strlen($str2);

    $common_len = min($len1, $len2);

    $end_str1 = substr($str1, $len1 - $common_len);

    $result = $end_str1 . $str2;

    return $result;
}
$str1 = "Hello, world!";
$str2 = "PHP is awesome";
$result = concatenate_strings($str1, $str2);
echo $result;
echo PHP_EOL;
//3no question ans
function removeFirstAndLast($arr)
{
    array_shift($arr); // Remove the first element
    array_pop($arr); // Remove the last element
    return $arr; // Return the remaining elements as a new array
}
$myArray = array(1, 2, 3, 4, 5);
$newArray = removeFirstAndLast($myArray);
print_r($newArray);
echo PHP_EOL;
//4no question ans
function contains_only_letters_and_whitespace($str) {
    return preg_match('/^[a-zA-Z\s]+$/', $str) === 1;
  }
  $str1 = "Hello World";
  $str2 = "Hello123 World";
  $str3 = "Hello_World";
  
  if (contains_only_letters_and_whitespace($str1)) {
    echo "String 1 contains only letters and whitespace"."\n";
  } else {
    echo "String 1 does not contain only letters and whitespace"."\n";
  }
  
  if (contains_only_letters_and_whitespace($str2)) {
    echo "String 2 contains only letters and whitespace"."\n";
  } else {
    echo "String 2 does not contain only letters and whitespace"."\n";
  }
  
  if (contains_only_letters_and_whitespace($str3)) {
    echo "String 3 contains only letters and whitespace"."\n";
  } else {
    echo "String 3 does not contain only letters and whitespace"."\n";
  }
   
echo PHP_EOL;
//5no question ans
function findSecondLargest($arr)
{
    $largest = max($arr);

    $secondLargest = -INF;
    foreach ($arr as $num) {
        if ($num != $largest && $num > $secondLargest) {
            $secondLargest = $num;
        }
    }

    return $secondLargest;
}
$arr = array(1, 2, 3, 4, 5);
$secondLargest = findSecondLargest($arr);
echo "The second largest number in the array is: " . $secondLargest;
