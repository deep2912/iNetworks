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
        <<li><a href="feedback.php">Testimonials</a></li>
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
              <figure><img src="images/demo/800m.jpg" width="180" height="150" alt="">
                <figcaption>
                  <h2>800M Sonic</h2>
                  <ul>
					<li>
						<p>Integrated security and application services</p>
						<p>Choice of wireless WAN services and providers</p>
						<p>High-availability multihoming and dual WAN ports</p>
						<p>Application hosting capability</p>
                  <footer class="more"><a href="800m_sonic">Buy now&raquo;</a></footer>
                </figcaption>
              </figure>
            </article>
          </li>
          <li>
            <article class="clear">
              <figure><img src="images/demo/320_star.png" alt="">
                <figcaption>
                  <h2>320 Star Series</h2>
                  <ul>
					<li>
						<p>Drastic reduction in power usage</p>
						<p>Ultra high data speeds of 2GB/s</p>
						<p>New cost effective technology</p>
						<p>Dedicated Soc with 1.2GHz speeds</p>
                  <footer class="more"><a href="320_star.php">Buy now&raquo;</a></footer>
                </figcaption>
              </figure>
            </article>
          </li>
        </ul>
      </section>
	  <p align="center"><a href="routers_products.php" >&laquo;1</a>&nbsp;&nbsp;&nbsp;2</p>
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
</php>
