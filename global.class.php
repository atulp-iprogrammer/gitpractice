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


    public function func_dakshas()
    {
        print "This function is created by Daksha";
	}
    public function pramod_rupesh()
    {
		print "This is called from Pramod Rupesh";
		print $args;
    }

    public function func_prachi($args)
    {
        print "This is called by Prachi";
        print $args;
    }



	public function func_mithun_add($args1 , $args2)
	{
        return $args1 + $args2 ;
	}
	
	public function func_ritu_add($args1 , $args2)
	{
        return $args1 + $args2 ;
	}


        public function func_uttam()
	{
		print "This is SPAAAAAARTA";

	}
	public function ganesh_test()
	{
		echo "this is ganesh testing on global";
	}

        
        public function func_bug1()
	{
		print "This is bug1 from SPAAAAAARTA";

	}
        
        
     
        
        
        
        
        
        
        
        
        public function func_dakshas_new(){
            print "New function created for testing";
        }
        
        
}
?>