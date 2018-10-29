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
	  <p>Categories-> Swiches</p>
        <ul>
          <li>
            <article class="clear">
              <figure><img src="images/demo/nexus_7000.jpg" width="180" height="150" alt="">
                <figcaption>
                  <h2>Nexus 7000</h2>
                  <ul>
					<li>
						<p>Redundant supervisors</p>
						<p>Full feature set in a highly resilient modular platform.</p>
						<p>Virtualization, efficient power and cooling, cloud scale with automation, high density, and performance</p>
						<p>Networking technologies can be incrementally and cost-effectively adopted.</p>
                  <footer class="more"><a href="nexus_7000.php" >Buy now&raquo;</a></footer>
                </figcaption>
              </figure>
            </article>
          </li>
          <li>
            <article class="clear">
              <figure><img src="images/demo/catalyst_2960.jpg" alt="">
                <figcaption>
                  <h2>Catalyst 2960-X</h2>
                  <ul>
					<li>
						<p>Simple</p>
						<p>Smart</p>
						<p>Effective</p>
						<p>Reliable</p>
                  <footer class="more"><a href="catalyst_2960.php">Buy now&raquo;</a></footer>
                </figcaption>
              </figure>
            </article>
          </li>
        </ul>
      </section>
	  <p align="center"><a href="switches_products.php" >&laquo;1</a>&nbsp;&nbsp;&nbsp;2</p>
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
