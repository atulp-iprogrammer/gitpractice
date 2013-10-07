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

	public function func_sharad()
	{
		print "This is called from function sharad. Calling yogesh....<br />";
		func_yogesh(rand(1,10));
	}

}
?>