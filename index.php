<<<<<<< HEAD
<?php

// set this to true when you think you are ready(only for CHAL_4).
$checker = true;
// the code will be auto-checked, but be aware, if you have bugs you will receive penality points! 
// when you set $checker = true; you must think as if the application is public and available to users
// so any bug can bring multiple issues.

require_once './bin/bootloader.php';

// write your code between these lines
//---------------------------------
/*function getprice($array){
    $A=$B=$C=$D=$E=0;
   
        for($i=0;$i<count($array);$i++){
            if($array[$i]=='A')
            $A=$A+1;
            else if($array[$i]=='B')
            $B=$B+1;
            else if($array[$i]=='C')
            $C=$C+1;
            else if($array[$i]=='D')
            $D=$D+1;
            else if($array[$i]=='E')
            $E=$E+1;
                                         }
                           $aux=$E;
                         while($B>0 && $aux>1){
                         $B=$B-1;
                         $aux=$aux-2;
                                              }                          
                   
               $price=(int)($A/5)*200+(int)(($A%5)/3)*130+(($A%5)%3)*50+(int)($B/2)*45+($B%2)*30+$C*20+$D*15+$E*40;   
                                    return $price;
                          }

echo ( getprice(['A','B','C','C','A','A','A','A','E','A','A','A','A']) ); */

//CHAL_4.txt

function getprice($array){
    $A=$B=$C=$D=$E=$F=0;
   
        for($i=0;$i<count($array);$i++){
            if($array[$i]=='A')
            $A=$A+1;
            else if($array[$i]=='B')
            $B=$B+1;
            else if($array[$i]=='C')
            $C=$C+1;
            else if($array[$i]=='D')
            $D=$D+1;
            else if($array[$i]=='E')
            $E=$E+1;
            else if($array[$i]=='F')
            $F=$F+1;
                                         }
                           $aux=$E;
                         while($B>0 && $aux>1){
                         $B=$B-1;
                         $aux=$aux-2;
                                              }   
                if($F>=3) {
                   $F=$F-(int)($F/3);
                            }                      
                   
              $price=(int)($A/5)*200+(int)(($A%5)/3)*130+(($A%5)%3)*50+(int)($B/2)*45+($B%2)*30+$C*20+$D*15+$E*40+$F*10; 
                
                                    return $price;
                          }
echo( getPrice(['A','B','D','F','F','F']));
//---------------------------------
?>
=======
<?php

// set this to true when you think you are ready(only for CHAL_4).
$checker = false;
// the code will be auto-checked, but be aware, if you have bugs you will receive penality points! 
// when you set $checker = true; you must think as if the application is public and available to users
// so any bug can bring multiple issues.

require_once './bin/bootloader.php';

// write your code between these lines
//---------------------------------




//---------------------------------
?>
>>>>>>> origin/curs_4
