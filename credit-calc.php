<?php
$price = $argv[1];
$percent = (100-$argv[2])/100;

$avans = $price*$percent/100;
$priceAfterPercent = $price-$avans;

