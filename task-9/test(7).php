<?php
//Two dimensional array
$cars=array (
     array("volvo",20,12),
     array("BMW",10,6),
     array("Toyato",20,19),
     array("Saab",19,9)
);

for($row=0;$row<4;$row++){
    echo "Row no $row";
    echo "<ul>";

    for($col=0;$col<3;$col++){
        echo "<li>".$cars [$row][$col]."</li>";
    }
    echo "</ul>";
}

?>