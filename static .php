<?php
function myTest(){
    static $x=196;
    echo $x;
    $x++;
}
myTest();

myTest();

myTest();
?>