<?php

if(isset(S_POST["user"]) 88 isset($POST["pass"])) (
 include("dbconnect.php"); 
 $name = mysqli_real_escape_string($db, $_POST["name"]);
 $email - mysqli_real_escape_string($db,$_POST( "email"]);
 $user = mysqli_real_escape_string($db, S_POST("user"]);
 $pass = md5 (mysqli_real_escape_string(Sdb, $_POST["pass"])); 
 
 $query = "INSERT INTO users (name, email, username, password) VALUES ('$name', '$email', '$user', '$pass')";
 
 mysqli_query($db, $query) or die(mysqli _error ($db)); 
 echo "Registration for $user was successful ‹br/›‹br/›"; 
 
 $query = "SELECT max(id) FROM users";
 $result = mysqli_query($db, $query);
 $row = mysqli_fetch_assoc($result); 
 $uid = Srow[ 'max(id) '];

 include("upload.php"); 
 }
 ?>
 
 <!DOCTYPE html>
 <html> 
 <body>
 <form name="register" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
 <table width="30%" border="1" cellpadding="10" cellspacing="0">
 <div class="form-container">
	<p class="title">Login</p>
	<form class="form">
		<div class="input-group">
			<input type="text" name="firstname" id="firstname" placeholder="First Name:">
		</div>
        
        <div class="input-group">
			<input type="text" name="lastname" id="lastname" placeholder="Last Name:">
		</div>
        
          <div class="input-group">
			<input type="email" name="email" id="email" placeholder="Email:">
		</div>
        
         <div class="input-group">
			<input type="text" name="username" id="username" placeholder="Username:">
		</div>
        
		<div class="input-group">
			<input type="password" name="password" id="password" placeholder="Password">
		</div>
        
        <div class="input-group">
			<input type="password" name="comfirmpassword" id="comfirmpassword" placeholder="Confirm Password:">
			<div class="input-group">
			   <input type="file" name="fileToUpload" id="fileToUpload" required>
			   </div>
		</div>
        <button class="sign"><a href="rateus.html">Submit</a></button>
	</form>
	
 
 
