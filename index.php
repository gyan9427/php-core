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
print("<a href=./constants/constants.php>constants</a></br>");
print("<a href=./flow_control/ifelse.php>ifElse</a></br>");
print("<a href=./flow_control/switchCse.php>switch</a></br>");
print("<a href=./flow_control/while.php>while</a></br>");
?>