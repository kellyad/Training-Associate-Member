<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<link rel="stylesheet" type="text/css" href="style.css" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Calvin's Web</title>
</head>
	
<body bgcolor="#666666">
<div id="wrapper">
	<header>
	<div id="head"><img src="fast.jpg" /></div>
     </header>
		<div id="login"><a href="login.php">Login </a> |   <a href="register.php">Register</a></div>
   
     
	<div id="content" style="margin-top:0px">
		<div id="button"><a href="home.php">Home </a></div>
    	<div id="button"><a href="artikel.php">Artikel </a></div>
    	<div id="button"><a href="newartikel.php">New Artikel </a></div>
    	<div id="button"><a href="contact.php">Contact US </a></div>
    		<div id="register"> 
            	<form action="docontact.php" method="POST">
            	<table align="center">
                <tr>
                    <td>Nama </td>
                    <td><input type="text" required="required" name="nama" /></td>
                </tr>
                
                <tr>
   					<td>Email</td>
                    <td><input type="email" required="required" name ="email" /></td>
                </tr>
                
                <tr>
                    <td>Pesan </td>
                    <td><textarea cols="50" rows="5" required="required" name="pesan"/></textarea></td>
                </tr>
                
                
                <tr>
                	<td></td>
                    <td><input type="submit" value="Post" /><input type="reset" value="reset" /></td>
                </tr>
                
                </table>
            	</form>
            </div>
            
    	<footer>
        	<p class="text">Copyright © Calvin Andhika Fast News</p>
 		</footer>   
    </div>
</div>
</body>
</html>