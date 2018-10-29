<!DOCTYPE html>
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<html lang="en" dir="ltr">
<head>
<title>iNetworks-About Us</title>
<meta charset="iso-8859-1">
<link rel="stylesheet" href="styles/layout.css" type="text/css">
<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->
</head>
<body>
<div class="content">
  	<!-- notification message -->
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

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
<div class="wrapper row1">
  <header id="header" class="clear">
    <div id="hgroup">
      <h1><a href="index.php">iNetworks</a></h1>
      <h2>Networking. Now simplified.</h2>
    </div>
    <nav>
      <ul>
        <li><a href="login.php" >Login</a></li>
        <li><a href="router.php">Products</a></li>
        <li><a href="categories.php" >Categories</a></li>
        <li><a href="about_us.php">About us</a></li>
       <li><a href="feedback.php">Testimonials</a></li>
		<li class="last"><a href="cart.php"><img src="images/demo/cart_36x36_2.png" alt=""></a><li>
      </ul>
    </nav>
  </header>
</div>
<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear">
    <!-- main content -->
    <div id="homepage">
      <!-- services area -->
      <section id="services" class="clear">
      </section>
	  <p>iNetworks is a company providing networking and connectivity solutions. Driven by the force of providing that much-needed leap for our country to advance in the networking sector, we aim to come up with quality devices that are reliable, easy to use and most of all, affordable. We have a range of products in our line up, each serving a different purpose than the other, and each supplying the various features that you truly need for networking requirements. Feel free to choose your desired devices from our assorted range of products. iNetworks is a name you can always place your trust on.</p>
	  <p>Meet our team members</p>
	  <ul>
		<li>Raj Patole - CEO</li>
		<li>Vishwajeet Parasar - CTO</li>
		<li>Saivinayak Pantula - CFO</li>
		<li>Arun Anthony - CIO</li>
		<li>Anshu Singh - Head of Marketing</li>
		<li>Pranali Adivarekar - Design and Production head</li>
	  </ul>
	  <p>Locate us at</p>
	  <div id="googleMap" style="width:100%;height:400px;"></div>
		<script>
			function myMap() {
				var mapProp= {center:new google.maps.LatLng(19.023747,72.856099),zoom:17.3,};
				var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);}
		</script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASVqykx56M7zyy2cDO3V0Gw5NeppaSemk&callback=myMap"></script>
		      <p>We would love to hear from you. All queries and compliments are welcome alike.</p>
			  <p>Write us at<a href="gmail.com"> inetworkshelp@gmail.com</a></p>
			  <p>Talk to us on <a href="#">+91 8169546381</a></p>
      <section id="latest">
        <article>
          <figure>
            <ul class="clear">
            </ul>
          </figure>
        </article>
      </section>
    </div>
	
    <div id="content">
      <section id="posts" class="last clear">
            <article class="clear">
            </article>
      </section>
    </div>
  </div>
</div>
<!-- Footer -->
<div class="wrapper row3">
</div>
</body>
</html>
