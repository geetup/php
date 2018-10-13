<?php
$q=5;
$w=6;

function myTest(){
    $GLOBALS['z']=$GLOBALS['q']+$GLOBALS['w'];
}
myTest();
echo$z;
