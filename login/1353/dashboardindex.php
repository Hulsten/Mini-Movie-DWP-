<?php require_once("includes/session.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php confirm_logged_in(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
		<h1 style="margin: 100px 0 0 40px; color: black">To-do List</h6>
		<ul style="color: black">
			<li>Create more ducks</li>
			<li>Sell more ducks</li>
			<li>Use the force</li>
			<li>Create offers for investors</li>
			<li>I'm so sorry i made you read this</li>
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