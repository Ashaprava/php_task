<?php
$x=2;
$y=5;
//Global function
function display(){
    $GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
}
display();
echo $z;


?>