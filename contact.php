<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rental Home</title>
 <link rel="shortcut icon" href="favicon.svg" type="image/svg+xml">
 <link rel="stylesheet" href="style.css">
 <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>

<body>
<?php

include 'dbcon.php';

if(isset($_POST['submit'])) {
	$name = mysqli_real_escape_string($con, $_POST['name']);
	$contact = mysqli_real_escape_string($con, $_POST['contact']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
  $message = mysqli_real_escape_string($con, $_POST['message']);

    	

    		$insertquery = "insert into contact(name, message, email, contact) values('$name','$message','$email','$contact')";

    		$iquery = mysqli_query($con, $insertquery);

    		if($iquery){
	              ?>
                       <script>
       	                   alert("Your message is inserted Successful");
                       </script>

	                <?php
                  }else{

	                 ?>
                         <script>
                           	alert("Something went wrong");
                         </script>

	                  <?php
                  }



}


?>

  <header class="header" data-header>

    <div class="overlay" data-overlay></div>

    <div class="logo-top">
      <div class="box">

        <ul class="logo-top-list">

          <li>
            <a href="mailto:abode@gmail.com" class="logo-top-link">
              <ion-icon name="icon-mail"></ion-icon>

              <span>abode@gmail.com</span>
            </a>
          </li>

          <li>
            <a href="" class="logo-top-link">
              <ion-icon name="icon-location"></ion-icon>

              <address>403, sitapura, jaipur</address>
            </a>
          </li>

        </ul>

        <div class="wrapper">
          <a href="login.php" class="logo-top-btn">LogIn</a>
        </div>

      </div>
    </div>

   <!---div class="abode-logo">
      <div class="box">

        <a href="" class="logo" id="logo3">
          <img src="logo1.png" alt="abode logo">
        </a>-->

      </div>
   </div>

  </header>

  <div class="login container">
    <div class="login-container">
        <h2>Contact Us</h2>
        <p>Please fill the below form to contact us</p>
        <form action="" method="POST">
            <span>Enter your Name</span>
            <input type="text" name="name" id="name" placeholder="Your Name" required>
            <span>Contact</span>
            <input type="tel" name="contact" id="contact" placeholder="+01-0000000" required>
            <span>Email</span>
            <input type="email" name="email" id="email" placeholder="****@gmail.com" required>
            
            
            <span>Enter your Message</span>
            <textarea cols="40" rows="5" name="message" id="message" placeholder="Your message" required></textarea>
            <input type="submit" value="SignUp" name="submit" class="button">
            <a href="">Already have an account</a>
        </form>
        <a href="login.php" class="bitton">Login</a>
    </div>

    <div class="login-image">
        <img src="signup.jpg" alt="">
    </div>
  </div>


  <footer class="footer" id="contact">

    <div class="first-footer">
      <div class="box">

        <div class="brand">

         <ul class="contact-list">

            <li>
              <a href="" class="contact-link">
                <ion-icon name="icon-location"></ion-icon>

                <address>403, sitapura, jaipur</address>
              </a>
            </li>

            <li>
              <a href="tel:+0987654321" class="contact-link">
                <ion-icon name="call-icon"></ion-icon>

                <span>+91-1234567890</span>
              </a>
            </li>

            <li>
              <a href="mailto:abode@gmail.com" class="contact-link">
                <ion-icon name="icon-mail"></ion-icon>

                <span>abode@gmail.com</span>
              </a>
            </li>

          </ul>

          <ul class="social-list">

            <li>
              <a href="" class="social-link">
                <ion-icon name="facebook-icon"></ion-icon>
              </a>
            </li>

            <li>
              <a href="" class="social-link">
                <ion-icon name="twitter-icon"></ion-icon>
              </a>
            </li>

            <li>
              <a href="" class="social-link">
                <ion-icon name="instagram-icon"></ion-icon>
              </a>
            </li>

            <li>
              <a href="" class="social-link">
                <ion-icon name="pinterest-icon"></ion-icon>
              </a>
            </li>
          </ul>

        </div>

        <div class="second-footer-box">

          <ul class="list-footer">

            <li>
              <p class="list-footer-title">Company</p>
            </li>

            <li>
              <a href="" class="second-footer">AboutUs</a>
            </li>

            <li>
              <a href="" class="second-footer">Blogs</a>
            </li>

            <li>
              <a href="" class="second-footer">All Products</a>
            </li>

            <li>
              <a href="" class="second-footer">Our Location</a>
            </li>

            <li>
              <a href="" class="second-footer">QNA</a>
            </li>

            <li>
              <a href="" class="second-footer">ContactUs</a>
            </li>

          </ul>

          <ul class="list-footer">

            <li>
              <p class="list-footer-title">Services</p>
            </li>

            <li>
              <a href="" class="second-footer">Order tracking</a>
            </li>

            <li>
              <a href="" class="second-footer">Wish List</a>
            </li>

            <li>
              <a href="" class="second-footer">Login</a>
            </li>

            <li>
              <a href="" class="second-footer">My account</a>
            </li>

            <li>
              <a href="" class="second-footer">Terms & Conditions</a>
            </li>

            <li>
              <a href="" class="second-footer">Promotional Offers</a>
            </li>

          </ul>

          <ul class="list-footer">

            <li>
              <p class="list-footer-title">Customer-Care</p>
            </li>

            <li>
              <a href="" class="second-footer">Login</a>
            </li>

            <li>
              <a href="" class="second-footer">My account</a>
            </li>

            <li>
              <a href="" class="second-footer">WishList</a>
            </li>

            <li>
              <a href="" class="second-footer">Order tracking</a>
            </li>

            <li>
              <a href="" class="second-footer">QNA</a>
            </li>

            <li>
              <a href="" class="second-footer">ContactUs</a>
            </li>

          </ul>

        </div>

      </div>
    </div>

    <div class="main-footer">
      <div class="box">

        <p class="copyright">
          &copy; 2022 <a href="">abode homes</a>. All Rights Reserved
        </p>

      </div>
    </div>

  </footer>





  <!--JavaScript link that is written in script.js file-->
  <script src="script.js"></script>

  <!--ionicon link-->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>