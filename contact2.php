<?php
//checks if variable is set or not. True/false validation 
  if (isset($_POST['name']))  {
  
  //variables 
  $admin_email = "2njojo@tawacollege.school.nz";
  $name = $_POST['name'];
  $email= $_POST['email'];
  $message = $_POST['message'];
  
  //output to email message
  $body =" Name ". $name. "\n".
		"Student Last name: ". $lastName. "\n".
		"Email ". $email. "\n".
		"Message: ". $message;
  
  //php mail function
  mail($admin_email, "Tawa College website form reponse", $body);
  
  //output message on website * formatting of the echo needs to reformatted, to improve legibility and readability // 
  echo "<p>Tawa College contact reponse</p>". "<p>Your details have been recorded as </p>"."<br>".
		"<p>Name: $name </p>".
		"<p>Email Address:  $email </p>".
		"<p>Message:  $message</p>".
        "<a href='index.html'>Click here to return to HOME page</a>";
  }
  //if no value is set in email, the form will ask the user for the relevant information 
  else  {
?>


<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <title>Tawa College</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!--stylesheet and Jquery--> 
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/style 2.css">
  <link rel="stylesheet" type="text/css" href="css/style 1.css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
  <script type="text/javascript" src="js/modernizr.js"></script>
  
  <!--favicon-->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
</head>

<body>
  <div>
  <div class="header">
    <div class="top-header">
      <h1 class="college-title">tawa College</h1><img class="logo" src="images/logo white.png">
    </div>
	
  <div class="bottom-header">
	<div class="navbar">
		
	  <div class="menu">
		<nav class="nav-menu">
		  <!--this is where you can add more links to the navigation bar-->
		  <a class="nav-link" href="index.html">Home</a>
		  <a class="nav-link" href="hub.html">Hub</a>
		  <a class="nav-link" href="about.html">About</a>
		  <a class="nav-link" href="international.html">International</a>
		  <a class="nav-link" href="students.html">Our Students</a>
		  <a class="nav-link" href="enrolment.html">Join Us</a>
		  <a class="nav-link" href="contact.html">Contact</a>
		</nav>
	  </div>
		
	  <!--Add links that had been incorporated in the above navigation bar in the hamburger button as well-->
	  <div class="hamburger-menu">
		<input class="burger-check" id="burger-check" type="checkbox"><label for="burger-check" class="burger"></label>
		<nav id="navigation1" class="navigation">
			<ul>
			  <li><a href="index.html">Home</a></li>
			  <li><a href="hub.html">Hub</a></li>
			  <li><a href="about.html">About</a></li>
			  <li><a href="international.html">International</a></li>
			  <li><a href="students.html">Our Students</a></li>
			  <li><a href="enrolment.html">Join Us</a></li>
			  <li><a href="contact.html">Contact</a></li>
			</ul>
		</nav>
	  </div>
	</div>
	<div class="gradient-border red-gradient"></div>
  </div>
  </div>
  
    <div class="gradient-border"></div>
    <div class="inner-hero">
      <div class="container">
        <h1 class="hero-header">Let's Connect</h1>
      </div>
    </div>
	
    <div class="footer-top" id="posts">
      <div class="w-container">
        <div class="w-row">
		
         			<div class="w-col w-col-6">
            <h3>Staff Emails</h3>
            <p class="contact-paragraph">
			<b>Mr. Lucas (Principal):</b> MLucas@tawacollege.school.nz <br>
			<b>Mrs. Nicholas (Dep. Principal):</b> JNicholas@tawacollege.school.nz <br>
			<b>Ms. West (Dep. Principal):</b> AWest@tawacollege.school.nz <br>
			<a class="button international w-button" href="https://drive.google.com/file/d/0B0KTt5SbkqdZLXhaVFFTeXNtaEE/view?usp=sharing" target="_blank">List of Other Staff Emails</a>
              <br><strong>Address: Duncan Street, Tawa, Wellington 5028</strong>
              <br><strong>Email:????</strong>
              <br><strong>Telephone: 04-232 8184</strong>
            </p>
          </div>
		  
          <div class="w-col w-col-6">
		  
            <div class="w-form">
              <form class="contact-form" data-name="Email Form" id="email-form" name="email-form" form method="post" autocomplete="on">
			  
			  
                <label class="field-label" for="name">Name:</label>
				
                <input class="contact-field w-input" data-name="Name" id="name" maxlength="256" name="name" placeholder="Enter your name" type="text">
                <label class="field-label" for="email">Email Address:</label>
                <input class="contact-field w-input" data-name="Email" id="email" maxlength="256" name="email" placeholder="Enter your email address" required="required" type="email">
                <label class="field-label" for="Address">Message</label>
                <textarea name="message" cols="45" rows="3" maxlength="100" placeholder="Your message here"></textarea>
                <input type="submit" value="Submit">
		
              </form>
       
            </div>
          </div>
		  
        </div>
      </div>
    </div>
	
		<footer class="footer-distributed">
		
			<div class="footer-left">
				<img src="images/logo.png" style="width: 100px; height: auto;">
				<p class="footer-company-name">Copyright 2016. All rights reserved.<br> Designed By <a href="https://nevinjojo.github.io/" style="display: inline-block; color: #ff0;">Nevin Jojo</a></p>
			</div>

			<div class="footer-center">
				<div>
					<img src="images/location.png" style="width: 32px;">
					<p>Duncan Street,<br> 
						Tawa,<br>
						Wellington 5028</p>
				</div>

				<div>
					<img src="images/phone.png" style="width: 32px;">
					<p>04-232 8184</p>
				</div>

				<div>
					<img src="images/mail.png" style="width: 32px;">
					<p><a href="mailto:secretary@tawacollege.school.nz">secretary@tawacollege.school.nz</a></p>
				</div>
			</div>

			<div class="footer-right">
				<p class="footer-company-about">
					<span>WEEKLY OFFICE HOURS</span>
					Monday – Friday: 8am – 4pm
				</p>
			</div>
		</footer>
  
</div>

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script type="text/javascript" src="js/webflow.js"></script>
  
</body>

</html>

<?php
  }
?>