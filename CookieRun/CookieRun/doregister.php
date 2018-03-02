<?php
	include "connect.php";
	
	$Username=$_POST['username'];
	$password=$_POST['password'];
	$password2=$_POST['password2'];
	$fullname=$_POST['full_name']; 
    $gender=$_POST['gender'];
    $address=$_POST['address'];              
	$phone=$_POST['phone']; 
	$email=$_POST['email'];
	$birthdate=$_POST['birthdate'];
	
	$query2=mysql_query('SELECT * FROM `msmember` WHERE user_name="'.$username.'"');
	
	
	if($username=='' || $username==NULL)
	{
		header('location:register.php?error=username harus diisi');	
	}
	
	else if (mysql_num_rows($query2)>0)
	{
		header('location:register.php?error=username telah dipakai');	
	}
	else if(strlen($username)<4 ||strlen($username)>15 )
	{
		header('location:register.php?error=Username minimal memiliki panjang 4 karakter dan maksimal 15 karakter. ');	
	}
	else if (!preg_match("/^[a-zA-Z ]*$/",$username))
    {
    	header('location:register.php?error=format username salah');	
    }
	
	else if(strlen($password)<4 || $password==NULL || $password2==NULL)
	{
		header('location:register.php?error=Password minimal memiliki panjang 4 karakter dan maksimal 15 karakter');	
	}
	else if($password=='' || $password==NULL || $password2==NULL)
	{
		header('location:register.php?error=password harus diisi');	
	}
	
	else if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
  	{
  		header('location:register.php?error=format email salah');	 
  	}
	
	else if($password2!=$password)
	{
		header('location:register.php?error=password1 dan password2 tidak sama');	
	}
	
	else if($fullname=='' || $fullname==NULL)
	{
		header('location:register.php?error=fullname harus diisi');	
	}
	else if (!preg_match("/^[a-zA-Z ]*$/",$fullname))
    {
    	header('location:register.php?error=format fullname salah');	
    }
	
	else if($address=='' || $address==NULL)
	{
		header('location:register.php?error=address harus diisi');	
	}
	
	else if (!preg_match("/street/i",$address)) 
	{
		header('location:register.php?error=format address harus mengandung street');	
	}
	
	else if($phone=='' || $phone==NULL)
	{
		header('location:register.php?error=phone harus diisi');	
	}
	
	else if (strlen($phone)!=12)
  	{
  		header('location:register.php?error=format phone salah');	 
  	}
	
	else if($email=='' || $email==NULL)
	{
		header('location:register.php?error=email harus diisi');	
	}
	
	else
	{
		$query=mysql_query('INSERT INTO `msmember` VALUES("","'.$fullname.'","'.$username.'","'.$password.'","'.$gender.'","'.$email.'","'.$birthdate.'","'.$address.'")');
		
		header('location:home.php?sukses=registrasi sukses');
	}
	
	

?>