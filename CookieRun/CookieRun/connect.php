<?php
	$con = mysql_connect("localhost","root","cookie");
	$con = mysql_select_db("comic");
	if(!$con){	
		die("Could not connect: ".mysql_error());
	}
	else{
		mysql_select_db("test");
	}
?>
