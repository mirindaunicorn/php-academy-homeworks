<?php
unset($argv[0]);
$evenNumbers = array();
$notEvenNumbers = array();
if (isset($argv)) {
    foreach ($argv as $number) {
        if ($number%2 === 0) {
            $evenNumbers[] = $number;
        } else {
            $notEvenNumbers[] = $number;
        }
    }
}

print_r($evenNumbers);
echo PHP_EOL;
print_r($notEvenNumbers);
echo PHP_EOL;
