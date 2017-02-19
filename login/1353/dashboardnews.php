<?php require_once("includes/session.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php confirm_logged_in(); ?>

<?php
include_once 'dbMySql.php';
$con = new DB_con();
// data insert code starts here.
if(isset($_GET['edit_id']))
{
 $sql=mysql_query("SELECT * FROM news WHERE id='1'");
 $result=mysql_fetch_array($sql);
}
// data update code starts here.
if(isset($_POST['btn-update']))
{
 $title = $_POST['title'];
 $description = $_POST['description'];
 $date = $_POST['date'];
 
 $id=1;
 $res=$con->update($id,$title,$description,$date);
 if($res)
 {
  ?>
  <script>
    alert('News updated');
    window.location='dashboardnews.php'
  </script>
  <?php
 }
 else
 {
  ?>
    <script>
        alert('Error');
        window.location='dashboardnews.php'
    </script>
  <?php
 }
}
// data update code ends here.

?>

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

		<h1 style="text-align: center; color: black">News section! Update this to keep our customers informed about upcoming products.</h1>
		
		<br />
        
            <div class="currentnews">
                <h3 style="text-align: center; color: black">Current news at the webpage</h3>

                <?php
                        $con=mysqli_connect("mysql17.unoeuro.com", "bareaender_dk0", "1Nygummiand", "bareaender_dk0_db");
                        // Check connection
                        if (mysqli_connect_errno())
                        {
                        echo "Failed to connect to MySQL: " . mysqli_connect_error();
                        }

                        $result = mysqli_query($con,"SELECT * FROM news");

                            echo "<table width='100%' height='50'>
                            <tr>
                            <th width='10%' height='20'>Title</th>
                            <th width='10%' height='20'>Description</th>
                            <th width='10%' height='20'>Date</th>
                            </tr>";


                            while($row = mysqli_fetch_array($result))
                            {
                            echo "<tr>";
                                echo "<td class='table-td'>";
                                    echo $row['title'];
                                    $formtitle=$row['title'];
                                echo "</td>";
                                echo "<td class='table-td'>";
                                    echo $row['description'];
                                    $formdescription=$row['description'];
                                echo "</td>";
                                echo "<td class='table-td'>";
                                    echo $row['date'];
                                    $formdate=$row['date'];
                                echo "</td>";
                             echo "</tr>";
                            }
                            echo "</table>";

                        mysqli_close($con);
                ?>
             </div>

                 <div id="updatenews">
                   <h1 style="text-align: center; color: black">Update news</h1> 
                    <form method="post">
                        <table align="center">
                            <tr>
                                <td><input type="text" name="title" placeholder="title" value="<?php if(isset($formtitle)) echo $formtitle ?>" /></td>
                                </tr>
                                <tr>
                                <td><input type="text" name="description" placeholder="description" value="<?php if(isset($formdescription)) echo $formdescription ?>"/></td>
                                </tr>
                                <tr>
                                <td><input type="int" name="date" placeholder="date" value="<?php if(isset($formdate)) echo $formdate ?>" /></td>
                                </tr>
                                <tr>
                                <td>
                            <button type="submit" name="btn-update"><strong>Update news</strong></button></td>
                            </tr>
                        </table>
                    </form>
                 </div>
        
            <br />
            <br />
            <br />
            <br />
	<!-- End Content -->
</div>
<!-- End Shell -->

<!-- Footer -->
<div id="footer">
</div>
<!-- End Footer -->
</body>
</html>