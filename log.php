<?php
 
	$username = $_POST['u_name'];  
    $password = $_POST['password']; 

    $con = mysqli_connect("localhost","root","","webs"); 
	
	mysqli_query($con,"INSERT INTO `login` (`id`,`username`,`password`,`data`) VALUES ('','$username','$password',NOW())");
	
?>  


<!DOCTYPE html> <!-- the doctype should define the page as an HTML5 document -->
<meta charset="UTF-8"> <!-- A mete tag should define the character set UTF-8 -->
<!-- A viewport meta tag should make the web site work on all devices and screen resolutions -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<html lang="en">
<head> 
<title>
Your Voice Is Heard
</title>
<link rel="icon" href="logo3.jpg" type = "image/x-icon" sizes="300x300">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<h1 style="color:black;text-align:center;">CRIME INVESTIGATION PORTAL </h1></head>
<body style="text-align:center;">
<form action="log.php" method="post">
<br>
<br>
	<h3>USERNAME:<input type="text" placeholder="enter valid username" name="u_name" id="u_name"  required>
	<br><br>
	PASSWORD:<input type="password" placeholder="enter valid password" name="password" id="password" required>
	<br><br>
	<label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
	<br><br>
	<input type="submit" value="LOG IN"></input>
</form>
</body>
</html>