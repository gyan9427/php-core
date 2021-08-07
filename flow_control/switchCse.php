<?php
$select = "case3";

switch ($select) {
    case 'case1':
        print("<h1>Running case 1 </h1>");
        break;
    case 'case2':
        print("<h1>Running case 2 </h1>");
        break;
    
    default:
        print("<h1>Running case default </h1>");
        break;
}