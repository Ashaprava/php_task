<?php
$age=array("asha"=>"22","satabdi"=>"23","samikshya"=>"20");
asort($age);

foreach($age as $x=>$a){
    echo "name="."$x  " , "  age=".$a;
    echo "<br>";
}
?>