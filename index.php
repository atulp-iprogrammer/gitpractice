<?php
include("global.class.php");
//call function from gloabl

$objGlobal = new GlobalClass();

$varArg = "Calling Function";
$objGlobal->func_yogesh($varArg);
    
$objGlobal->func_dakshas();
?>