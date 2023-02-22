<?php

$numbers = array();
for ($i = 12; $i < 21; $i++) {
    array_push($numbers, $i);
}
print_r($numbers) . "\n" . "\n";
//using range fun
$anotherway = range(12, 20, 2); // 2 is using here for increment purpose in every step 2 is incremented
print_r($anotherway) . "\n";

foreach (range(11, 20, 2) as $oddnumber) { //2 is stepping
    echo $oddnumber;
    echo PHP_EOL;
}
echo PHP_EOL;
foreach (range(0, 50, 7) as $oddnumber) { //7 is stepping
    if ($oddnumber > 0) {
        echo $oddnumber;
        echo PHP_EOL;
    }
}
