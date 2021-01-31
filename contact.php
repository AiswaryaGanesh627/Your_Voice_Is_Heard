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

  
</head>

<body>
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
	
	
    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2>Get in touch</h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="index.html">Home</a> <i class="icon-angle-right"></i></li>
              <li class="active">Contact</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section id="content">
      <img src="ash.png" height="1000px" width="1500px" ></img>
      <div class="container">
	  <div>
	  </div>
	  
        <div class="row">
          <div class="span8">
            <h4>Get in touch with us by filling contact form below</h4>



            <form action="contact.php" method="post" >

              

              <div class="row">
                <div class="span4 field form-group">
                  <input type="text" name="name" placeholder="* Enter your full name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="span4 field form-group">
                  <input type="text" name="email" placeholder="* Enter your email address" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="span8 margintop10 field form-group">
                  <input type="text" name="subject" placeholder="Enter your subject" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="span8 margintop10 field form-group">
                  <textarea rows="12" name="message" class="input-block-level" placeholder="* Your message here..." data-rule="required" data-msg="Please write something"></textarea>
                  <div class="validation"></div>

                  <p>
                    <input type="submit" name="sonu" class="btn btn-color margintop10 pull-left" value="Send message"></input>
                    <span class="pull-right margintop20">* Please fill all required form field, thanks!</span>
                  </p>
				  <?php
				  
				  if(isset($_POST['sonu'])) {
				  
				  $name = $_POST['name'];
				  $email = $_POST['email'];
				  $sub = $_POST['subject'];
				  $msg = $_POST['message'];
				  
				  
				  mysqli_query($con, "INSERT INTO `contact` (`con_id`,`name`,`email`,`subject`,`message`) VALUES ('','$name','$email','$sub','$msg')");
				  echo "<center><h4>Your message has been sent! Thank You</h4></center>";
				  }
				  
				  ?>
                </div>
              </div>
            </form>
          </div>
          <div class="span4">
            <div class="clearfix"></div>
            <aside class="right-sidebar">

              <div class="widget">
                <h5 class="widgetheading">Contact information<span></span></h5>

                <ul class="contact-info">
                  <li><label>Address :</label> Dr.Mahalingam College of Engineering & Technology,<br>NPT – MCET Campus, Udumalai Road,<br>Pollachi-642 003. Coimbatore – District,<br>Tamilnadu, India</li>
                  <li><label>Fax : </label>+91 4259-236060, 236070</li>
                  <li><label>Email : </label> principal@drmcet.ac.in</li>
				  <li><label>Website : </label>  http://www.mcet.in</li>
                </ul>

              </div>
            </aside>
          </div>
        </div>
      </div>
    </section>

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
  </div>
  <a href="#" class="scrollup"><i class="icon-angle-up icon-rounded icon-bglight icon-2x"></i></a>
				

 

</body>

</html>
