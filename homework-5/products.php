<?php
$products = array(
    array(
        'id' => 'N8623',
        'title' => 'Notebook',
        'price' => 100.99,
        'description' => 'New notebook!',
        'brand' => 'Dell',
        'quantity' => 31
    ),
    array(
        'id' => 'P655',
        'title' => 'Phone',
        'price' => 1000.00,
        'description' => 'New Phone!',
        'brand' => 'Nokia',
        'quantity' => 258
    ),
    array(
        'id' => 'T326',
        'title' => 'Tablet',
        'price' => 399.99,
        'description' => 'Acer tablet!',
        'brand' => 'Acer',
        'quantity' => 77
    ),
);
$newProducts = 0;
if (isset($argv)) {
    foreach ($products as $key => $product) {
        if (isset($argv[1])) {
            if ($argv[1] == $product['id']) {
                unset($products[$key]);
                $newProducts = $products;
                var_dump($newProducts);
            }
        }
        if ($product['quantity'] < 3) {
            echo 'На складе не хватает такого продукта: ' . PHP_EOL;
            print_r($products[$key]);
            echo PHP_EOL;
        }
    }
}



