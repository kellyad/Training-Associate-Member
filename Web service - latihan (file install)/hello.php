<?php
	require_once 'lib/nusoap.php';
	
	$server = new nusoap_server();
	$server->configureWSDL("HelloWorld","urn:HelloWorld");
	$server->register(
		"hello",
		array("input"=>"xsd:string", "age"=>"xsd:int"),
		array("return"=>"xsd:string"),
		"urn:HelloWorld",
		"urn:HelloWorld#HelloWorld",
		'rpc', 
		'encoded', 
		'say hello'
	);

	function hello($input, $age){
		return "Halo $input, umur saya $age tahun";
	}

	$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA)?$HTTP_RAW_POST_DATA:'';
	$server->service($HTTP_RAW_POST_DATA);
	exit();
?>