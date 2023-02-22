<?php 

$string="Quick brown brown Fox fox jumps over the lazy dog";
$replacedstring1=str_replace('brown','BROWN',$string)."\n";
$replacedstring2=str_replace('fox','Fox',$string)."\n";
echo $replacedstring1;

echo $replacedstring2."\n";
$string2="Hello all great Great job";
$replacestring3=str_ireplace('great','HI',$string2,$count);//ireplace is used for remove case sensitive(great,Great all types he shortout)
echo $replacestring3."\n";
echo "Total replace: {$count}";
