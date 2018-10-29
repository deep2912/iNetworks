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
<title>iNetworks-Switches</title>
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
	  <p>Categories-> Switches</p>
        <ul>
          <li>
            <article class="clear">
              <figure><img src="images/demo/catalyst_9400.gif" width="180" height="150" alt="">
                <figcaption>
                  <h2>Catalyst 9400</h2>
                  <ul>
					<li>
						<p>Defense across the attack continuum</p>
						<p>IoT readiness</p>
						<p>Cloud readiness</p>
						<p>Foundational technology</p>
                  <footer class="more"><a href="catalyst_9400.php" >Buy now&raquo;</a></footer>
                </figcaption>
              </figure>
            </article>
          </li>
          <li>
            <article class="clear">
              <figure><img src="images/demo/catalyst_9500.jpg" alt="">
                <figcaption>
                  <h2>Catalyst 9500</h2>
                  <ul>
					<li>
						<p>Foundational technology</p>
						<p>Business architecture optimization services</p>
						<p>Enhanced cloud support</p>
						<p>Enhanced security and wireless options</p>
                  <footer class="more"><a href="catalyst_9500.php" >Buy now&raquo;</a></footer>
                </figcaption>
              </figure>
            </article>
          </li>
		  <li>
            <article class="clear">
              <figure><img src="images/demo/catalyst_3560.jpg" alt="">
                <figcaption>
                  <h2>Catalyst 3560 CX</h2>
                  <ul>
					<li>
						<p>Cisco Digital Network Architecture</p>
						<p>Small but powerful</p>
						<p>Connects IoT endpoints</p>
						<p>Includes advanced features</p>
                  <footer class="more"><a href="catalyst_3500.php" >Buy now&raquo;</a></footer>
                </figcaption>
              </figure>
            </article>
          </li>
		  <li>
            <article class="clear">
              <figure><img src="images/demo/nexus_9000.png" alt="">
                <figcaption>
                  <h2>Nexus 9000</h2>
                  <ul>
					<li>
						<p>All switches can operate in standalone mode.</p>
						<p>Support for ACI.</p>
						<p>Deep buffers for high frequency trading and high performance computing.</p>
						<p>Programmability for DevOps</p>
                  <footer class="more"><a href="nexus_9000.php" >Buy now&raquo;</a></footer>
                </figcaption>
              </figure>
            </article>
          </li>
        </ul>
      </section>
	  <p align="center">1&nbsp;&nbsp;&nbsp;<a href="switches_products 2.php" >2&raquo;</a></p>
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
