<?php
include("global.class.php");
//call function from gloabl

$objGlobal = new GlobalClass();

$varArg = "Calling Function";
$objGlobal->func_yogesh($varArg);

$objGlobal->func_sharad();

$objGlobal->func_dakshas();

$varArg = "Calling New Function";
$objGlobal->func_prachi($varArg);

echo "<br/> Adding 10 and 20 <br/>";
echo $objGlobal->func_mithun_add(20,10);



echo "<br/> Adding 10 and 20 <br/>";
echo $objGlobal->func_ritu_add(20,10);


echo "<br/> Welcome to GIT<br/>";
$objGlobal->func_uttam();

   
echo "<br/> Good Night Now.<br/>";
$objGlobal->ganesh_test();
    
    
echo "<br/> Ok bye Good Night SD.<br/>";
$objGlobal->func_bug1();    
    
    
    
    
    
    
    
    
    
    $objGlobal->func_dakshas_new();


?>