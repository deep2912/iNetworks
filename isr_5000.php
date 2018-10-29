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
<title>iNetworks-ISR 5000 Series</title>
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
        <li><a href="login.php" >Login</a></li>
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
	  <h1>ISR 5000 Series</h1>
	  <img src="images/demo/isr_5000.jpg" width="280" height="280" alt="">
	  <p>Specification List</p>

<table>
  <tr>
    <th>Feature</th>
    <th>Specifications</th>
  </tr>
  <tr>
    <td>Performance</td>
    <td>1 RU Desktop</td>
  </tr>
  <tr>
    <td>Integrated WAN ports</td>
    <td>
		<ul>
			<li>GE</li>
			<li>SGP</li>
			<li>BGP</li>
			<li>EIGRP</li>
		</ul>
	</td>
  </tr>
  <tr>
    <td>Integrated Interface</td>
    <td>40 ports of 1/10 Gigabit Ethernet (GE) and 4 ports of 100 GE (NCS 5001)</td>
  </tr>
  <tr>
    <td>Performance</td>
    <td>Up to 1.2Tbps throughput with 1.4 Bpps</td>
  </tr>
  <tr>
    <td>Network virtualization (nV)</td>
    <td>Cisco nV technology</td>
  </tr>
  <tr>
    <td>Management ports</td>
    <td>Provides easy access to system console</td>
  </tr>
    <tr>
    <td>External USB port</td>
    <td>Helps simplify image and file management</td>
  </tr>
    <tr>
    <td>Buffer</td>
    <td>512 MB</td>
  </tr>
    <tr>
    <td>Storage</td>
    <td>32 GB eUSB</td>
  </tr>
    <tr>
    <td>Operating temperature (nominal)</td>
    <td>0 – 40C</td>
  </tr>
  <tr>
    <td>Physical specifications</td>
    <td>
		<ul>
			<li>Height: 1.72 in (4.3688 cm)</li>
			<li>Width: 17.44 in (44.2976 cm)</li>
			<li>Depth: 19.3 in (49.022 cm)</li>
			<li>Weight of chassis: 20.5 lb (9.29kg)</li>
		</ul>
	</td>
  </tr>
    <tr>
    <td>EMC standards</td>
    <td>
		<ul>
			<li>47CFR Part 15 (CFR 47) Class A </li>
			<li>AS/NZS CISPR22 Class A </li>
			<li>CISPR22 Class A</li>
			<li>EN55022 Class A</li>
			<li>ICES003 Class A</li>
			<li>VCCI Class A</li>
			<li>KN22 Class A</li>
			<li>CNS13438 Class A</li>
		</ul>
	</td>
  </tr>
  <tr>
</table>
      </section><br><br>
	 <center> <form method="post" action="cart.php?action=add&code=isr_5000" target="_blank">
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
