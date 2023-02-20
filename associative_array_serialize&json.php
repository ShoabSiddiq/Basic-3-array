<?php 

$student=[
    'fname'=>'Shoab',
    'lname'=>'Siddiq',
    'age'=>'15',
    'class'=>8,
    'section'=>'B',
];
print_r($student);
printf("%s %s \n",$student['fname'],$student['lname']);
$serialized= serialize($student);
echo $serialized."\n";

$newstudent=unserialize($serialized);
print_r($newstudent);

$jsondata=json_encode($student);
echo $jsondata;
echo "\n";

$newjason=json_decode($jsondata,true);
print_r($newjason);