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

/*TODO: выводить не только авто, но и количество подходящих вариантов (мы подобрали для вас столько-то вариантов)
TODO: выводить фразу с максимально и минимальной подобранной стоимостью автомобиля(мы подо для вас авто стоимостью от ХХХ до ХХХ)*/
$cars = array(
    'Audi A4' => 43000,
    'Audi Q7' => 90000,
    'Audi Q8' => 115000,
    'Audi A8' => 120000
);
unset($argv[0]);

if ($argv) {
    if (isset($argv[1])) {
        foreach ($cars as $model => $price) {
            if ($price <= $argv[1]){
                echo "Auto {$model} costs {$price} <br>";
            } else {
                continue;
            }
        }
    } echo 'Укажите желаемую стоимость автомобиля в цифрах' . PHP_EOL;
    exit;
} echo 'Вы забыли указать стоимость' . PHP_EOL;


