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
            background-image: url('art5.jpg');
            background-repeat: no-repeat;
            background-size: 100%;
			background-attachment: fixed;
            opacity: 1;
            filter:alpha(opacity=40);
            height:200%;
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

<div style="text-align:center">
<h1  style="text-align:center"><b>WE HELP YOU!!!</b></h1>
 <link rel="stylesheet" href="styles2.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <h2 style="text-align:center;"><b><i>Help centre</i></b></h2>
<br>
<br>
  <form action="hel.php" method="post" >
  
  <input type="text" name="name" placeholder="Enter your full name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
  <br><br><br>
  <input type="text" name="email" placeholder="Enter your email address" data-rule="email" data-msg="Please enter a valid email" />
  <br>

<br><br><label style="font-size:140%;"for="text">Why do you want to report?</label><br></br>
    <textarea style="font-size:80%;" id="why do you want to report?"name="report" placeholder="Enter " style="height:150px";></textarea><br></br>

<label style="font-size:140%;" for="query">What are the problems you faced?</label><br></br>
    <textarea style="font-size: 80%;" id="What are the problems you faced?" name="problems" placeholder="Enter" style="height:150px"></textarea><br></br>

    <label style="font-size:140%;" for="query">Send a feedback</label><br></br>
    <textarea style="font-size: 80%;" id="Send Feedback" name="Feedback" placeholder="Enter" style="height:700px"></textarea><br></br>
<br><input type ="submit" name="ro" value="SUBMIT"><br><br><br><br>

<?php
 
 if(isset($_POST['ro'])) {
 
 $name = $_POST['name'];
 $email = $_POST['email'];
 $report =$_POST['report'];
 $problem = $_POST['problems'];
 $feedback =$_POST['Feedback'];
 
 mysqli_query($con, "INSERT INTO `helppage` (`hel_id`,`name`,`email`,`report`,`problem`,`feedback`) VALUES ('','$name','$email','$report','$problem','$feedback')");
 echo "<center><h3>Your problems will be tended to! Thank You</h3></center>";
 
 }
 ?>
</form>
<p style="font-size:140%;">For more queries contact</p>
<P>+91 8735418295,+91 9452671542</p>
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
				
            


</body>

</html>
