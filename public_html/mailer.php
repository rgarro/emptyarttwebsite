<?php
session_start();
try {
    if($_POST["unitoken"] == $_SESSION["unitoken"]){

    }else{
        throw new Exception('unitoken did not matched comparison.');
    }        
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
