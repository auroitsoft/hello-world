<?php

class sapp_Hybridauth
{

    public static function _login(){

    	require_once( "/../Hybridauth/hybridauth/Hybrid/Auth.php" );
    	 
		$config = array(
		   // "base_url" the url that point to HybridAuth Endpoint (where the index.php and config.php are found)
		   // "base_url" => "http://localhost/hybridauth-git/hybridauth/",
		   "base_url" => "http://localhost/sentrifugo_3.2/index.php/",

		   "providers" => array (
		       "Google" => array (
		           "enabled" => true, 
		           "keys" => array ( "key" => "378258426408-50jmfd2t2u3e6ovg3ami656pf1lnnand.apps.googleusercontent.com", "secret" => "sahN4oFh-hxS8nxcnAvyMHL_" )
		       )
		   )
		);
		 
		$hybridauth = new Hybrid_Auth( $config );

        // echo "Login True";
        // var_dump($hybridauth);
        return true;

        // check email in db
        // if email exists, return true else return false

    }

    public static function _logout(){
        echo "Login False"; 
    }
      
}
?>
