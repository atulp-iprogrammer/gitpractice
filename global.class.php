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

    public function func_prachi($args)
    {
        print "This is called by Prachi";
        print $args;
    }

}

?>