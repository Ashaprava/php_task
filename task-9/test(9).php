<?php
//sort array
$cars=array(324,984,307);
sort($cars);

$clength = count($cars);

for($a=0;$a<$clength;$a++){
    echo "$cars[$a]";
    echo "<br>";
}


?>