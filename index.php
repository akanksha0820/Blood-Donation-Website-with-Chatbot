<?php

// Starting the session, to use and 
// store data in session variable 
session_start(); 

// If the session variable is empty, this 
// means the user is yet to login 
// User will be sent to 'login.php' page 
// to allow the user to login 
if (!isset($_SESSION['username'])) { 
	$_SESSION['msg'] = "You have to log in first"; 
	header('location: login.php'); 
} 

// Logout button will destroy the session, and 
// will unset the session variables 
// User will be headed to 'login.php' 
// after loggin out 
if (isset($_GET['logout'])) { 
	session_destroy(); 
	unset($_SESSION['username']); 
	header("location: login.php"); 
} 
?> 
<!DOCTYPE html> 
<html> 
<head> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blood Donation</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="style1.css"> 
</head> 
<body>

<nav class="navbar">
    <div class="brand-title">Blood Bank</div>
    <a href="#" class="toggle-button">
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
    </a>
    <div class="navbar-links">
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="eligibility.html">Eligibility</a></li>
        <li><a href="register.html">Register</a></li>
        <li><a href="search.html">Request</a></li>
        <li><a href="faq.html">FAQ</a></li>
        <li><a href="ContactUs.html">Contact Us</a></li>
        <li><a href="chatbot.html">Chatbot</a></li>
        
      </ul>
    </div>
  </nav> <br><br> 
	
	<div class="content" > 

		<!-- Creating notification when the 
				user logs in -->
		
		<!-- Accessible only to the users that 
				have logged in already -->
		<?php if (isset($_SESSION['success'])) : ?> 
			<div class="error success" > 
				<h3> 
					<?php
						echo $_SESSION['success']; 
						unset($_SESSION['success']); 
					?> 
				</h3> 
			</div> 
		<?php endif ?> 

		<!-- information of the user logged in -->
		<!-- welcome message for the logged in user -->
		<?php if (isset($_SESSION['username'])) : ?> 
			<p> 
				Welcome 
				<strong> 
					<?php echo $_SESSION['username']; ?> 
				</strong> 
			</p> 
			<p> 
				<a href="index.php?logout='1'" style="color: red;"> 
					Click here to Logout 
				</a> 
			</p> 
		<?php endif ?> 
	</div> 

	
      <br> <br>
    <marquee scrollamount=10>
    <h3><b><i>DONORS PLEASE CHECK THE ELIGIBILITY CRITERIA BEFORE DONATING BLOOD</i></b></h3>
    </marquee>
  <div class="first-banner">
    <div class="w3-container">
      <div class="w3-row">
          <div class="w3-half">
              <div class="right-alloc-half-content">
                <h3 class="main-quote">By donating blood,
                  <br>you can save lives!</h3>
                  <p class="main-quote-para">Health is a human right; everyone in the world should have access to<br> safe blood transfusions, when and where they need them.</p>
                  <a href="register.html" class="main-quote-btn">Register now</a>     
              </div>
          </div>
              <div class="w3-half">
                <img src="images/side-big-2.jpg" alt="" class="side-big">
              </div>
      </div>
    </div>
  </div>    

<div class="second-banner">
        <div class="w3-container">
            <div class="w3-row">
                <div class="w3-half w3-hide-small">
                    <img src="images/side-big-1.jpg" alt="" class="side-big">
                </div>
                <div class="w3-half">
                    <div class="w3-container">
                        <div class="right-alloc-half-content">
                            <h3 class="main-quote">Need blood?
                                <br> here's our directory</h3>
                            <p class="main-quote-para">Health is a human right; everyone in the world should have access to safe blood transfusions,
                                when and where they need them.</p>
                            <a href="search.html" class="main-quote-btn">Search now
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w3-half w3-hide-medium w3-hide-large">
                    <img src="images/side-big-1.jpg" alt="" class="side-big">
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        Developed for Health and Support
    </div>


<script type="text/javascript">
const toggleButton = document.getElementsByClassName('toggle-button')[0]
const navbarLinks = document.getElementsByClassName('navbar-links')[0]
toggleButton.addEventListener('click', () => {
  navbarLinks.classList.toggle('active')
})	
</script>
</body> 
</html> 
