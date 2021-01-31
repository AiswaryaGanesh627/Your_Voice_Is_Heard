<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "websites";
 
$con=mysql_connect($host,$user,$pass) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db($db,$con) or die("Failed to connect to MySQL: " . mysql_error());

if(isset($_POST['submit']))
{
	$first_name= $_POST['f_name'];
	$last_name= $_POST['l_name'];
	$email    =  $_POST['email'];
	$date_of_birth= $_POST['birthday'];
	$mob_no= $_POST['phone'];
	$username= $_POST['u_name'];
	$password= $_POST['psw'];
	$repeat_pass= $_POST['psw-repeat'];
	
	$sql = "insert into registration(first_name,last_name,email,date_of_birth,mob_no,username,password,repeat_pass)values('$first_name','$last_name','$email','$date_of_birth','$mob_no','$username','$password','$repeat_pass')";
	
	$result = mysql_query($sql); 
	if($result) 
	{ 
	echo "Successfully updated database"; 
	} 
	else 
	{ 
	die('Error: '.mysql_error($con)); 
	} 
}
mysql_close($con);
?> 