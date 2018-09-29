<?php
$months = array(
    'January' => 31,
    'February' => 28,
    'March' => 31,
    'April' => 30,
    'May' => 31,
    'June' => 30,
    'July' => 31,
    'August' => 31,
    'September' => 30,
    'October' => 31,
    'November' => 30,
    'December' => 31
);

if (isset($argv[1]) && isset($argv[2])) {
    foreach ($months as $key => $month) {
        if ($argv[2] == $key) {
            if ($argv[1] > $month) {
                echo 'В месяце (' . $argv[2] . ') максимум ' . $month . ' дней.';
            } else {
                echo $argv[1] . 'й день существует в месяце ' . $argv[2];
            }
        }
    }
}