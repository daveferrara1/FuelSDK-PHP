<?php
// spl_autoload_register( function($class_name) {
//     include_once 'src/'.$class_name.'.php';
// });
namespace FuelSdk;

/**
 * This class represents the PATCH operation for REST service.
 */
class ET_PatchRest extends ET_Constructor
{
	/**
	* Initializes a new instance of the class.
	* @param 	ET_Client   $authStub 	The ET client object which performs the auth token, refresh token using clientID clientSecret
	* @param 	string 		$url 		The endpoint URL
	* @param 	array       $props 		Dictionary type array which may hold e.g. array('id' => '', 'key' => '')
	*/
	function __construct($authStub, $url, $props, $qs="")
	{
//		$restResponse = ET_Util::restPatch($url, json_encode($props), $authStub);			
		$restResponse = ET_Util::restPatch($url, json_encode($props), $authStub, $qs);			
		parent::__construct($restResponse->body, $restResponse->httpcode, true);							
	}
}
?>