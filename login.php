<?php 
   session_start();
   if (isset($_POST[“user” ]) && isset($_POST[“pass”])) { 
   include(“dbconnect.php”);
   $user = mysqli_real_escape_string($db,$_POST[“user”]); 
   $pass = md5(mysqli_real_escape_string($db, $_POST[“pass”])); 
   
   $query = "SELECT PASSWORD from users WHERE USERNAME='" .$user. "'";
   $result = mysqli_query($db, $query) or die(mysqli_error($db)); 
   $row = mysqli_fetch_assoc($result);

   if ($pass == $row["PASSWORD" ]) {
	   $_SESSION[ "username"] = $user;
	   } else {
		   echo "Invalid username or password <br />"; 
	   }
   }
   if (isset($_GET['logout']) && $_GET['logout']==1){
	   session_destroy();
	   header ("location: ".$_SERVER['PHP_SELF']); 
   }
   if(isset($_SESSION["username"])){ 
   echo "Welcome ".$_SESSION["username"]; 
   echo "<br/><a href='".$_SERVER['PHP_SELF']."?logout=1'>Logout</a>"; 
   }else{
	   ?>
	   
	   <!DOCTYPE html>
 <html> 
 <body>
 <form name="register" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
 <table width="30%" border="1" cellpadding="10" cellspacing="0">
<div class="form-container">
	<p class="title">Sign In</p>
	<form class="form">
		<div class="input-group">
			
			<input type="text" name="username" id="username" placeholder="Username">
		</div>
		<div class="input-group">
			
			<input type="password" name="password" id="password" placeholder="Password">
			<div class="register" align="center">
				<a href="registration.php">Register?</a>
				<input type="submit" value="login">
			</div>
		</div>
        <button class="sign"><a href="rateus.html">Submit</a></button>
		</div>
	</form>
	</table>
	</body>
</html>
   <?php }?>

 
