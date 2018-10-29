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
<title>iNetworks-Nexus 9000</title>
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
        <li><a href="""about_us.php">About us</a></li>
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
	  <h1>Nexus 9000</h1>
	  <img src="images/demo/nexus_9000.png" width="280" height="280" alt="">
	  <p>Specification List</p>

<table>
  <tr>
    <th>Feature</th>
    <th>Specifications</th>
  </tr>
  <tr>
    <td>Cisco Nexus 92160YC-X Switch</td>
    <td>48 x 1/10/25-Gbps SFP+ ports and 6 x QSFP28 ports</td>
  </tr>
  <tr>
    <td>Ports</td>
    <td>48 x 10- and 25-Gbps SFP+ and 6 QSFP+ ports</td>
  </tr>
  <tr>
    <td>Telemetry support</td>
    <td>Yes</td>
  </tr>
  <tr>
    <td>CPU</td>
    <td>2 cores</td>
  </tr>
  <tr>
    <td>Safety</td>
    <td>
		<ul>
			<li>UL 60950-1 Second Edition</li>
			<li>CAN/CSA-C22.2 No. 60950-1 Second Edition</li>
			<li>EN 60950-1 Second Edition</li>
			<li>IEC 60950-1 Second Edition</li>
			<li>AS/NZS 60950-1</li>
		</ul>
	</td>
  </tr>
  <tr>
    <td>Access Control List (ACL) entries</td>
    <td>
		<ul>
			<li>Per slice of the forwarding engine:4,000 ingress</li>
			<li>2,000 egress Maximum: 8,000 ingress</li>
			<li>M4,000 egress Shipping: 7,164 ingress</li>
			<li>3,580 egress</li>
		</ul>
	</td>
  </tr>
  <tr>
    <td>EMC: Emissions</td>
    <td>
		<ul>
			<li>47CFR Part 15 (CFR 47) Class A</li>
			<li>AS/NZS CISPR22 Class A</li>
			<li>CISPR22 Class A</li>
			<li>EN55022 Class A</li>
			<li>ICES003 Class A</li>
			<li>VCCI Class A</li>
			<li>EN61000-3-2</li>
		</ul>
	</td>
  </tr>  
  <tr>
    <td>System memory</td>
    <td>16 GB</td>
  </tr>
  <tr>
    <td>Solid-State Disk (SSD) drive</td>
    <td>64 GB</td>
  </tr>
  <tr>
    <td>Input voltage (HVAC)</td>
    <td>200 to 277V</td>
  </tr>
  <tr>
    <td>Fans</td>
    <td>4</td>
  </tr>
</table>
      </section>
	  <br><br>
	 <center> <form method="post" action="cart.php?action=add&code=nexus_9000" target="_blank">
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
