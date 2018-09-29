<?php
$letters = array(
    'a',
    'b',
    'c',
    'd'
);

//foreach ($letters as $key => $letter) {
//    $letters[] = $letters[$key];
//    unset($letters[$key]);
//}

$newLetters = array();
foreach ($letters as $key => $letter) {
    $newLetters[] = array_pop($letters);
}

print_r($newLetters);