
//https://devionity.com/ru/courses/php-fundamentals/php-loops-foreach
<?php
$numbers = array(
    1,
    11,
    111,
    1111,
    11111,
    111111,
    1111111,
    11111111,
    111111111,
    1111111111
);

foreach ($arr as $el) {
    echo $el . '<br>';
}



//https://devionity.com/ru/courses/php-fundamentals/php-using-printr

$countries = array(
    'Ukraine',
    'Russia',
    'Spain',
    'USA',
    'Canada'
);

echo '<pre>';
print_r($countries);
echo '</pre>';

//https://devionity.com/ru/courses/php-fundamentals/php-associative-arrays


$capitals_countries = array(
    'Ukraine' => 'Kiev',
    'Russia' => 'Moscow',
    'Spain' => 'Madrid',
    'USA' => 'Washington',
    'Canada' => 'Ottawa'
);

print_r($capitals_countries);

//https://devionity.com/ru/courses/php-fundamentals/php-multidimentional-arrays

$book1 = array(
    'name' => 'Колыбельная',
    'author' => 'Паланик',
    'style' => 'контр-культура',
    'price'=> 99
);

$book2 = array(
    'name' => 'Mediasapience',
    'author' => 'Пелевин',
    'style' => 'контр-культура',
    'price'=> 82
);

$book3 = array(
    'name' => 'Бойцовский клуб',
    'author' => 'Паланик',
    'style' => 'контр-культура',
    'price'=> 120
);

$products = array($book1, $book2, $book3);

//https://devionity.com/ru/courses/php-fundamentals/php-constants

define('UA', 'Ukraine');
define('RU', 'Russia');
define('ENG', 'England');
$arr_countries = array(UA, RU, ENG);

$hello = 'one';
$one ='two';
$two = 'three';
$three = 'four';
$four = 'five';


echo $four;
echo $$$$$hello;

//tasks from: https://php-academy.kiev.ua/zadachi/php

$name = 'Anastasiia'; //#18

$age = 23; //#19

echo 'My name is ' . $name . '<br>'; //#20

echo 'I\'m ' . $age . 'years old.' . '<br>'; //#21

if ($age >= 18 && $age <= 59) {
    echo 'Вам еще работать и работать';
} elseif ($age > 59) {
    echo 'Вам пора на пенсию';
} elseif ($age >= 0 && $age <= 17) {
    echo 'Вам еще рано работать';
} elseif ($age < 0 || gettype($age) != 'integer') {
    echo 'Неизвестный возраст';
}//#22+#23+#24+#25

//#30

$s = 1;     //длина участка в километрах
$t = 2;     //время поездки в часах
$v1 = $s/$t;     //скорость движения км/час
$v2 = ($s*1000)/($t*3600);    //скорость движения м/сек

//#31
$foo = 'bar';
$bar = 10;

echo $$foo;

//#32

$number_1 = $argv[1];
$operator = $argv[2];
$number_2 = $argv[3];

if ($operator == '+') {
    echo $number_1+$number_2;
} elseif ($operator == '-') {
    echo $number_1-$number_2;
} elseif ($operator == '*') {
    echo $number_1*$number_2;
} elseif ($operator == '/') {
    if ($number_2 != 0){
        echo $number_1*$number_2;
    }
    echo 'Error';
    exit;
}

//#33

$a = 33;
$b = 44;

if ($a<$b) {
    echo $b;
} else {
    echo $a;
}

//#34+35+36

$a = '78';
$b = 78;

if ($a == $b) {
    echo 'равны';
} else {
    echo 'не равны';
}

if ($a === $b) {
    echo 'эквивалентны';
} else {
    echo 'не эквивалентны';
}

var_dump($a, $b);

//#37+38+39
$number = 20;
$number2 = 0;
$number3 = -20;
var_dump((bool)$number); //мы увидим результат true, потому что любое число, кроме нуля, будет соответствовать этому значению
var_dump((bool)$number2); //мы увидим результат false
var_dump((bool)$number3); //мы увидим результат true, потому что любое число, кроме нуля, будет соответствовать этому значению

//#40
$str = 'Hello world';
$str2 = array ('Hello world');
echo $str;
var_dump($str);
print_r($str2);

//#41

//comment1
/* comment2 */

#comment3

//#42
?> --  -- закрыла первый тег, чтобы работал ранее написанный код

<?php
echo 'hello world';
?> -- полная формулировка записи кода на ПХП, обязательные еги, чтобы код работал

<?= 'hello world' ?> -- короткая, редко исопльзуемая и, в принципе, не желательная, но работающая форма записи кода, написанного чуть выше
 -- заменяет echo и дает коду выполняться корректно

<?php

//#43

define('DAYS_COUNT', 7);
const MONTH_COUNT = 12;

//#44

echo '<p>Это абзац, но, скорее всего, он не отобразится нормально</p>'; //выяснилось, что в терминале отображается вместе с тегами абзаца

