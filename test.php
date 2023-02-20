<?php 

function findLongestWord($str) {
    $words = explode(" ", $str);
    $longest_word = "";
    foreach ($words as $word) {
        if (strlen($word) > strlen($longest_word)) {
            $longest_word = $word;
        }
    }
    return $longest_word;
}

$str = "The quick brown fox jumped over the lazy dog";
$longest_word = findLongestWord($str);
echo $longest_word; 


