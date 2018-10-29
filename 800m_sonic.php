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
<title>iNetworks-800M Sonic</title>
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
	  <h1>800M Sonic</h1>
	  <img src="images/demo/800m.jpg" width="280" height="280" alt="">
	  <p>Specification List</p>

<table>
  <tr>
    <th>Feature</th>
    <th>Specifications</th>
  </tr>
  <tr>
    <td>Cellular connectivity</td>
    <td>4G LTE, 3.7G, 3.5G, 3G, or 2G cellular WAN link</td>
  </tr>
  <tr>
    <td>Wi-Fi</td>
    <td>
		<ul>
			<li>Supported only on the 829 model</li>
			<li>Dual radio 802.11n, concurrent 2.4 GHz and 5.0 GHz with embedded 2x2 MIMO</li>
			<li>Up to 300-Mbps data rate per radio</li>
			<li>Autonomous and universal modes</li>
		</ul>
	</td>
  </tr>
  <tr>
    <td>WAN interfaces</td>
    <td>1 Small Form-Factor Pluggable (SFP) port (only on 829 model)</td>
  </tr>
  <tr>
    <td>Dual active LTE WAN interfaces</td>
    <td>Supported only on 829-2LTE model</td>
  </tr>
  <tr>
    <td>Serial interfaces</td>
    <td>2</td>
  </tr>
  <tr>
    <td>Fog computing</td>
    <td>An open, extensible environment for application execution at the edge of the network for operational efficiency (only on 809 and 829 models)</td>
  </tr>
  <tr>
    <td>LAN interfaces</td>
    <td>
		<ul>
			<li>2 x 10/100BASE-T Ethernet ports on 807 model</li>
			<li>2 x 10/100/1000BASE-T Ethernet ports on 809 model</li>
			<li>4 x 10/100/1000BASE-T Ethernet ports with shared 30W PoE/PoE+ (IEEE 802.3at) on 829 model</li>
		</ul>
	</td>
  </tr>
    <tr>
    <td>Security</td>
    <td>
		<ul>
			<li>Access control</li>
			<li>Data confidentiality and data privacy</li>
			<li>Threat detection and mitigation</li>
			<li>Device and platform integrity</li>
		</ul>
	</td>
  </tr>
  <tr>
</table>
      </section><br><br>
	 <center> <form method="post" action="cart.php?action=add&code=800m_sonic" target="_blank">
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
