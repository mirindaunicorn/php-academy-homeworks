<?php

$cars = array(
    'Audi A4' => array(
        'price' => 43000,
        'motor' => 'gasoline',
        'drive' => 'front-wheel',
        'box' => 'automatic transmission',
        'article' => 'A4285'
    ),
    'Audi Q7' => array(
        'price' => 90000,
        'motor' => 'gasoline',
        'drive' => 'rear-wheel',
        'box' => 'mechanic transmission',
        'article' => 'Q7936'
    ),
    'Audi Q8' => array(
        'price' => 115000,
        'motor' => 'diesel',
        'drive' => 'four-wheel',
        'box' => 'automatic transmission',
        'article' => 'Q8993'
    ),
    'Audi A8' => array(
        'price' => 120000,
        'motor' => 'electricity',
        'drive' => 'four-wheel',
        'box' => 'mechanic transmission',
        'article' => 'A8032'
    ),
);

if (isset($argv[1])) {
    foreach ($cars as $key => $car) {
        if ($argv[1] === $key) {
            print_r($car);
        }
    }
}
