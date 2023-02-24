<?php
/*repeat 3 times the contents of an array*/

/* 
    To execute this code write below line to xampp console
    php -r "require 'test1.php'; repeat([1,2,3]);"
 */

function repeat($myarray){
    //with the use of splat operator [...]
    print_r(array_merge(...array_fill(0,3, $myarray)));
}
?>