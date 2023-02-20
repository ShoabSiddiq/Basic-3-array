<?php

$VEGETABLES=explode(',','brinjal,brocoli,carrot,capsicam'); //delimeter(',',')
var_dump($VEGETABLES);
echo $VEGETABLES[1]."\n";

$VEGETABLES=join(', ',$VEGETABLES);
echo $VEGETABLES;