<?php 

$person=array('fname'=>'Hello','lname'=>'world');
$newperson=$person;
$newperson['lname']='habib';

print_r($person);
print_r($newperson); 
echo PHP_EOL;
//call by value
//deep copy
$person=array('fname'=>'Hello','lname'=>'world');
$newperson=&$person; //& using here called=> copy by reference or shalloww copy
$newperson['lname']='habib';
print_r($person);
print_r($newperson); 
echo PHP_EOL;

function data($person){
    $person['fname'] .="Change";
    print_r($person);
}

data($person);
print_r($person);

