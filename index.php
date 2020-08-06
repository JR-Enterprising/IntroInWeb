<?php

// set this to true when you think you are ready(only for CHAL_2).
$checker = false;
// the code will be auto-checked, but be aware, if you have bugs you will receive penality points! 
// when you set $checker = true; you must think as if the application is public and available to users
// so any bug can bring multiple issues.

require_once './bin/bootloader.php';

// write your code between these lines
//---------------------------------
function getPrice($array)
 {  $A = $B = $C = $D = $E = $F = 0;
    for($i = 0 ; $i < count($array) ; $i++)
  {  
    if( $array[$i] == 'A')
        $A++;
    else if ( $array[$i] == 'B')
        $B++;
    else if ( $array[$i] == 'C')
         $C++;
    else if ( $array[$i] == 'D')
         $D++;
    else if ( $array[$i] == 'E')
         $E++;
    else if ( $array[$i] == 'F')
         $F++;
  }
    $total_price = (int)($A/5)*200 + (int)(($A%5)/3)*130 + (($A%5)%3)*50 +  $C*20 + $D*15 + $E*40;
  
    while ($E >= 2 && $B >= 1 )
    {
        $E = $E - 2;
        $B --;
    }
    $total_price += (int)($B/2)*45 + ($B%2)*30 ;


   if($F >= 3)
    {
        $F = $F-1;
    }
 
    $total_price += (int)($F/3) * 20 + ($F%3)*10;

  return $total_price;
 }

 $array = ['A','B','D','F','F','F'];
 $result = getPrice($array);
 echo($result);

//---------------------------------
?>