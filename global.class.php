<?php

//Class Defination
class GlobalClass
{
	public function __CONSTRUCT()
	{
		//This will initialize class
	}

	public function func_yogesh($args)
	{
		print "This is called from Yogesh";
		print $args;
	}


	public function func_mithun_add($args1 , $args2)
	{
        return $args1 + $args2 ;
	}

    
    

}

?>