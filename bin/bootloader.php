<?php

/**
 * @filename: bootloader
 * @usage: Include this file at the root of the project
 * @author Andrei Dumitrescu
 */
    require_once 'credentials.php';
    $db = new mysqli(HOST,USER,SECRET,DB,PORT);


    $result = $db->query('SELECT * FROM Market')->fetch_assoc();
    var_dump($result);

    $branch_name = explode("/", file('.git/HEAD', FILE_USE_INCLUDE_PATH)[0], 3)[2];
    echo ($branch_name);
?>
