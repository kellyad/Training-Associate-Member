<?php include "header.php";?>
	<h1>Login</h1>
    		<div id="login1"> 
            	<form role="form" action="dologin.php" method="POST">
  					<div class="form-group">
                        <label for="exampleUSsername">Username</label>
                        <input type="username" class="form-control" id="username" placeholder="Enter Username">
                     </div>
                     <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password">
                     </div>
                     <input type="submit" value="Login" /><input type="reset" value="reset" />
            	</form>
            </div>
            
   <?php include "footer.php";?>