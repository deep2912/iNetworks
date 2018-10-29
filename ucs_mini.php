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
<title>iNetworks-Cisco UCS Mini</title>
<meta charset="iso-8859-1">
<link rel="stylesheet" href="styles/layout.css" type="text/css">
<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 130%;
		}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 4px;
		}
}
</style>
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
        <li><a href="login.php" target="_blank">Login</a></li>
        <li><a href="router.php">Products</a></li>
        <li><a href="categories.php" target="_blank">Categories</a></li>
        <li><a href="""about_us.php">About us</a></li>
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
	  <h1>Cisco UCS Mini</h1>
	  <img src="images/demo/ucs_mini.jpg" width="280" height="280" alt="">
	  <p>Specification List</p>

<table>
  <tr>
    <th>Electrical power specifications	</th>
    <th>100–120V/200–240V</th>
  </tr>
  <tr>
    <td>Minimum UCS Manager version</td>
    <td>3.01(a)</td>
  </tr>
  <tr>
    <td>Recommended UCS Manager version	</td>
    <td>3.1</td>
  </tr>
  <tr>
    <td>Connectivity</td>
    <td>
		<ul>
			<li>Standard</li>
			<li>4 x Small Form Factor Pluggable Plus (SFP+) unified ports for 1 Gbps, 10 Gbps, and 2/4/8 Gbps Fibre Channel</li>
			<li>QSFP+</li>
		</ul>
	</td>
  </tr>  
</table>
      </section>
	  <p align="center"><a href="#">Buy now for 37000/-</a></p>
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
