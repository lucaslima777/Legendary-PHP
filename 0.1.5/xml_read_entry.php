<?php

try {

    /**
     * SimpleXMLElement: Convert XML in Object
     * Tag @: Take the alerts and strip
     */
    @$xml = new SimpleXMLElement(file_get_contents('products.xml'));

} catch (\Exception $e) {
    echo $e->getMessage();
    exit;
}

//GET all products
var_dump($xml->products);

//GET all products name
foreach ($xml->products->product as $all_products_name) {
    echo $all_products_name->name . '<br>';
}

//GET product name in position [0]
var_dump($xml->products->product[0]->name);


//GET products by id
$products_base = $xml->products;
$product_id = $products_base->product[3];

echo $product_id['id'];

echo '<br>';

//GET products by order
$products_base = $xml->products;
$product_order = $products_base->product[5];

echo $product_order['order'];


?>