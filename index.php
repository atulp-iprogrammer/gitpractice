<?php
include("global.class.php");
//call function from gloabl

$objGlobal = new GlobalClass();

$varArg = "Calling Function";
$objGlobal->func_yogesh($varArg);

$varArg = "Calling New Function";
$objGlobal->func_prachi($varArg);

echo "<br/> Adding 10 and 20 <br/>";
echo $objGlobal->func_mithun_add(20,10);


echo "<br/> Welcome to GIT<br/>";
$objGlobal->func_uttam();


?>