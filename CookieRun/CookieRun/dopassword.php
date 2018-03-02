<?php

	include 'connect.php';
	
	$old=$_POST['old'];
	$new=$_POST['new'];
	$confirm=$_POST['confirm'];
	$old=md5($old);
	echo $old;
	
	$query=mysql_query('SELECT * FROM `msadmin`');
	$row=mysql_fetch_array($query);
	echo " ".$row['password'];
	if(empty($old) || empty($new) || empty($confirm))
	{
		header('location:newartikel.php?error=ada text kosong');	
	}
	
	else if($row['password']!=$old)
	{
		header('location:newartikel.php?error=password salah');
	}
	
	else if($new!=$confirm)
	{
		header('location:newartikel.php?error=password baru tidak cocok');	
	}
	else
	{
		header('location:newartikel.php?sukses');	
	}
	
?>