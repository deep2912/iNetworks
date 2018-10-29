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
<title>iNetworks-Catalyst 9400</title>
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
	  <h1>Catalyst 9400</h1>
	  <img src="images/demo/catalyst_9400.gif" width="280" height="280" alt="">
	  <p>Specification List</p>

<table>
  <tr>
    <th>Feature</th>
    <th>Specifications</th>
  </tr>
  <tr>
    <td>10/100/1000BASE-T Gigabit (RJ‑45) ports</td>
    <td>240</td>
  </tr>
  <tr>
    <td>Output power (N+N) redundant mode (PoE + data)</td>
    <td>
		<ul>
			<li>(3190W x N)/2 + 10W (3.3V standby) for 230VAC range</li>
			<li>(1560W x N)/2 + 10W (3.3V standby) for 115VAC range</li>
			<li>(2102W x N)/2 + 10W (3.3V standby) for 230VAC range</li>
			<li>(940W x N)/2 + 10W (3.3V standby) for 115VAC range</li>
			<li>*N = number of power supplies (N>1)</li>
		</ul>
	</td>
  </tr>
  <tr>
    <td>Dimensions (H x W x D)</td>
    <td>17.41 x 17.30 x 16.30 in. (44.22 x 43.94 x 41.40 cm)</td>
  </tr>
  <tr>
    <td>Safety</td>
    <td>
		<ul>
			<li>47 CFR Part 15</li>
			<li>CISPR22 Class A</li>
			<li>KN 32 Class A</li>
			<li>EN 300 386 V1.6.1</li>
			<li>EN 55022 Class A</li>
			<li>EN 55032 Class A</li>
			<li>EN61000-3-3</li>
		</ul>
	</td>
  </tr>
  <tr>
    <td>Total number of slots</td>
    <td>7</td>
  </tr>
  <tr>
    <td>Supervisor engine redundancy</td>
    <td>Yes</td>
  </tr>
</table>
      </section>
	 <br><br>
	 <center> <form method="post" action="cart.php?action=add&code=catalyst_9400" target="_blank">
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
