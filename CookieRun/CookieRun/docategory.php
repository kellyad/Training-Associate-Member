<?php
	include 'connect.php';
	
	$category=$_POST['category'];
	
	$query2='SELECT * FROM `ms_category` WHERE name_category="'.$category.'"';
	$result=mysql_query($query2);
	
	if(strlen($category)<3)
	{
		header('location:newartikel.php?error=format category baru salah');
	}
	else if(empty($category))
	{
		header('location:newartikel.php?error=category baru kosong');	
	}
	else if(mysql_num_rows($result)>0)
	{
		header('location:newartikel.php?error=category telah ada');
	}
	else
	{
		$query='INSERT INTO `ms_category` VALUES("","'.$category.'")';	
		mysql_query($query);
		header('location:newartikel.php?sukses insert category baru');
	}
	
?>