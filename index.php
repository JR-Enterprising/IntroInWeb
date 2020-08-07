<?php

// set this to true when you think you are ready(only for CHAL_4).
$checker = false;
// the code will be auto-checked, but be aware, if you have bugs you will receive penality points! 
// when you set $checker = true; you must think as if the application is public and available to users
// so any bug can bring multiple issues.

require_once './bin/bootloader.php';

// write your code between these lines
//---------------------------------

function getPrice($order){
        if(!is_array($order)){
            return -1;
        }
        $store = ["A"=>50, "B"=>30, "C"=>20, "D"=>15, "E"=>40];
        $counter = ["A"=>0, "B"=>0, "C"=>0, "D"=>0, "E"=>0];
        $total = 0;
        $contor = 0;
        foreach($counter as $key=>$value){
            foreach($order as $i_key){
                if($key == $i_key){
                    $counter[$key] += 1;
                }
            }
        }
        if($counter['E'] >= 2 && $counter['B'] >= 1){
                $contor = (int)($counter['E'] / 2);
                $counter['B'] -= $contor;
                if($counter['B'] < 0){
                    $counter['B'] = 0;
                }
        }
        foreach($counter as $key=>$value){
            if($key == 'A'){
                $contor = 0;
                $total += (int)($value / 5) * 200;
                $contor = $value % 5;
                $total += (int)($contor / 3) * 130 + ($contor % 3) * 50;
                $contor = 0;
            }
            if($key == 'B'){
                $total += (int)($value / 2) * 45 + ($value % 2) * 30;
            }
            if($key == 'C'){
                $total += $value * 20;
            }
            if($key == 'D'){
                $total += $value * 15;
            }
            if($key == 'E'){
                $total += $value * 40;
            }
        }
        return $total;
    }
    echo getPrice(['A','B','C','C','A','A','A','A','E','A','A','A','A']);

//---------------------------------
?>