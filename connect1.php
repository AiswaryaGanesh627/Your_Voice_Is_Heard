<?php
session_start();

// initializing variables
$first_name=_POST('f_name');
$last_name=_POST('l_name');
$email    = _POST('email');
$date_of_birth=_POST('birthday');
$mob_no=_POST('phone');
$username=_POST('u_name');
$password=_POST('psw');
$repeat_pass=_POST('psw-repeat');
if(!empty($firstname) && (!empty($last_name)) && (!empty($email)) && (!empty($date_of_birth)) && (!empty($mob_no)))
{
if (!empty($username))
{
   if(!empty($password))
   {  
      if($password == $repeat_pass)
	  {
	   $host="localhost";
	   $dbusername="root";
	   $dbpassword="";
	   $dbname="websites";
	   
	  // create connection
	  $conn =new mysqli_connect($host, $dbusername, $dbpassword, $dbname);
	  
	  if( mysqli_connect_error())
	  {$sql ="INSERT INTO registration(first_name,last_name,email,date_of_birth,mob_no,username,password,repeat_pass) values ('$first_name','$last_name','$email','$date_of_birth','$mob_no','$username','$password',$repeat_pass)";
		  die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
	  }
	  else{
		  
		  
		  if ($conn->query($sql))
		  {
			  echo "New record is inserted successfully";
		  }
		  else{
			  echo "Error: ".$sql."<br>".$conn->error;
		  }
	$conn->close();
   }
   else
   {
     echo "Enter all the fields";
   }	 
}
else{
	echo "Passwords should  be similar";
die();
}
?>