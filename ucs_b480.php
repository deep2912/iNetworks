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
<title>iNetworks-Cisco UCS B480 M5 Blade</title>
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
	  <h1>Cisco UCS B480 M5 Blade</h1>
	  <img src="images/demo/ucs_b480.jpg" width="280" height="280" alt="">
	  <p>Specification List</p>

<table>
  <tr>
    <th>Form factor</th>
    <th>Full-width blade server mounts in a Cisco UCS 5100 Series Blade Server Chassis.</th>
  </tr>
  <tr>
    <td>Processors</td>
    <td>Four Intel® Xeon® Scalable processors</td>
  </tr>
  <tr>
    <td>Memory</td>
    <td>48 DDR4 DIMM slots: 16, 32, 64, and 128 GB up to 2666 MHz</td>
  </tr>
  <tr>
    <td>UCS Manager</td>
    <td>3.2(1) or above</td>
  </tr>
  <tr>
    <td>Cisco IMC</td>
    <td>3.1(2) or above</td>
  </tr>
  <tr>
    <td>Mezzanine slots</td>
    <td>
		<ul>
			<li>1 slot supports the Cisco UCS VIC 1340 adapter only</li>
			<li>2 mezzanine-card slots support Cisco adapters, Cisco UCS storage accelerators, and GPUs</li>
			<li>2 front mezzanine slots support GPUs</li>
		</ul>
	</td>
  </tr>
  <tr>
    <td>Storage controller</td>
    <td>
		<ul>
			<li>Diskless system (no drive bays or RAID controller)</li>
			<li>Cisco FlexStorage™ 12-Gbps SAS RAID controller with Hard-Disk-Drive (HDD) cage, providing up to 12-Gbps SAS connectivity</li>
			<li>Cisco FlexStorage 12-Gbps SAS RAID controller with 2-GB cache, Flash-Backed Write Cache (FBWC), and HDD cage, providing up to 12-Gbps SAS connectivity</li>
			<li>Cisco FlexStorage PCI Express (PCIe) Solid-State Disk (SSD) and pass through module with HDD cage</li>
		</ul>
	</td>
  </tr>
  <tr>
    <td>Other storage</td>
    <td>
		<ul>
			<li>Dual internal Cisco FlexFlash SD cards (32, 64, and 128 GB) for installing an operating system or hypervisor; the second SD card can be used to mirror the first</li>
			<li>Dual M.2 SATA SSD (240, 480, and 960 GB)</li>
		</ul>
	</td>
  </tr>  
</table>
      </section>
	  <p align="center"><a href="#">Buy now for 55000/-</a></p>
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
