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
<title>iNetworks-Categories</title>
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
        <li><a href="#">Login</a></li>
        <li><a href="router.php">Products</a></li>
        <li><a href="categories.php">Categories</a></li>
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
    <!-- main content -->
    <div id="homepage">
      <!-- services area -->
	  
	  <div id="content">
      <section id="posts" class="last clear">
		<ul>
          <li>
            <article class="clear">
              <figure><img src="images/demo/router_categories.jpg" width="300" height="250" alt="">
                <figcaption>
                  <h2>ROUTERS</h2>
                  <p>Our routers are constantly evolving. Constantly adapting. Constantly protecting. In your data center, core, or edge. This is the new era in networking. The Network. Intuitive.</p>
                  <footer class="more"><a href="routers_products.php" >Explore now &raquo;</a></footer>
                </figcaption>
              </figure>
            </article>
          </li>
		  <li>
            <article class="clear">
              <figure><img src="images/demo/switches_categories.jpg" width="180" height="150" alt="">
                <figcaption>
                  <h2>SWITCHES</h2>
                  <p>Quickly identify the right switch for your needs—whether you’re acquiring a new switch or upgrading an old one.</p>
                  <footer class="more"><a href="switches_products.php">Explore now &raquo;</a></footer>
                </figcaption>
              </figure>
            </article>
          </li>
		  <li>
            <article class="clear">
              <figure><img src="images/demo/servers_categories.jpg" alt="">
                <figcaption>
                  <h2>SERVERS</h2>
                  <p>Our technology is built to meet today's demands while accommodating future innovation.</p>
                  <footer class="more"><a href="#">Explore now &raquo;</a></footer>
                </figcaption>
              </figure>
            </article>
          </li>
		  <li>
            <article class="clear">
              <figure><img src="images/demo/wireless_icon.png" alt="">
                <figcaption>
                  <h2>WIRELESS</h2>
                  <p>Today wireless is the primary way to access the digital world, so it's essential to get the right network to help your business grow.</p>
                  <footer class="more"><a href="#">Explore now &raquo;</a></footer>
                </figcaption>
              </figure>
            </article>
          </li>
      </section>
    </div>
  </div>
</div>
<!-- Footer -->
<div class="wrapper row3">
</div>
</body>
</html>
