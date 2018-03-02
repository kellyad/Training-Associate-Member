<?php 

	include "connect.php";
	session_start();
	$query=mysql_query("SELECT * FROM `msmember` WHERE `Username`='".$_REQUEST['username']."' AND `Password`='".md5($_REQUEST['password'])."'");
	if(mysql_num_rows($query)==0){
		header("location:../index.php?err=Username dan password salah");
	}
	else{
		if($_REQUEST['chk_remember']=="ya"){
			setcookie("cookie_user",$_REQUEST['txt_user'],time()+3600);
			setcookie("cookie_pass",$_REQUEST['txt_pass'],time()+3600);
		}
		$hasil=mysql_fetch_array($query);
		if($hasil["status"]=="Member"){
			$_SESSION['member']=$_REQUEST['txt_user'];
			header("location:../member/index.php");	
		}else{
			$_SESSION['admin']=$_REQUEST['txt_user'];
			header("location:../admin/index.php");	
		}
		
	}
?>