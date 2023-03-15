<?php
//sorting array
$cars=array("valvo","Toyato","BMW");
sort($cars);

$clength = count($cars);

for($x=0;$x<$clength;$x++){
    echo "$cars[$x]";
    echo "<br>";
}

?>