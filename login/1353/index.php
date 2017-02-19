<?php
session_start(); 
?>
<!doctype html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
    <title>Login with Facebook</title>
<link href="http://www.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet"> 
 </head>
  <body>
  <?php if ($_SESSION['FBID']): ?>      <!--  After user login  -->
<div class="container">
<div class="hero-unit">
 <div class="col-xs-6">
  <h1>Hello <?php echo $_SESSION['FULLNAME']; ?></h1>
  <p>Welcome to "facebook login"</p>
  </div>
  <div class="col-xs-6">
  
 </div>
	</div>
</div>
   <html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>DASHBOARD</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
<!-- Shell -->
<div id="shell">
	
	<!-- Header -->
	<div id="header">
		<h1 style="color: white">Dashboard</h1>
		<div class="right">
			<p>Welcome <u><?php if(isset($_SESSION['name'])) echo $_SESSION['name']; ?></u></p>
			<p class="small-nav"><a href="#"></a> / <a href="#"></a> / <a href="logout.php">See you later! (Logout)</a></p>
		</div>
	</div>
	<!-- End Header -->
	
	<!-- Navigation -->
	<div style="text-align: center" id="navigation">
		<ul>
		    <li><a href="dashboardcrud.php"><span><img src="">CRUD</span></a></li>
            <li><a href="dashboardindex.php"<span>Index</span></a></li>
            <li><a href="seeusers.php"<span>Current Users</span></a></li>
            <li><a href="dashboardnews.php"><span><img src="">Update news</span></a></li>
		</ul>
	</div>
    
    
	<!-- End Navigation -->
	
	<!-- Content -->
	<div id="content">

		<h2 style="text-align: center; color: black">Welcome to the dashboard</h2>
		
		<br />
		<h1 style="text-align: center; color: black">Dashboard preview</h1>
        <p style="text-align: center; font-size: 12px; color: black">“Hvilken farve er en postkasse inden i?
																	 – Infrarød…”</p>
		
		<br />
		<h1 style="margin: 100px 0 0 40px; color: black">Facebook Data</h6>
		<ul class="nav nav-list">
<li class="nav-header">Image</li>
	<li><img src="https://graph.facebook.com/<?php echo $_SESSION['FBID']; ?>/picture"></li>
<li class="nav-header">Facebook ID</li>
<li><?php echo  $_SESSION['FBID']; ?></li>
<li class="nav-header">Facebook fullname</li>
<li><?php echo $_SESSION['FULLNAME']; ?></li>
<li class="nav-header">Facebook Email</li>
<li><?php echo $_SESSION['EMAIL']; ?></li>
<div><a href="logout.php">Logout</a></div>
	  </ul>
	</div>
	
	<!-- End Content -->
</div>
<!-- End Shell -->

<!-- Footer -->
<div id="footer">
</div>
<!-- End Footer -->
</body>
</html>
    <?php else: ?>     <!-- Before login --> 
<div class="container">
<h1>Login with Facebook</h1>
           Not Connected
<div>
      <a href="fbconfig.php">Login with Facebook</a></div>
	 <div> <a href="http://www.krizna.com/general/login-with-facebook-using-php/"  title="Login with facebook">View Post</a>
	  </div>
      </div>
    <?php endif ?>
  </body>
</html>
