<?php
function get_header() { ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Neat - A Lightweight HTML5 Temlpate Built with Bourbon Neat.</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- google font -->
		<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet'>
		<!-- fontawesome icons -->
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<!-- main stylesheet - compiled from Sass partials -->
		<link rel="stylesheet" href="css/main.css?nc=<?php echo time(); ?>">

	</head>
<?php    
}
?>

<?php
function get_container_open() {
?>
	<body>

		<!-- ///// NAVIGATION HEADER ///// -->

		<header id="navigation" class="navigation headroom">
			<div class="navigation-wrapper">
		    	
		    	<!-- logo - you can put yours here -->
		    	<a href="index.php" class="logo"><i class="fa fa-phone"></i>&emsp;<span class="vp-desktop get-d4d" style="font-size:0.42em;line-height:0.64em;font-weight:bold">Get Dialing for Dollars</span></a>
		    	
				<!-- mobile menu toggle -->
		    	<a href="" class="navigation-menu-button" id="js-mobile-menu">MENU</a>
		    
		    	<!-- navigation menu -->
		    	<div class="nav">
		      		<ul id="navigation-menu">
		      			<li class="nav-link active"><a href="index.php">Home</a></li>
						 <li class="nav-link more"><a href="about.php">About</a>
				          <ul class="submenu">
				            <li><a href="outer-circle.php">Outer Circle</a></li>
				            <li><a href="schedule.php">Schedule</a></li>
				            <!--li class="more"><a href="#">Item with submenu</a>
				              <ul class="submenu">
				                <li><a href="#">Sub-submenu Item</a></li>
				                <li><a href="#">Another Item</a></li>
				              </ul>
				            </li>
				            <li class="more"><a href="#">Another submenu</a>
				              <ul class="submenu">
				                <li><a href="#">Sub-submenu</a></li>
				                <li><a href="#">An Item</a></li>
				              </ul>
				            </li-->
				          </ul>
				        </li>
				        <li class="nav-link"><a href="contact.php">Contact</a></li>
				        <li class="nav-link"><a href="register.php">Register</a></li>


		      		</ul>
		    	</div>
		    
		  	</div>
		</header>
<?php    
}
?>

<?php
function get_container_close() {
?>
		<!-- ///// FOOTER ///// -->

		<footer class="footer">
			<div class="container">

				<p class="copyright">Copyright &copy; 2014 <a href="index.html">Tracy Monteforte</a> - All&nbsp;Rights&nbsp;Reserved.</p>

				<ul class="social">
					<li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
					<li class="instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
				</ul>

			</div>
		</footer>
			

		
		<!-- ///// JAVASCRIPT INCLUDES ///// -->

		<!-- jquery version 1.11.1 -->
		<script src="js/jquery-1.11.1.min.js"></script>

		<!-- javascript plugins -->
		<script src="js/jquery.stellar.min.js"></script>
   		<script src="js/headroom.min.js"></script>
   		<script src="js/jquery.headroom.js"></script>
   		<script src="js/owl.carousel.js"></script>
   		<script src="js/jquery.fitvids.js"></script>
   		<script src="js/jquery.flexslider.js"></script>

		<!-- inits and custom js code -->
		<script src="js/scripts.js"></script>


<?php    
}
?>

<?php
function get_contact_form() { ?>
    
				<div class="contact-form">
					
					<!-- contact form -->
					<form id="contact-form" novalidate>

						<div class="form">
							<div class="form-left">
				     
						    	<p><label for="name">Name</label>
						    	<input type="text" name="name" id="name" placeholder="Name..."></p>

						    	<p><label for="email">Email</label>
						    	<input type="email" name="email" id="email" placeholder="E-mail..."></p>

						        <p><label for="phone">Phone</label>
						        <input type="tel" name="phone" id="phone" placeholder="Phone number..."></p>

						    </div>

							<div class="form-right">

						    	<p><label for="message">Message</label>
						    	<textarea name="message" id="message" rows="10" placeholder="Please include the best time and method we can reach you along with how we can best serve you."></textarea></p>

						    </div>
						</div>

						<div id="contact-error" style="display:none"></div>

						<p class="submit"><input class="button" type="submit" value="Submit"></p>

				    </form><!-- end form -->
					
				</div>
    
<?php
}
?>

