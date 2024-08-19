<?php
$x = 5;
$y = 10;

function mytest(){
    global $x, $y;
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

mytest();
echo $y;
?>