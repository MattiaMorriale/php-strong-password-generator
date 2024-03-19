<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$number = $_GET['number'];

function passGenerate($number) {

    $pass = '';
    
    for($i = 0; $i < $number; $i++){

        $pass .= chr(rand(33,126));

    };

    return $pass;

}

?>