<?php
/**
 *    ________________
 *    |'-.--._ _________:
 *    |  /    |  __    __\
 *    | |  _  | [\_\= [\_\
 *    | |.' '. \.........|
 *    | ( <)  ||:       :|_
 *     \ '._.' | :.....: |_(o
 *      '-\_   \ .------./
 *      _   \   ||.---.||  _
 *     / \  '-._|/\n~~\n' | \
 *    (| []=.--[===[()]===[) |
 *    <\_/  \_______/ _.' /_/
 *    ///            (_/_/
 *    |\\            [\\
 *    ||:|           | I|
 *    |::|           | I|
 *    ||:|           | I|
 *    ||:|           : \:
 *    |\:|            \I|
 *    :/\:            ([])
 *    ([])             [|
 *     ||              |\_
 *    _/_\_            [ -'-.__
 *   <]   \>            \_____.>
 *     \__/     
 * 
 * :: CAKEPHP TEQUILA TRES LECHES WITH BLUE BERRY :::
 *    :: CONTACT CGI with unitoken security ::
 * 
 * @author Rolando<rolando@emptyart.xyz>
 */
session_start();
try {
    if($_POST["unitoken"] == $_SESSION["unitoken"]){

    }else{
        throw new Exception('unitoken did not matched comparison.');
    }        
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
