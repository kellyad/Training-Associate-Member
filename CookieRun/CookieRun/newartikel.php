<?php 
	include 'connect.php';
	
	
/*	if(!isset($_SESSION['username'])=='admin')
	{
		header('location:home.php?error=anda tidak punya hak akses ini');	
	}*/
	
?>



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
    
		<div id="login"><a href="login.php">Login </a> |   <a href="register.php">Register</a></div>
    </header>
     
	<div id="content">
    	
		<div id="button"><a href="home.php">Home </a></div>
    	<div id="button"><a href="artikel.php">Artikel </a></div>
    	<div id="button"><a href="newartikel.php">New Artikel </a></div>
    	<div id="button"><a href="contact.php">Contact US </a></div>
    
    		<div style="float:left;margin-left:2%;margin-right:0" id="berita2"> 
            	new category<br />
				new artikel<br />
				edit password
            </div>
            <div style="float:right" id="berita"> 
            	<form action="docategory.php" method="POST">
                <table>
                    <tr>
                    	<td>Category</td>
                    	<td><input type="text" name="category"/></td>
                    </tr>
                    
                    <tr>
                    	<td></td>
                    	<td><input type="submit" value="submit"/><input type="reset" value="reset"/></td>
                    </tr>
                </table>
                </form>
                
                <form action="donews.php" method="POST">
                <table> 
                    <tr>
                    	<td>Title News</td>
                    	<td><input type="text" name="title"/></td>
                    </tr>
                    
                    <tr>
                    	<td>Category</td>
                    	<td>
						<?php
							$query3='SELECT * FROM `ms_category`';
							$data = mysql_query($query3);
							//$result=mysql_fetch_array($data);
							//for($i=0;$i<$data-1;$i++){
							while ($result=mysql_fetch_array($data))
  							{
							?>
                            <input type="radio" name="category" value="<?php echo $result['name_category'];?>"/>
							<?php
							
								echo $result['name_category'] . "<br />";	
							}
						?>
                        </td>
                    </tr>
                    
                    <tr>
                    	<td>Content</td>
                    	<td><textarea rows="7" cols="70" name="content"/></textarea>></td>
                    </tr>
                    
                    <tr>
                    	<td></td>
                    	<td><input type="submit" value="submit"/><input type="reset" value="reset"/></td>
                    </tr>
                    
                 </table>
                </form>
                
                <form action="dopassword.php" method="POST">
                <table>
                    <tr>
                    	<td>Old Password</td>
                    	<td><input type="text" name="old"/></td>
                    </tr>
                    
                    <tr>
                    	<td>New Password</td>
                    	<td><input type="text" name="new"/></td>
                    </tr>
                    
                    <tr>
                    	<td>Confirm Password</td>
                    	<td><input type="text" name="confirm"/></td>
                    </tr>
                    
                    <tr>
                    	<td></td>
                    	<td><input type="submit" value="submit"/><input type="reset" value="reset"/></td>
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