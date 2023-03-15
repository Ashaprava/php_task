<?php
$age=array("asha"=>"12","satabdi"=>"23","sadhana"=>"20","prasant"=>"25");
ksort($age);

foreach($age as $a=>$val){
    echo " Her name is ".$a . " and age is " .$val;
    echo "<br>";
    
}
?>