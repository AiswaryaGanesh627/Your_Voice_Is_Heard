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
            height:250%;
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
	<h1>REGISTRATION</h1>

<br><br>
    <p>Please fill in this form to create an account.</p>
	<br>
	<form action="re.php" method="post" >
	<label for="first_name"><b>FIRST NAME </b></label>
	<input type="text" placeholder="Enter your firstname" name="f_name" required>
	<label for="last_name"><b>LAST NAME </b></label>
	<input type="text" placeholder="Enter your last_name" name="l_name">
	<br><br>
    <label for="email"><b>EMAIL</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
	<br><br>
	<label for="birthday"><b>DATE OF BIRTH:</b></label>
	<input type="date" id="birthday" name="birthday" required>
	<label for="phone"><b>MOBILE NUMBER:</b></label>
	<input type="text" id="phone" name="phone" placeholder="Enter mobile number" required>
	<br><br>
	 <label for="username"><b>USERNAME</b></label>
    <input type="text" placeholder="Enter username" name="u_name" required>
	<br><br>
    <label for="psw"><b>PASSWORD</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
     <br><br>
    <label for="psw-repeat"><b>CONFIRM PASSWORD</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    <br><br>
	<span><b>CAPTCHA</b></span> <span style="font-size: 12pt; color: red"><sup>*</sup></span>
	<script type="text/javascript">
                 function Captcha(){
                     var alpha = new Array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','1','2','3','4','5','6','7','8','9','0');
                     var i;
                     for (i=0;i<6;i++){
                       var a = alpha[Math.floor(Math.random() * alpha.length)];
                       var b = alpha[Math.floor(Math.random() * alpha.length)];
                       var c = alpha[Math.floor(Math.random() * alpha.length)];
                       var d = alpha[Math.floor(Math.random() * alpha.length)];
                       var e = alpha[Math.floor(Math.random() * alpha.length)];
                      }
                    var code = a + ' ' + b + ' ' + ' ' + c + ' ' + d + ' ' + e ;
                    document.getElementById("mainCaptcha").value = code
                  }
                  function ValidCaptcha(){
                      var string1 = removeSpaces(document.getElementById('mainCaptcha').value);
                      var string2 = removeSpaces(document.getElementById('txtInput').value);
                      if (string1 == string2){
                        return true;
                      }
                      else{        
                        return false;
                      }
                  }
                  function removeSpaces(string){
                    return string.split(' ').join('');
                  }
             </script>    
     <body  onload="Captcha();">
      <center>
             <input type="text" id="mainCaptcha"/>
              <input type="button" id="refresh" value="Refresh" onclick="Captcha();" />
			  <br><br>
            <input type="text" id="txtInput"/>   
    </body>
	<p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
	<br><br>
    <input type="submit" name="reg" value="REGISTER"></input>
	<?php
	
	if(isset($_POST['reg'])) {
		
	$first_name = $_POST['f_name'];
	$last_name = $_POST['l_name'];
	$email    =  $_POST['email'];
	$date_of_birth = $_POST['birthday'];
	$mob_no = $_POST['phone'];
	$username = $_POST['u_name'];
	$password = $_POST['psw'];
	$repeat_pass = $_POST['psw-repeat']; 
	
	
	mysqli_query($con, "INSERT INTO `registration` (`id`,`first_name`,`last_name`,`email`,`date_of_birth`,`mob_no`,`username`,`password`,`repeat_pass`) VALUES ('','$first_name','$last_name','$email','$date_of_birth','$mob_no','$username','$password','$repeat_pass')");			
	echo "<script type='text/javascript'> document.location = 'crime.php'; </script>";
	
	}
	
	
	?>
  </form>
		
  <div class="container signin">
  <br><br>
    <p>Already have an account? <a href="lo.php">LOGIN</a>.</p>
  </div>
  
</div>

 <footer>
     <div class="container">
        <div class="row">
          <div class="span4">
            <div class="widget">
              <div class="footer_logo">
                <h3><a href="index.php"><i class="icon-tint"></i> Your Voice Is Heard</a></h3>
              </div>
              <address>
							  <strong>Your Voice Is Heard Inc.</strong><br>
  							Dr.Mahalingam College of Engineering<br>
							And Technology, NPT–MCET Campus,<br>
							Udumalai Road,Pollachi-642003 <br>
							Coimbatore,Tamilnadu, India.
  						</address>
              <p>
                <i class="icon-phone"></i>+91 4259–236030,236040,236050<br>
                <i class="icon-envelope-alt"></i> principal@drmcet.ac
              </p>
			  
            </div>
          </div>
		  <div class="span4">
            <div class="widget">
              </div>
			  </div>
         
          
               <div class="span4">
            <div class="widget">
              <h5 class="widgetheading" align="right"><strong>Justice Is Served</strong></h5>
              <div>
			  <img src="logo3.jpg" align="right" width="200px" height="200px" align="left"></img>
			  </div>
              <div class="clear"></div>
            </div>
          </div>
        </div>
      </div>
          
      <div id="sub-footer">
        <div class="container">
          <div class="row">
            <div class="span6">
              <div class="copyright">
                <p><span>&copy; Your Voice Is Heard Inc. All right reserved</span></p>
              </div>

            </div>

            <div class="span6">
              <div class="credits">
                
                Created by Students Of<a href="http://www.mcet.in"> MCET</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <a href="#" class="scrollup"><i class="icon-angle-up icon-rounded icon-bglight icon-2x"></i></a>
				
            
</div>

</body>

</html>

