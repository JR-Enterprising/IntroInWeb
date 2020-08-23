<?php

// set this to true when you think you are ready(only for CHAL_2).
$checker = true;
// the code will be auto-checked, but be aware, if you have bugs you will receive penality points! 
// when you set $checker = true; you must think as if the application is public and available to users
// so any bug can bring multiple issues.

require_once './bin/bootloader.php';

// 
function getPrice ($jeans_amount, $shirts_amount, $shoes_amount, $skirts_amount)
{
    $total_price = (int)($jeans_amount/3)*130 + $jeans_amount%3*50 + (int)($shirts_amount/2)*45 + $shirts_amount%2*30 +$shoes_amount*20 + $skirts_amount*15;

    return $total_price;
}


    $basket_price = getPrice (4,1,3,2);
    echo(" Your basket total is "); 
    echo($basket_price);

//---------------------------------
?>