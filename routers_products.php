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
<title>iNetworks-Routers</title>
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
        <li><a href="login.php">Login</a></li>
        <li><a href="router.php">Products</a></li>
        <li><a href="categories.php">Categories</a></li>
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
	  <div id="content">
      <section id="posts" class="last clear">
	  <p>Categories-> Routers</p>
        <ul>
          <li>
            <article class="clear">
              <figure><img src="images/demo/isr_800.jpg" width="180" height="150" alt="">
                <figcaption>
                  <h2>ISR 800 Series</h2>
                  <ul>
					<li>
						<p>Ready for Cisco Intelligent WAN</p>
						<p>Run multiple applications simultaneously</p>
						<p>High-performance, high-application experience</p>
						<p>Support for 802.11a/b/g/n and 4G LTE</p>
                  <footer class="more"><a href="isr_800.php" >Buy now&raquo;</a></footer>
                </figcaption>
              </figure>
            </article>
          </li>
          <li>
            <article class="clear">
              <figure><img src="images/demo/isr_1000.jpg" alt="">
                <figcaption>
                  <h2>ISR 1000 Series</h2>
                  <ul>
					<li>
						<p>Connectivity for up to 20 users</p>
						<p>WAN redundancy with 3G and 4G options</p>
						<p>Excellent for PBX and IP telephony voice support</p>
						<p>Enhanced security and wireless options</p>
                  <footer class="more"><a href="isr_1000.php" >Buy now&raquo;</a></footer>
                </figcaption>
              </figure>
            </article>
          </li>
		  <li>
            <article class="clear">
              <figure><img src="images/demo/isr_4000.jpg" alt="">
                <figcaption>
                  <h2>ISR 4000 Series</h2>
                  <ul>
					<li>
						<p>Desktop form factor and fanless design</p>
						<p>WAN connectivity with VADSL or Ethernet</p>
						<p>Excellent for PBX and IP telephony voice support</p>
						<p>Wi-Fi for integrated WAN or Wi-Fi at home</p>
                  <footer class="more"><a href="isr_4000.php">Buy now&raquo;</a></footer>
                </figcaption>
              </figure>
            </article>
          </li>
		  <li>
            <article class="clear">
              <figure><img src="images/demo/isr_5000.jpg" alt="">
                <figcaption>
                  <h2>ISR 5000 Series</h2>
                  <ul>
					<li>
						<p>Hardened and nonhardened form factors</p>
						<p>Lightweight, compact, low power consumption</p>
						<p>Dual-SIM option for always-on connectivity</p>
						<p>For machine-to-machine use cases</p>
                  <footer class="more"><a href="isr_5000.php">Buy now&raquo;</a></footer>
                </figcaption>
              </figure>
            </article>
          </li>
        </ul>
      </section>
	  <p align="center">1&nbsp;&nbsp;&nbsp;<a href="routers_products_2.php" >2&raquo;</a></p>
    </div>
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
