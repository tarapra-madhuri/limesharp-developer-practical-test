<?php
/*Make this work (no vowels, lowercase except the first letter):*/

/* 
    To execute this code write below line to xampp console
    php -r "require 'task2.php'; reformat('liMeSHArp DeveLoper TEST');"
 */

function reformat($string){
    //Add i at last regexp to remove all capital vowels as well
    echo preg_replace('#[aeiou]+#', '', ucfirst(strtolower($string)));
}

?>