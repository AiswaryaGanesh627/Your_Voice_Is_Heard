<?php

 session_start();
 $con = mysqli_connect("localhost","root","","websites"); 
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Your Voice Is Heard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Your page description here" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="css/prettyPhoto.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

  <!-- Theme skin -->
  <link id="t-colors" href="color/default.css" rel="stylesheet" />

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="ico/favicon.png" />

  
  <style>
 #backgroundImage {
			position: absolute;
			top: 0;
			left: 0;
            background-image: url('art6.jpg');
            background-repeat: no-repeat;
            background-size: 100%;
			background-attachment: fixed;
            opacity: 1;
            filter:alpha(opacity=40);
            height:150%;
            width:100%;
            z-index:0.1;
		}
</style>

</head>

<body>
<div id="backgroundImage">
  <div id="wrapper">
    <!-- start header -->
    <header>
      <div class="top">
        <div class="container">
          <div class="row">
            <div class="span6">
              <ul class="topmenu">
                <li><a href="index.php">Home</a></li>
                
              </ul>
            </div>
            <div class="span6">

              <ul class="social-network">
                <li><a href="#" data-placement="bottom" title="Facebook"><i class="icon-circled icon-bglight icon-facebook"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-circled icon-bglight icon-twitter"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Linkedin"><i class="icon-circled icon-linkedin icon-bglight"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Pinterest"><i class="icon-circled icon-pinterest  icon-bglight"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Google +"><i class="icon-circled icon-google-plus icon-bglight"></i></a></li>
              </ul>

            </div>
          </div>
        </div>
      </div>
      <div class="container">


        <div class="row nomargin">
          <div class="span4">
            <div class="logo">
              <h1><a href="index.php"><i class="icon-tint"></i> Your Voice Is Heard</a></h1>
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li class="active">
                      <a href="index.php"> Home</a>
                    </li>
					<li>
					<a href="about.php">About Us</a>
					</li>
					<li>
					<a href="galler.php">Gallery</a>
					</li>
					<li>
					<a href="articles.php">Do You Know?</a>
					</li>
					<li>
					<a href="contact.php">Contact</a>
					</li>
					<li>
					 <a href="hel.php">Help</a>
					</li>
					<li>
					 <a href="re.php">LogIn/SignUp</a>
					</li>
					
				</ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end header -->



<div style="text-align:center;">
<h1 style="color:black;text-align:center;">CRIME INVESTIGATION PORTAL </h1>
<form action="lo.php" method="post">
<br>
<br>
	<h3>USERNAME:<input type="text" placeholder="Enter valid username" name="u_name" id="u_name" required>
	<br><br>
	EMAIL:<input type="text" placeholder="Enter valid email" id="email" name="email" required>
	<br><br>
	PASSWORD:<input type="password" placeholder="enter valid password" id="password" name="password" required>
	<br><br>
	<label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
	<br>
	<input type="submit" name="sub" value="LOG IN" onclick="location.href='personal.html'"></input>
	
	
	<?php
	
	if(isset($_POST['sub'])) {
	
	 $username = $_POST['u_name'];
	 $email = $_POST['email'];
	 $password = $_POST['password'];
	 $query = mysqli_query($con, "SELECT * FROM `registration` WHERE username='$username' AND password='$password' AND email='$email'");
     if(mysqli_num_rows($query) == 1)
      {
			mysqli_query($con,"INSERT INTO `login` (`user_id`,`username`,`email`,`password`) VALUES ('','$username','$email','$password')");
			$_SESSION['username'] = $username;
			$_SESSION['email'] = $email;
           echo "<script type='text/javascript'> document.location = 'personal.php'; </script>";
	  }
	  else
	  {
			echo "<center>Enter valid username and password</center>";
		}
	}
	?>
		
	 
	<br><br><br>
	</form>
	</div>
</div>
</body>


</html>