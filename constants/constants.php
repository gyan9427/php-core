<?php
    echo("<h1>This is DEFINE</h1>");
    define("STANDARD_GREETING", "say  Hello");
    print(STANDARD_GREETING);

    $name = "gyan";
    $name = &$name; // this clears the variable
    echo("\n");
    echo($name);
    $name .= " mishra";
    echo($name);
    //1 + 1 == 2
 print((1 + "1") . "<BR>\n");
 //1 + 2 == 3
 print((1 + "2") . "<BR>\n");
 //1 + 3 == 4
 print((1 + "3extra stuff") . "<BR>\n");

 //1 + 4500000 == 4500001
 print((1 + "4.5e6") . "<BR>\n");
 //1 + 0 == 1
 print((1 + "a7") . "<BR>\n");
?>