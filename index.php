<?php 
function addColor(){
    static $colorValue;

    if($colorValue == "#00FF00"){
        $colorValue = "#CCFFCC";
    }
    else{
        $colorValue = "#00FF00";
    }
    return $colorValue;
}
print("<TABLE WIDTH=\*300\>\n");
for($count =0; $count < 10; $count++){
    $rowColor = addColor();
    print("<TR><TD BGCOLOR=\*$rowColor\*>");
    print("Row number $count</TD></TR>\n");
}
print("</TABLE>\n");
?>