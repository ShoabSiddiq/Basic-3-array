<?php
$drinks = array('7up', 'pepsi', 'fruto', 'rc cola', 'coca cola', 'lichi drinks', 'dew');

//$someDrinks = array_slice($drinks, 3); //array_slice using for extracting data in given array
//$someDrinks=array_slice($drinks,3,4);
$someDrinks=array_slice($drinks,2,-2,true); // treu using for original index number representing
print_r($someDrinks);
