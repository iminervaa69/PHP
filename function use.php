<?php
function mytest(){
    static $x =0;
    $x++;
    echo $x;
}

mytest();
mytest();
mytest();
?>