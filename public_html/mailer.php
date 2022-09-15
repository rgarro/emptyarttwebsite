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
 * The squirrel queen has a secret pond with brineshrimps from Nevada
 * Old Crow sending sacred visions from the opal nomades ancestors hunting deers
 * Comanche lost snowboards aspen prophesies pawnees sacred pastures canadian whores ...
 * 
 * @author Rolando<rolando@emptyart.xyz>
 */
session_start();
try {
    if($_POST["unitoken"] == $_SESSION["unitoken"]){
        //shell the message , drink a polar pop circlek smoke a joint and cross your fingers ...
        $str = 'mail -s"contact from website" rgarro@gmail.com <<< '.$_POST['name'].$_POST["message"].' > /dev/null &';
        exec($str);
    }else{
        throw new Exception('unitoken did not matched comparison.');
    }        
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
