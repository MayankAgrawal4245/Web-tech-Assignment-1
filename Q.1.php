1. Shopping Cart:
<?php
function calculateTotalPrice($items){
    $totalprice = 0;
    foreach ($items as $item){
        $totalprice += $item['price'];
    }
    if ($totalprice > 5000){
        $discountedprice = $totalprice*0.9;
        return $discountedprice;
    }
    else{
        return $totalprice;
    }
}




$items = array(
    array("item" => "shirt","price"=>1500),
    array("item" => "T-shirt","price"=>2500),
    array("item" => "pant","price"=>3500)
);
$totalprice = calculateTotalPrice($items);
echo "Total price is ".$totalprice;