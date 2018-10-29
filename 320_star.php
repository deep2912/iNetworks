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
<title>iNetworks-320 Star Series</title>
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
		
	input[type=submit] {
    width: 50%;
    background-color: #FF5733;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
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
        <li><a href="login.php">Login</a></li>
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
	  <div id="content">
      <section id="posts" class="last clear">
	  <h1>320 Star Series</h1>
	  <img src="images/demo/320_star.png" width="280" height="280" alt="">
	  <p>Specification List</p>

<table>
  <tr>
    <th>Feature</th>
    <th>Specifications</th>
  </tr>
  <tr>
    <td>Dimensions (W x D x H)</td>
    <td>10.2 cm x 12.79 cm x 3 cm (4 in. x 5 in. x 1.2 in.)</td>
  </tr>
  <tr>
    <td>Typical Weight Fully Configured</td>
    <td>0.85 lbs (0.4 kg)</td>
  </tr>
  <tr>
    <td>Spread Spectrum Technology</td>
    <td>FHSS</td>
  </tr>
  <tr>
    <td>Transmitter Output</td>
    <td>30 dBm</td>
  </tr>
  <tr>
    <td>Antenna Connector</td>
    <td>QMA, female</td>
  </tr>
  <tr>
    <td>Frequency Support</td>
    <td>
		<ul>
			<li>North America- ISM: 902-928 MHz</li>
			<li>Australia: 915-928 MHz</li>
			<li>Brazil: 902-907.5, 915-928 MHz</li>
		</ul>
	</td>
  </tr>
    <tr>
    <td>PHY/MAC Layer</td>
    <td>
		<ul>
			<li>IEEE 802.3 Ethernet 10/100 Mbps</li>
			<li>RS232/RS485 Serial</li>
			<li>IEEE 802.15.4g WPAN</li>
			<li>IEEE 802.15.4e WPAN MAC extensions</li>
		</ul>
	</td>
  </tr>
  <tr>
</table>
      </section><br><br>
	 <center> <form method="post" action="cart.php?action=add&code=320_star_series" target="_blank">
	 <!-- <p align="center"><a href="#">Buy now for 2500/-</a></p> -->
	 <div><input style="height:30px;font-size:14pt;"type="text" name="quantity" value="1" size="2" />&nbsp;&nbsp;<input type="submit" value="Add to cart" class="btnAddAction"  /></div>
			</form>
			</center>
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
