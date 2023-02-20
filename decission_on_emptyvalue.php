<?php 

$name='';
if(isset($name)){
    echo "Nmae is set";
} else{
    echo "Not set";
}
echo PHP_EOL;
if(empty($name)){
    echo "Nmae is set";
} else{
    echo "Not set";
}
echo PHP_EOL;

if(isset($name)&&(is_numeric($name) || $name !='')) { //this is the best 
    echo "Name is set";
}else{
    echo "Not set";
}
