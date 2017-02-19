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
<?php

$host = "mysql17.unoeuro.com";
$user = "bareaender_dk0";
$password ="1Nygummiand";
$database = "bareaender_dk0_db";

$id = "";
$duck = "";
$category = "";
$prize = "";
$tags = "";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// connect to mysql database
try{
    $connect = mysqli_connect($host, $user, $password, $database);
} catch (mysqli_sql_exception $ex) {
    echo 'Error';
}

// get values from the form
function getPosts()
{
    $posts = array();
    $posts[0] = $_POST['id'];
    $posts[1] = $_POST['duck'];
    $posts[2] = $_POST['category'];
    $posts[3] = $_POST['prize'];
    $posts[4] = $_POST['tags'];
    return $posts;
}


// Søg efter produkt

if(isset($_POST['search']))
{
    $data = getPosts();

    $search_Query = "SELECT * FROM products WHERE id = $data[0]";

    $search_Result = mysqli_query($connect, $search_Query);

    if($search_Result)
    {
        if(mysqli_num_rows($search_Result))
        {
            while($row = mysqli_fetch_array($search_Result))
            {
                $id = $row['id'];
                $ducks = $row['ducks'];
                $category = $row['category'];
                $prize = $row['prize'];
                $tags = $row['tags'];
            }
        }else{
            echo 'No Data For This Id';
        }
    }else{
        echo 'Result Error';
    }
}


// Indsæt nyt produkt
if(isset($_POST['insert']))
{
    $data = getPosts();
    $insert_Query = "INSERT INTO `products`(`ducks`, `category`, `prize`, `tags`) VALUES ('$data[1]','$data[2]',$data[3],'$data[4]')";
    try{
        $insert_Result = mysqli_query($connect, $insert_Query);

        if (isset($_POST['Submit'])) {
            if ($_POST['ducks'] == "" || $_POST['category'] == "" || $_POST['prize'] == "" || $_POST['tags'] == "") {
                echo "error: all fields are required";
            } 
        }
        
        if($insert_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo 'Data Inserted';
            }else{
                echo 'Data Not Inserted';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Insert '.$ex->getMessage();
    }
}

// Slet produkt
if(isset($_POST['delete']))
{
    $data = getPosts();
    $delete_Query = "DELETE FROM `products` WHERE `id` = $data[0]";
    try{
        $delete_Result = mysqli_query($connect, $delete_Query);

        if($delete_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo 'Data Deleted';
            }else{
                echo 'Data Not Deleted';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Delete '.$ex->getMessage();
    }
}

// Opdater produkt
if(isset($_POST['update']))
{
    $data = getPosts();
    $update_Query = "UPDATE `products` SET `ducks`='$data[1]',`category`='$data[2]',`prize`='$data[3]', `tags`='$data[4]' WHERE `id` = $data[0]";
    try{
        $update_Result = mysqli_query($connect, $update_Query);

        if($update_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo 'Data Updated';
            }else{
                echo 'Data Not Updated';
            }
        }
     } catch (Exception $ex) {
        echo 'Error Update '.$ex->getMessage();
    }
}



?>


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
		     <li><a href="dashboardcrud.php"><span><img src="">CRUD</span></a></li>
            <li><a href="dashboardindex.php"<span>Index</span></a></li>
            <li><a href="seeusers.php"<span>Current Users</span></a></li>
            <li><a href="dashboardnews.php"><span><img src="">Update news</span></a></li>
		</ul>
	</div>
    
    
	<!-- End Navigation -->
	
	<!-- Content -->
	<div id="content">

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

		<h1 style="text-align: center; color: black" class="orange">Insert, delete or search for a duck</h6>		
		<h3 style="text-align: center; color: black">Find the duck by ID - delete or edit it</h1>
            <form style="text-align: center; color: black" action="" method="post">
                   Search by ID : <input type="number" name="id" placeholder="" value="<?php echo $id;?>"><br><br>
                   Duck : <input type="text" name="duck" placeholder="" value="<?php echo $ducks;?>"><br><br>
                   Category : <input type="text" name="category" placeholder="" value="<?php echo $category;?>"><br><br>
                   Prize :  <input type="number" name="prize" placeholder="" value="<?php echo $prize;?>"><br><br>
                   Tags : <input type="text" name="tags" placeholder="" value="<?php echo $tags;?>"><br><br>
                    <div>
                <!-- Input For Add Values To Database-->
                <input type="submit" name="insert" value="Add">

                <!-- Input For Edit Values -->
                <input type="submit" name="update" value="Update">

                <!-- Input For Clear Values -->
                <input type="submit" name="delete" value="Delete">

                <!-- Input For Find Values With The given ID -->
                <input type="submit" name="search" value="Find">
               </div>
            </form>
	
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
