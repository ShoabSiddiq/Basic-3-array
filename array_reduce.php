<?php 

$numbers=array(1,2,3,4,5,6,7,8,9,10);

function sum($oldvalue,$newvalue){
      return $oldvalue+$newvalue;
}
$sum=array_reduce($numbers,'sum');
echo $sum;
echo PHP_EOL;

// working process
// sum(0,1);//1
// sum(1,2)//3
// sum(3,3)//6 ....

function even($oldvalue,$newvalue){ //find sum of even number
      if($newvalue%2==0){
            return $oldvalue+$newvalue;
      }
      return $oldvalue;
}

$evensum=array_reduce($numbers,'even');
print_r($evensum);