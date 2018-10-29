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
<title>iNetworks-Servers</title>
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
      <h1><a href="index.html">iNetworks</a></h1>
      <h2>Networking. Now simplified.</h2>
    </div>
    <nav>
      <ul>
        <li><a href="login.php" target="_blank">Login</a></li>
        <li><a href="router.php">Products</a></li>
        <li><a href="categories.php" target="_blank">Categories</a></li>
        <li><a href="about_us.php" target="_blank">About us</a></li>
        <li class="last"><a href="feedback.php">Testimonials</a></li>
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
	  <p>Categories-> Servers</p>
        <ul>
          <li>
            <article class="clear">
              <figure><img src="images/demo/ucs_b200.jpg" width="180" height="150" alt="">
                <figcaption>
                  <h2>Cisco UCS B200 M5 Blade</h2>
                  <ul>
					<li>
						<p>For remote sites or data centers</p>
						<p>Market-leading performance, versatility, and density</p>
						<p>Without compromise for workloads</p>
						<p>Quickly deploy stateless physical and virtual workloads</p>
                  <footer class="more"><a href="ucs_b200.php" target="_blank">Buy now&raquo;</a></footer>
                </figcaption>
              </figure>
            </article>
          </li>
          <li>
            <article class="clear">
              <figure><img src="images/demo/ucs_b480.jpg" alt="">
                <figcaption>
                  <h2>Cisco UCS B480 M5 Blade</h2>
                  <ul>
					<li>
						<p>Scalable Architecture</p>
						<p>Lower TCO</p>
						<p>No need to power, cool, manage, and purchase excess switches</p>
						<p>Single, highly available Cisco Unified Computing System</p>
                  <footer class="more"><a href="ucs_b480.php" target="_blank">Buy now&raquo;</a></footer>
                </figcaption>
              </figure>
            </article>
          </li>
		  <li>
            <article class="clear">
              <figure><img src="images/demo/ucs_mini.jpg" alt="">
                <figcaption>
                  <h2>Cisco UCS Mini</h2>
                  <ul>
					<li>
						<p>Cisco UCS Central</p>
						<p>Cisco Intersight</p>
						<p>Optional Solution Components</p>
						<p>Cisco UCS C-Series Rack Support</p>
                  <footer class="more"><a href="ucs_mini.php" target="_blank">Buy now&raquo;</a></footer>
                </figcaption>
              </figure>
            </article>
          </li>
		  <li>
            <article class="clear">
              <figure><img src="images/demo/ucs_240.jpg" alt="">
                <figcaption>
                  <h2>Cisco UCS C240 M5 Rack Server</h2>
                  <ul>
					<li>
						<p>2-socket, 2-Rack-Unit (2RU)</p>
						<p>Standalone Servers</p>
						<p>Cisco UCS Managed Environment</p>
						<p>Increase business agility.</p>
                  <footer class="more"><a href="ucs_240.php" target="_blank">Buy now&raquo;</a></footer>
                </figcaption>
              </figure>
            </article>
          </li>
        </ul>
      </section>
	  <p align="center">1&nbsp;&nbsp;&nbsp;</p>
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
