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
<title>iNetworks-Cisco UCS C240 M5 Rack Server</title>
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
	  <h1>Cisco UCS C240 M5 Rack Server</h1>
	  <img src="images/demo/ucs_240.jpg" width="280" height="280" alt="">
	  <p>Specification List</p>

<table>
  <tr>
    <th>Feature</th>
    <th>Specifications</th>
  </tr>
  <tr>
    <td>Form factor</td>
    <td>2RU rack server</td>
  </tr>
  <tr>
    <td>Processors</td>
    <td>Intel® Xeon® Scalable processors (1 or 2)</td>
  </tr>
  <tr>
    <td>Memory</td>
    <td>24 DDR4 DIMM slots: 8, 16, 32, 64, and 128 GB and up to 2666 MHz</td>
  </tr>
  <tr>
    <td>PCIe expansion</td>
    <td>6 PCIe 3.0 slots plus 1 dedicated 12-Gbps RAID controller slot and 1 dedicated mLOM slot</td>
  </tr>
  <tr>
    <td>Internal storage</td>
    <td>
		<ul>
			<li>Up to 26 x 2.5-inch SAS and SATA HDDs and SSDs and up to 4 NVMe PCIe drives</li>
			<li>Up to 10 x 2.5-inch NVMe PCIe and 16 SAS and SATA HDDs and SSDs</li>
			<li>Up to 12 x 3.5-inch SAS and SATA HDDs and SSDs, and 2 rear 2.5-inch HDDs and SSDs and up to 4 NVMe PCIe drives</li>
		</ul>
	</td>
  </tr>
  <tr>
    <td>Other storage</td>
    <td>
		<ul>
			<li>Dual internal Cisco FlexFlash SD cards (32, 64, and 128 GB) for installing an operating system or hypervisor</li>
			<li>Support for RAID 0 mirroring between SD cards</li>
			<li>Dedicated Baseboard Management Controller (BMC) MicroSD card (32 GB) for server utilities</li>
			<li>Dual M.2 SATA SSD or NVMe</li>
		</ul>
	</td>
  </tr>
  <tr>
    <td>Management</td>
    <td>
		<ul>
			<li>Cisco UCS Central Software</li>
			<li>Cisco UCS Manager</li>>
			<li>Cisco UCS Performance Manager</li>
			<li>Cisco UCS Director</li>
			<li>Cisco Intersight</li>
		</ul>
	</td>
  </tr>  
  <tr>
    <td>Rack options</td>
    <td>Cisco ball-bearing rail kit with optional reversible cable management farm</td>
  </tr>
</table>
      </section>
	  <p align="center"><a href="#">Buy now for 53000/-</a></p>
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
