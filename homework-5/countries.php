<?php
$countries = array(
    'Ukraine' => array(
        'Kiev',
        'Odessa',
        'Lvov'
    ),
    'Russia' => array(
        'Moscow',
        'Saint-Petersburg',
        'Ufa'
    ),
    'USA' => array(
        'New York',
        'Washington',
        'Detroit'
    )
);

$finded = [];
$citiesCount = 0;
if (isset($argv[1])) {
    unset($argv[0]);
    foreach ($argv as $item) {
        foreach ($countries as $country => $cities) {
            if ($argv[1] == $country) {
                $cities[] = $argv[2];
                echo $country . ' = ';
                print_r($cities);
                exit;
            }
        }
        foreach ($cities as $city) {
                if ($item == $city) {
                    $finded[] =  $country;
                }
            }
        }
    }


foreach ($countries as $country => $cities) {
    echo $country . ': ' . count($cities) . ' cities.' . PHP_EOL;
}



if(count($finded) === 0) {
    echo 'I don\'t know your city. Try again.';
} else {
    foreach ($finded as $item1) {
        echo $item1 . PHP_EOL;
    }
}

