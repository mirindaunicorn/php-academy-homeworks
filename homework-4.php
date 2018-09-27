<?php
//#45
$languages = array(
    'html',
    'css',
    'php',
    'js',
    'jq'
);
/*foreach ($languages as $language) {
    echo $language . PHP_EOL;
}*/

//#46
$numbers = array(
    1,
    20,
    15,
    17,
    24,
    35
);
$result = 0;
foreach ($numbers as $number) {
    $result += $number;
}
echo $result;

//#47

$numbersNew = array(
    26, 17, 136, 12, 79, 15
);
foreach ($numbersNew as $numberNew) {
    $result += $numberNew*$numberNew;
}
echo $result;

//#48
$arr = array(
    'green'=>'зеленый',
    'red'=>'красный',
    'blue'=>'голубой'
);
foreach ($arr as $key=>$value) {
    echo $key . PHP_EOL;
}
foreach ($arr as $key=>$value) {
    echo $value . PHP_EOL;
}

//#49
$salaries = array(
    'Коля' => 200,
    'Вася' => 300,
    'Петя' => 400
);
foreach ($salaries as $sum=>$salary) {
    echo $sum . ' получает зарплату в размере ' . $salary . ' долларов.' . PHP_EOL;
}

//#50
$arr = array(
    'green'=>'зеленый',
    'red'=>'красный',
    'blue'=>'голубой'
);
$en = array();
$ru = array();
foreach ($arr as $key=>$value) {
    $en[] = $key;
    $ru[] = $value;
}
print_r($en);
print_r($ru);

//#51
$arrNumbers = array(
    2,
    5,
    9,
    15,
    0,
    4
);
foreach ($arrNumbers as $arrNumber) {
    if ($arrNumber > 3 && $arrNumber < 10) {
        echo $arrNumber . PHP_EOL;
    }
}
//#52
$strNumbers = array(
    1,
    2,
    3,
    4,
    5,
    6,
    7,
    8,
    9
);
$stringArr = array();
foreach ($strNumbers as $strNumber) {
    echo $stringArr[] = $strNumber;
}   //не уверенна, но вроде бы в таком случае будут выведены просто все элементы, а они являются числами, поэтому
echo implode($stringArr);   //чтобы получить строку, нужно использовать специальную функцию, чтобы получить строку
