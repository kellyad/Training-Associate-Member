<?php

	include 'connect.php';
	
	$nama =$_POST['nama'];
	$email = $_POST['email'];
	$pesan = $_POST['pesan'];
	
	if ($nama=='' || $nama ==NULL)
	{
		header('location:contact.php?error=nama harus diisi');	
	}
	
	else if ($email =='' || $email == NULL)
	{	
		header('location:contact.php?error=email harus diisi');	
	}
	
	else if ($pesan =='' || $pesan == NULL)
	{	
		header('location:contact.php?error=pesan harus diisi');	
	}
	else
	{
		$query='INSERT INTO `contact` VALUES("'.$nama.'","'.$email.'","'.$pesan.'")';
		mysql_query($query);
		
		header('location:home.php?sukses=terima kasih pesan sudah kami simpan');	
	}


?>