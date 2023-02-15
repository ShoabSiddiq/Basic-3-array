<?php 

$s=array("Mango","Papaya","Lichi","Jackfruit");

echo $s[1]."\n"."\n";

$n=count($s);
for($i=0;$i<$n;$i++){
    echo $s[$i]."\n";
}
echo PHP_EOL;
for($i=$n-1;$i>=0;$i--){
    echo $s[$i]."\n";
}
echo PHP_EOL;
var_dump($s); //var_dump is used to see the data type
