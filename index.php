<?php

// set this to true when you think you are ready(only for CHAL_2).
$checker = false;
// the code will be auto-checked, but be aware, if you have bugs you will receive penality points! 
// when you set $checker = true; you must think as if the application is public and available to users
// so any bug can bring multiple issues.

require_once './bin/bootloader.php';

// write your code between these lines
//---------------------------------

function getPrice($jeans_amount, $shirts_amount, $shoes_amount, $skirts_amount){
    $total_price = $jeans_amount*30 + $shirts_amount*20 + $shoes_amount*25 + $skirts_amount*50;
    return $total_price;
}

$basket_price = getPrice(5,2,1,5);
echo("Your basket total is ");
echo($basket_price);

//---------------------------------
?>