<?php
$cars = array(
    'Audi A4' => 43000,
    'Audi Q7' => 90000,
    'Audi Q8' => 115000,
    'Audi A8' => 120000
);

/*foreach ($cars as $model => $price) {
    echo "Auto {$model} costs {$price} <br>"
TODO: выводить не только авто, но и количество подходящих вариантов (мы подобрали для вас столько-то вариантов)
TODO: выводить фразу с максимально и минимальной подобранной стоимостью автомобиля(мы подо для вас авто стоимостью от ХХХ до ХХХ)
}*/

unset($argv[0]);
$countVariants = 0;
$minPrice = 0;
$maxPrice = 0;
if ($argv[1] >= 43000) {
    $minPrice = 43000;
};

if ($argv[1] >= 120000) {
    $maxPrice = 120000;
} elseif ($argv[1] >= 115000 && $argv[1] < 120000) {
    $maxPrice = 115000;
} elseif ($argv[1] >= 90000 && $argv[1] < 115000) {
    $maxPrice = 90000;
} elseif ($argv[1] >= 43000 && $argv[1] < 90000) {
    $maxPrice = 43000;
}
if ($argv) {
    if (isset($argv[1])) {
        foreach ($cars as $model => $price) {
            if ($price <= $argv[1]){
                $countVariants++;
                echo "Auto {$model} costs {$price}" . PHP_EOL;
            } else {
                continue;
            }
        }
    }
}
if ($argv[1] >= 43000) {
    echo "We can propose you {$countVariants} variants. ";
    echo "You can buy a car for a price of {$minPrice} to {$maxPrice} dollars.";
} else {
    echo "We can't propose you cars cause you have no money for it.";
}


