<?php
	 ini_set('display_errors', 1);
	 ini_set('display_startup_errors', 1); 
	 error_reporting(E_ALL);
	if(isset($_POST['xml'])){
	ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
	libxml_disable_entity_loader (false);
	$dom = new DOMDocument();
	$dom->loadXML($_POST['xml'], LIBXML_NOENT | LIBXML_DTDLOAD);
	$info = simplexml_import_dom($dom);
	$email = $info->email;
	$password = $info->password;
	if($email=="jehadalqurashi@hotmail.com" && $password=="test"){
		echo json_encode("Legend");

	}else{

		
		echo json_encode("Email Or Password is incorrect");
	}
}


?>