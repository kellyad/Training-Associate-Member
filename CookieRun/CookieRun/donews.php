<?php
	include 'connect.php';
	
	$title=$_POST['title'];
	$category=$_POST['category'];
	$content=$_POST['content'];

	if(empty($title))
	{
		header('location:newartikel.php?error=title harus diisi');	
	}
	else if(strlen($title)<5)
	{
		header('location:newartikel.php?error=title harus lebih dari 5 character');	
	}
	else if(empty($category))
	{
		header('location:newartikel.php?error=category harus dipilih');	
	}
	else if(empty($content))
	{
		header('location:newartikel.php?error=title harus di isi');	
	}
	else
	{
		$query=mysql_query('INSERT INTO `ms_news` VALUES("","'.$title.'","'.$category.'","'.$content.'","")');
		header('location:newartikel.php?sukses=Artikel baru sudah di upload');	
	}
	
?>