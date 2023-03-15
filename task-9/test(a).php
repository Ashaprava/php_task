<?php
$flowers=array("rose","tulip","jasmin");
rsort($flowers);

$clength=count($flowers);
for($x=0; $x<$clength; $x++){
    echo $flowers [$x];
    echo "<br>";
}

?>