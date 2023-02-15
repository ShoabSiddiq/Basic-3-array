<?php

$s = array("Mango", "Papaya", "Lichi", "Jackfruit");
//$data=array_pop($s); //last no index should be deleted
//$shift=array_shift($s);//1st index mango deleted
array_push($s, "Orange"); //all index r last a new index add kore
array_unshift($s, "Pine-Apple"); //all index r first a new index add kore
$n = count($s);
for ($i = 0; $i < $n; $i++) {
    echo $s[$i] . "\n";
}




/*
array_shift(); //array data berkrte use kora hoy
array_unshift(); //use for data entry
array_pop(); //array data berkrte use kora hoy(akta array last element l remove kore return kore)
array_push(); //use for data entry
*/