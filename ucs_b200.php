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
<title>iNetworks-Cisco UCS B200 M5 Blade</title>
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
	  <h1>iNetworks-Cisco UCS B200 M5 Blade</h1>
	  <img src="images/demo/ucs_b200.jpg" width="280" height="280" alt="">
	  <p>Specification List</p>

<table>
  <tr>
    <th>Feature</th>
    <th>Specifications</th>
  </tr>
  <tr>
    <td>Processors</td>
    <td>Up to 2 Intel Xeon Scalable processors (1 or 2)</td>
  </tr>
  <tr>
    <td>Memory</td>
    <td>24 DDR4 DIMM slots: 16, 32, 64, and 128 GB at up to 2666 MHz</td>
  </tr>
  <tr>
    <td>Blade chassis</td>
    <td>Cisco UCS 5000 Blade Server Chassis</td>
  </tr>
  <tr>
    <td>Internal storage</td>
    <td>
		<ul>
			<li>HDD: 10,000 or 15,000 RPM with up to 1.8 TB per drive</li>
			<li>SSD: Enterprise Performance and Value SSDs with up to 7.6 TB per drive</li>
			<li>NVMe: Up to 7.7 TB per drive</li>
			<li>2 internal SD cards (32-, 64-, or 128-GB with boot-mirroring or up to 2 M.2 SATA drives (240 or 960 GB) supported via LSI software RAID</li>
		</ul>
	</td>
  </tr>
    <tr>
    <td>Mezzanine adapter </td>
    <td>
		<ul>
			<li>Cisco UCS VIC 1380 mezzanine card</li>
			<li>Cisco port expander mezzanine card</li>
			<li>Cisco nVIDIA P6 GPU rear mezzanine card</li>
			<li>Cisco blade NVMe storage card</li>
		</ul>
	</td>
  </tr>
  <tr>
    <td>Temperature: Operating</td>
    <td>50° to 95°F (10° to 35°C)</td>
  </tr>
  <tr>
    <td>Humidity: Operating</td>
    <td>5 to 93% noncondensing</td>
  </tr>
</table>
      </section>
	  <p align="center"><a href="#">Buy now for 45000/-</a></p>
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
