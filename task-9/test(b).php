<?php
$name=array(345,545,651,778);
rsort($name);

$clength=count($name);
for($x=0;$x<$clength;$x++){
    echo $name[$x];
    echo "<br>";
    
}
?>