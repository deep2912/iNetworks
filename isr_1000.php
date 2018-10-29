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
<title>iNetworks-ISR 1000 Series</title>
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
	  <h1>ISR 1000 Series</h1>
	  <img src="images/demo/isr_1000.jpg" width="280" height="280" alt="">
	  <p>Specification List</p>

<table>
  <tr>
    <th>Feature</th>
    <th>Specifications</th>
  </tr>
  <tr>
    <td>Cisco IOS Software</td>
    <td>Advanced IP Features Set (Default)</td>
  </tr>
  <tr>
    <td>IP and IP services</td>
    <td>
		<ul>
			<li>Routing Information Protocol Versions 1 and 2 (RIPv1 and RIPv2)</li>
			<li>Dynamic Host Configuration Protocol (DHCP) server, relay, and client</li>
			<li>Access control Lists (ACLs)</li>
			<li>IPv4 and IPv6 Multicast</li>
			<li>Open Shortest Path First (OSPF)</li>
			<li>Border Gateway Protocol (BGP)</li>
			<li>Enhanced Interior Gateway Routing Protocol (EIGRP)</li>
		</ul>
	</td>
  </tr>
  <tr>
    <td>Security features</td>
    <td>
		<ul>
			<li>Secure Sockets Layer (SSL) VPN for secure remote access</li>
			<li>Hardware-accelerated DES, 3DES, AES 128, AES 192, and AES 256</li>
			<li>NAT transparency</li>
			<li>IPsec over IPv6</li>
			<li>Cisco IOS Firewall</li>
		</ul>
	</td>
  </tr>
  <tr>
    <td>IPv6</td>
    <td>
		<ul>
			<li>IPv6 addressing architecture</li>
			<li>IPv6 name resolution</li>
			<li>IPv6 translation: Transport packets between IPv6-only and IPv4-only endpoints (NAT-Protocol Translation)</li>
			<li>Internet Control Message Protocol Version 6 (ICMPv6)</li>
			<li>OSPFv3</li>
			<li>BGP4+</li>
			<li>IPv6 Neighbor Discovery</li>
		</ul>
	</td>
  </tr>
  <tr>
    <td>Standard 802.11 a/g/n access point</td>
    <td>Optional on Cisco 890 Series models</td>
  </tr>
  <tr>
    <td>Wireless specifications</td>
    <td>2.4 and 5 GHz</td>
  </tr>
</table>
      </section>
	 <br><br>
	 <center> <form method="post" action="cart.php?action=add&code=isr_1000" target="_blank">
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
