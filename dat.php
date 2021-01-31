<?php
 
	$username = $_POST['u_name'];  
    $password = $_POST['password']; 

    $con = mysqli_connect("localhost","root","","webs"); 
	
	mysqli_query($con,"INSERT INTO `login` (`id`,`username`,`password`,`data`) VALUES ('','$username','$password',NOW())");
	
?>  
  
 
  
 
