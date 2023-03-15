<?php
$age=array("ashis"=>"33","prasant"=>"45","rajiv"=>"39");
arsort($age);

foreach($age as $a=>$val)
echo "name is " .$a . " and age is " .$val; 
echo "<br>";


?>