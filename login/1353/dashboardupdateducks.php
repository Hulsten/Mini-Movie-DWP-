<?php require_once("includes/session.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php confirm_logged_in(); ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="ISO-8859-1">
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
		      <li><a href="dashboardcrud.php"><span><img src="">Create, Read, delete</span></a></li>
            <li><a href="dashboardupdateducks.php"><span><img src="">Update Ducks</span></a></li>
            <li><a href="dashboardindex.php"<span>Index</span></a></li>
            <li><a href="seeusers.php"<span>Current Users</span></a></li>
            <li><a href="dashboardnews.php"><span><img src="">Update news</span></a></li>
		</ul>
	</div>
    
    
	<!-- End Navigation -->
	
	<!-- Content -->
	<div id="content">
        <h2 style="text-align: center; color: black">Overview of the ducks</h2>

         <?php
                $con=mysqli_connect("mysql17.unoeuro.com", "bareaender_dk0", "1Nygummiand", "bareaender_dk0_db");
                // Check connection
                if (mysqli_connect_errno())
                {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }

                $result = mysqli_query($con,"SELECT * FROM products");

                    echo "<table width='100%' height='50'>
                    <tr>
                    <th width='10%' height='20'>Id</th>
                    <th width='10%' height='20'>Ducks</th>
                    <th width='10%' height='20'>Category</th>
                    <th width='10%' height='20'>Prize</th>
                    <th width='10%' height='20'>Tags</th>
                    </tr>";


                    while($row = mysqli_fetch_array($result))
                    {
                    echo "<tr>";
                        echo "<td class='table-td'>";
                            echo $row['id'];
                            $formtitle=$row['id'];
                        echo "</td>";
                        echo "<td class='table-td'>";
                            echo $row['ducks'];
                            $formtitle=$row['ducks'];
                        echo "</td>";
                        echo "<td class='table-td'>";
                            echo $row['category'];
                            $formdescription=$row['category'];
                        echo "</td>";
                        echo "<td class='table-td'>";
                            echo $row['prize'];
                            $formtitle=$row['prize'];
                        echo "</td>";
                        echo "<td class='table-td'>";
                            echo $row['tags'];
                            $formtitle=$row['tags'];
                        echo "</td>";
                     echo "</tr>";
                    }
                    echo "</table>";

                mysqli_close($con);
         ?>

                <br>
	
	<!-- End Content -->
</div>
<!-- End Shell -->

<!-- Footer -->
<div id="footer">
</div>
<!-- End Footer -->
</body>
</html>