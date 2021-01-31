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
            height:350%;
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

<h1 style="text-align:center"><b>FILL UP DETAILS</b></h1>
<div style="text-align:center">
<form action="crime.php" method="post" >
<label for="firname">First Name </label>
<input type="text" name="fname" value="Enter your first name" required></input>
<br>
<br>
<label for="midname">Middle Name </label>
<input type="text" name="mname" value="Enter your middle name" required></input>
<br>
<br>
<label for="lasname">Last Name </label>
<input type="text" name="lname" value="Enter your last name" required></input>
<br>
<br>
<label for="DOB">Date of Birth</label>
<input type="date" name="dobperson"></input>
<br>
<br>
<label for="gender">Gender</label>
<select name="gender">
<option value="Male">Male</option>
<option value="Female">Female</option>
<option value="Other">Other</option>
</select>
<br>
<br>
<label for="Nationality">Nationality</label>
<select name="nation">
<option value="Indian">Indian</option>
<option value="Other">Others</option>
</select>
<br>
<br>
<label for="state">State</label>
<select name="state" id="state">
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Puducherry">Puducherry</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>
</select>
<br>
<br>
<label for="mob">Mobile number</label>
<input type="text" name="mobno" value="Enter your number" required></input>
<br>
<br>
<label for="mail">Email </label>
<input type="text" name="email" value="Enter your email"></input>
<br>
<br>
<label for="aadh">Aadhar number</label>
<input type="text" name="aadno" value="Enter your aadhar number" required></input>
<br><br><br><h3>Address</h3>
<label for="house">House number</label>
<input type="text" name="houno" value="Enter your house number" required></input>
<br>
<br>
<label for="area">Area/Locality</label>
<input type="text" name="locality" value="Enter your locality" required></input><br>
<br>
<label for="lm1">Landmark 1</label>
<input type="text" name="land1" value="Enter your land mark"></input>
<br>
<br>
<label for="lm2">Landmark 2</label>
<input type="text" name="land2" value="Enter your land mark"></input>
<label for="cit">City</label>
<input type="text" name="city1" value="Enter your city" required></input>
<label for="dis">District</label>
<input type="text" name="dis1" value="Enter your district" required></input>
<br>
<br>
<label for="zip">Zipcode</label>
<input type="text" name="pin" value="Enter your pin code" required></input>
<br>
<br>
<input type="submit" name="regi" value="SUBMIT" onclick="location.href='lo.php'"></input>


<?php

if(isset($_POST['regi'])) {

	$f_name = $_POST['fname'];
	$m_name = $_POST['mname'];
	$l_name = $_POST['lname'];
	$date_of_birth = $_POST['dobperson'];
	$gender = $_POST['gender'];
	$nation = $_POST['nation'];
	$state = $_POST['state'];
	$mobno = $_POST['mobno'];
	$email = $_POST['email'];
	$aadhar = $_POST['aadno'];
	$house = $_POST['houno'];
	$loc = $_POST['locality'];
	$lm1 = $_POST['land1'];
	$lm2 = $_POST['land2'];
	$city = $_POST['city1'];
	$district = $_POST['dis1'];
	$pincode = $_POST['pin'];

	mysqli_query($con, "INSERT INTO `details` (`detail_id`,`f_name`,`m_name`,`l_name`,`date_of_birth`,`gender`,`nation`,`state`,`mobno`,`email`,`aadhar`,`house`,`loc`,`lm1`,`lm2`,`city`,`district`,`pincode`) VALUES ('','$f_name','$m_name','$l_name','$date_of_birth','$gender','$nation','$state','$mobno','$email','$aadhar','$house','$loc','$lm1','$lm2','$city','$district','$pincode')");
echo "<script type='text/javascript'> document.location = 'lo.php'; </script>";


}
?>

</form>
<br><br><br>
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