<?php
//original: https://docs.google.com/spreadsheets/d/1RJboW7IsrUrYze2PAy7NrumozREdyK2Z8hhCrPYEyzA/edit#gid=0
unset($argv[0]);
if (!$argv){
    echo 'Введите стоимость авто и процент первого взноса(аванса) в виде цифр';
    exit;
}
$price = $argv[1];  //вводимая стоимость
$prepayment = $argv[1]*($argv[2]/100);  //  аванс
$priceAfterPrepayment = $price-$prepayment;    //стоимость с учетом аванса

$perc60 = 1.3;
$month60 = 60;

$perc48 = 1.04;
$month48 = 48;

$perc36 = 0.78;
$month36 = 36;

$perc24 = 0.52;
$month24 = 24;

$perc12 = 0.26;
$month12 = 12;

//расчет кредита на 60 месяцев
$percents60 = $priceAfterPrepayment*$perc60;    //проценты на 60 мес.
$sum60 = $priceAfterPrepayment+$percents60;     //всего на 60 мес
$payment60 = $sum60/$month60;     //ежемесячный платеж на 60 мес

//аналогичный расчет кредита на 48 месяцев
$percents48 = $priceAfterPrepayment*$perc48;    //проценты на 60 мес.
$sum48 = $priceAfterPrepayment+$percents48;     //всего на 60 мес
$payment48 = $sum48/$month48;     //ежемесячный платеж на 60 мес
//аналогичный расчет кредита на 36 месяцев
$percents36 = $priceAfterPrepayment*$perc36;
$sum36 = $priceAfterPrepayment+$percents36;
$payment36 = $sum36/$month36;
//аналогичный расчет кредита на 24 месяца
$percents24 = $priceAfterPrepayment*$perc24;
$sum24 = $priceAfterPrepayment+$percents24;
$payment24 = $sum24/$month24;
//аналогичный расчет кредита на 12 месяцев
$percents12 = $priceAfterPrepayment*$perc12;
$sum12 = $priceAfterPrepayment+$percents12;
$payment12 = $sum12/$month12;

echo 'Расчет на 60 месяцев' . PHP_EOL;
echo 'Стоимость авто: ' . $price . PHP_EOL;
echo 'Аванс: ' . $prepayment . PHP_EOL;
echo 'Стоимость с учетом аванса: ' . $priceAfterPrepayment . PHP_EOL;
echo 'Проценты: ' . $percents60 . PHP_EOL;
echo 'Всего: ' . $sum60 . PHP_EOL;
echo 'Ежемесячный платеж: ' . $payment60 . PHP_EOL;

echo 'Расчет на 48 месяцев' . PHP_EOL;
echo 'Стоимость авто: ' . $price . PHP_EOL;
echo 'Аванс: ' . $prepayment . PHP_EOL;
echo 'Стоимость с учетом аванса: ' . $priceAfterPrepayment . PHP_EOL;
echo 'Проценты: ' . $percents48 . PHP_EOL;
echo 'Всего: ' . $sum48 . PHP_EOL;
echo 'Ежемесячный платеж: ' . $payment48 . PHP_EOL;

echo 'Расчет на 36 месяцев' . PHP_EOL;
echo 'Стоимость авто: ' . $price . PHP_EOL;
echo 'Аванс: ' . $prepayment . PHP_EOL;
echo 'Стоимость с учетом аванса: ' . $priceAfterPrepayment . PHP_EOL;
echo 'Проценты: ' . $percents36 . PHP_EOL;
echo 'Всего: ' . $sum36 . PHP_EOL;
echo 'Ежемесячный платеж: ' . $payment36 . PHP_EOL;

echo 'Расчет на 24 месяца' . PHP_EOL;
echo 'Стоимость авто: ' . $price . PHP_EOL;
echo 'Аванс: ' . $prepayment . PHP_EOL;
echo 'Стоимость с учетом аванса: ' . $priceAfterPrepayment . PHP_EOL;
echo 'Проценты: ' . $percents24 . PHP_EOL;
echo 'Всего: ' . $sum24 . PHP_EOL;
echo 'Ежемесячный платеж: ' . $payment24 . PHP_EOL;

echo 'Расчет на 12 месяцев' . PHP_EOL;
echo 'Стоимость авто: ' . $price . PHP_EOL;
echo 'Аванс: ' . $prepayment . PHP_EOL;
echo 'Стоимость с учетом аванса: ' . $priceAfterPrepayment . PHP_EOL;
echo 'Проценты: ' . $percents12 . PHP_EOL;
echo 'Всего: ' . $sum12 . PHP_EOL;
echo 'Ежемесячный платеж: ' . $payment12 . PHP_EOL;
