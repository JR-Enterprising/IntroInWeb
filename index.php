<?php

// set this to true when you think you are ready(only for CHAL_2).
$checker = true;
// the code will be auto-checked, but be aware, if you have bugs you will receive penality points! 
// when you set $checker = true; you must think as if the application is public and available to users
// so any bug can bring multiple issues.

require_once './bin/bootloader.php';

// write your code between these lines
//---------------------------------

function getPrice($jeans_amount, $shirts_amount, $shoes_amount, $skirts_amount){
    $total_price = 0;
    if($jeans_amount >= 3){
        $total_price += ((int)($jeans_amount / 3)) * 130;
        $total_price += ($jeans_amount % 3) * 50;
    }
    else{
        $total_price += $jeans_amount * 50;
    }
    if($shirts_amount >= 2){
        $total_price += ((int)($shirts_amount / 2)) * 45;
        $total_price += ($shirts_amount % 2) * 30;
    }
    else{
        $total_price += $shirts_amount * 30;
    }
    $total_price += $shoes_amount * 20 + $skirts_amount * 15;
    return $total_price;
}

$basket_price = getPrice(5,7,3,2);
echo("Your basket total is ");
echo($basket_price);


//---------------------------------
?>