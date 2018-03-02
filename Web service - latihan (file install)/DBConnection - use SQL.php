<?php
	global $conn;
	global $connBiProf;

	//server name SQL Server 2012
	//$serverName = "10.21.50.194, 1433"; //production
	$serverName = "202.58.181.203"; //development => 202.58.181.203 atau WIN-5K85T6VUHGD\MSSQL2008
	//Nama Database
	$connectionDB = array( "Database"=>"BinusMobile", "UID"=>"BinusMobileAdministrator", "PWD"=>"B!nusMobile123");
	$conn = sqlsrv_connect($serverName, $connectionDB);

	//echo "<pre/>";
	/*if( $conn ) {
     echo "Connection established.<br />";
	}else{
	     echo "Connection could not be established.<br />";
	     //die( print_r( sqlsrv_errors(), true));
	}*/

	//Connection on BinusianProfile
	$server = "10.21.50.16, 1433";
	//Nama Database
	$connection_BinusianProfile = array("Database"=>"BinusianProfile", "UID"=>"BinusmayaUser", "PWD"=>"Versi3Binusmaya");
	$connBiProf = sqlsrv_connect( $server, $connection_BinusianProfile );

	/*
		server'    => '10.200.200.238',
         'username'  => 'BM3DEV',
         'password'  => 'Development3',
         'database'  => 'PROFILE_DB'
	*/

	/*echo "<pre/>";
	if( $conn ) {
     echo "Connection established.<br />";
	}else{
	     echo "Connection could not be established.<br />";
	     die( print_r( sqlsrv_errors(), true));
	}*/
?>