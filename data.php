<?php  
  
$con = mysqli_connect('127.0.0.1','root','');  
  
if(!$con)  
{  
    echo 'not connect to the server';  
}  
if(!mysqli_select_db($con,'websites'))  
{  
    echo 'database not selected';  
}  
  
    $first_name = $_POST['f_name'];
	$last_name = $_POST['l_name'];
	$email    =  $_POST['email'];
	$date_of_birth = $_POST['birthday'];
	$mob_no = $_POST['phone'];
	$username = $_POST['u_name'];
	$password = $_POST['psw'];
	$repeat_pass = $_POST['psw-repeat'];   
  
$sql = "INSERT INTO registration (first_name,last_name,email,date_of_birth,mob_no,username,password,repeat_pass) VALUES ('$first_name','$last_name','$email','$date_of_birth','$mob_no','$username','$password','$repeat_pass')";  
  
if(!mysqli_query($con,$sql))  
{  
    echo 'Not inserted';  
}  
else  
{  
    echo 'Data Inserted';  
}  
header("refresh:3; url=re.html")  
?>  