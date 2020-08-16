<<<<<<< HEAD
<?php

/**
 * @filename: bootloader
 * @usage: Include this file at the root of the project
 * @author Andrei Dumitrescu
 */
    if($checker){
        require_once 'credentials.php';
        $db = new mysqli(HOST,USER,SECRET,DB,PORT);
    
        if(function_exists('getPrice')){
            $data = $db->query('SELECT input,result FROM Market_Array')->fetch_all();
            $err = 0;
            foreach($data as $try){
                $try[0] = $try[0] == '' ? [] : str_split($try[0]);
                $basket = getPrice($try[0]);
                if($basket != $try[1] || is_null($basket) || !isset($basket)){
                    $err++;
                }
            }

            $branch_name = explode("/", file('.git/HEAD', FILE_USE_INCLUDE_PATH)[0], 3)[2];
            $status = $err == 0 ? 'Success' : 'Fail' ; 
            $query = "INSERT INTO Results (person,status,curs,failed_tests) Values ('".$branch_name."','".$status."',3,".$err.")";
            $result = $db->query($query);

            echo count($data)-$err.' out of '.count($data).' tests have passed';

            if($err == 0){
                echo "</br>Congrats!</br>Don't forget to push the code to git.";   
            }
    
        } else {
            echo 'Function getPrice is not implemented';
        }
    }
?>
=======
<?php

/**
 * @filename: bootloader
 * @usage: Include this file at the root of the project
 * @author Andrei Dumitrescu
 */
    if($checker){
        require_once 'credentials.php';
        $db = new mysqli(HOST,USER,SECRET,DB,PORT);
    
        if(function_exists('getPrice')){
            $data = $db->query('SELECT input,result FROM Market_Array')->fetch_all();
            $err = 0;
            foreach($data as $try){
                $try[0] = $try[0] == '' ? [] : str_split($try[0]);
                $basket = getPrice($try[0]);
                if($basket != $try[1] || is_null($basket) || !isset($basket)){
                    $err++;
                }
            }

            $branch_name = explode("/", file('.git/HEAD', FILE_USE_INCLUDE_PATH)[0], 3)[2];
            $status = $err == 0 ? 'Success' : 'Fail' ; 
            $query = "INSERT INTO Results (person,status,curs,failed_tests) Values ('".$branch_name."','".$status."',3,".$err.")";
            $result = $db->query($query);

            echo count($data)-$err.' out of '.count($data).' tests have passed';

            if($err == 0){
                echo "</br>Congrats!</br>Don't forget to push the code to git.";   
            }
    
        } else {
            echo 'Function getPrice is not implemented';
        }
    }
?>
>>>>>>> origin/curs_4
