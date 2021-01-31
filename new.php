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
            background-image: url('art7.jpg');
            background-repeat: no-repeat;
            background-size: 100%;
			background-attachment: fixed;
            opacity: 1;
            filter:alpha(opacity=40);
            height:300%;
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

<div>
<h1 style= "text-align:center;font-size:200%;">COMPLAINT DETAILS</h1>
</div>
<div align="center">
<form action="new.php" method="post" >
     
    <label style="font-size:125%;" for="Username">Name</label>
    <input style="font-size:80%;" type="text" id="name" name="name" placeholder="Enter your name"><br>

    <label  style="font-size:125%;"for="Complaint Date">Complaint Date</label>
    <input style="font-size:80%;" type="date" id="Complaint Date" name="Date" placeholder="dd/mm/yyyy"><br>

    <label  style="font-size:125%;"for="Address">Address</label>
    <input style="font-size:80%;" type="text" id="Address" name="Address" placeholder="Enter your address"><br>


    <label style="font-size:125%;" for="Complaint Type">Complaint Type</label>
    <select  style="font-size:100%;"id="Complaint Type" name="Type">
      <option style="font-size:100%; value="cyber crime">cyber crime</option>
      <option  style="font-size:100%;value="cyber crime">murder</option>
      <option  style="font-size:100%;value="cyber crime">theft</option>
      <option  style="font-size:100%;value="cyber crime">chain snatching</option>
      <option  style="font-size:100%;value="cyber crime">robbery</option>
      <option style="font-size:100%;value="cyber crime">eve teasing</option>
      <option style="font-size:100%;value="cyber crime">dowry</option>
      <option style="font-size:100%;value="cyber crime">domestic violence</option>
      <option style="font-size:100%;value="cyber crime">drug abuse</option>
      <option style="font-size:100%;value="cyber crime">kidnap</option>
      <option style="font-size:100%;value="cyber crime">tax and license</option>
      <option style="font-size:100%;value="cyber crime">others</option>
      
    </select><br><br>

    <label style="font-size:125%; for="Complaint Description">Complaint Description</label><br><br>
    <textarea id="Complaint Description" name="Desc" placeholder="Enter your complaint" style="height:150px"></textarea>
     <br><br>
    <br><label style="font-size:125%; for="Mobile Number">Re enter Your Mobile Number</label><br>
    <input style="font-size:80%; type="text" id="Mobile Number" name="Mobno" placeholder="Enter your mobile number"><br><br>

    <label style="font-size:125%; for="Email ID">Email ID</label><br>
    <input style="font-size:80%; type="text" id="Email ID" name="Email" placeholder="Enter your Email ID"><br><br>

    <label style="font-size:125%; for="Time of Crime">Time of Crime</label><br>
    <input style="font-size:80%; type="text" id="Time of Crime" name="Time" placeholder="Enter the time of crime"><br><br>
    
   <label  style="font-size:125%;for="Location of Crime">Location of Crime</label><br>
    <input style="font-size:80%; type="text" id="Location of Crime" name="Loc" placeholder="Enter the location"><br><br>
	
	 <label style="font-size:125%; for="Others">Other details about crime</label><br>
    <textarea id="Othersdet" name="details" placeholder="Enter other details" style="height:150px"></textarea><br><br>


    <br><br><input type="submit" value="SUBMIT" name="arr" style="margin:auto;display:block;height:50px;width:75px"></input>
	
	<?php
	
	if(isset($_POST['arr'])) {
	
	$name = $_POST['name'];
	$date = $_POST['Date'];
	$address = $_POST['Address'];
	$type = $_POST['Type'];
	$desc = $_POST['Desc'];
	$mobno = $_POST['Mobno'];
	$email = $_POST['Email'];
	$time = $_POST['Time'];
	$loc = $_POST['Loc'];
	$other = $_POST['details'];
	
	mysqli_query($con, "INSERT INTO `complaints` (`com_id`,`name`,`date`,`address`,`com_type`,`com_desc`,`mobno`,`email`,`com_time`,`com_loc`,`others`) VALUES ('','$name','$date','$address','$type','$desc','$mobno','$email','$time','$loc','$other')");
	echo "<center><h3>Your complaint has been registered! Thank You</h3></center>";
	
	}
	
	
	?>
	</form>
	</div>
	<br><br><br><br>
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
  <div>
  <a href="#" class="scrollup"><i class="icon-angle-up icon-rounded icon-bglight icon-2x"></i></a>
				
            


</body>
</html>