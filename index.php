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
<title>iNetworks-Your one stop for all your networking needs</title>
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
        <li><a href="about_us.php" >About us</a></li>
        <li><a href="feedback.php">Testimonials</a></li>
		<li class="last"><a href="cart.php"><img src="images/demo/cart_36x36_2.png" alt=""></a><li>
      </ul>
    </nav>
  </header>
</div>
<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear">
    <!-- Slider -->
    <section id="slider"><a href="#"><img src="images/demo/960x360.jpg" alt=""></a></section>
    <!-- main content -->
    <div id="homepage">
      <!-- services area -->
      <section id="services" class="clear">
        <article class="one_quarter">
          <figure><img src="images/demo/router_icon.png" width="32" height="32" alt=""></figure>
          <strong>Routers</strong>
          <p>Our routers are constantly evolving. Constantly adapting. Constantly protecting. In your data center, core, or edge. This is the new era in networking. The Network. Intuitive.</p>
          <p class="more"><a href="routers_products.php" >Know More &raquo;</a></p>
        </article>
        <article class="one_quarter">
          <figure><img src="images/demo/switch_icon.png" width="32" height="32" alt=""></figure>
          <strong>Switches</strong>
          <p>Quickly identify the right switch for your needs—whether you’re acquiring a new switch or upgrading an old one</p>
          <p class="more"><a href="#">Read More &raquo;</a></p>
        </article>
        <article class="one_quarter">
          <figure><img src="images/demo/server_icon.png" width="32" height="32" alt=""></figure>
          <strong>Servers</strong>
          <p>Our technology is built to meet today's demands while accommodating future innovation.</p>
          <p class="more"><a href="#">Read More &raquo;</a></p>
        </article>
        <article class="one_quarter lastbox">
          <figure><img src="images/demo/wireless_icon.png" width="32" height="32" alt=""></figure>
          <strong>Wireless</strong>
          <p>Today wireless is the primary way to access the digital world, so it's essential to get the right network to help your business grow.</p>
          <p class="more"><a href="#">Read More &raquo;</a></p>
        </article>
      </section>
      <section id="latest">
        <article>
          <figure>
            <ul class="clear">
              <li class="one_third"><img src="images/demo/290x180_1.jpg" width="290" height="180" alt=""></li>
              <li class="one_third"><img src="images/demo/290x180_2.png" width="290" height="180" alt=""></li>
              <li class="one_third lastbox"><img src="images/demo/290x180_3.jpg" width="290" height="180" alt=""></li>
            </ul>
            <figcaption><a href="categories.php" >View All Our Products Here &raquo;</a></figcaption>
          </figure>
        </article>
      </section>
    </div>
    <div id="content">
      <section id="posts" class="last clear">
        <ul>
          <li>
            <article class="clear">
              <figure><img src="images/demo/customer_support.jpg" width="180" height="150" alt="">
                <figcaption>
                  <h2>Customer Support</h2>
                  <p>Get 24x7 technical support on all our products site wide. Contact us and our support team will be more than happy to help you.</p>
                  <footer class="more"><a href="#">Read More &raquo;</a></footer>
                </figcaption>
              </figure>
            </article>
          </li>
          <li class="last">
            <article class="clear">
              <figure><img src="images/demo/fast_delivery.jpg" alt="">
                <figcaption>
                  <h2>Fast Delivery</h2>
                  <p>Avoid long waiting times and get super fast delivery without any surcharges.</p>
                  <footer class="more"><a href="#">Read More &raquo;</a></footer>
                </figcaption>
              </figure>
            </article>
          </li>
        </ul>
      </section>
    </div>
    <!-- right column -->
    <aside id="right_column">
      <h2 class="title">Preferred Products</h2>
      <nav>
        <ul>
          <li><a href="#">UCS E-M23</a></li>
          <li><a href="isr_800.php">ISR 800</a></li>
          <li><a href="isr_1000.php">ISR 1000</a></li>
          <li><a href="#">ISR 4000</a></li>
          <li><a href="#">NCS 5000</a></li>
          <li><a href="#">NCS 5500</a></li>
          <li><a href="#">ASR 1000</a></li>
          <li><a href="#">Catalyst 9300</a></li>
          <li><a href="#">Catalyst 9400</a></li>
          <li class="last"><a href="#">Catalyst 9500</a></li>
        </ul>
      </nav>
      <!-- /nav -->
    </aside>
    <!-- / content body -->
  </div>
</div>
<!-- Footer -->
<div class="wrapper row3">
</div>
</body>
</html>
