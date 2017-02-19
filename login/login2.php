<?php
	session_start();
	require_once("includes/connection.php");
	require_once("includes/session.php");
	require_once("includes/functions.php");
?>
<?php
	if(logged_in()) {
		redirect_to("/login/dashboard/dashboardindex.php");
	}
?>
<?php
	// START FORM PROCESSING
	if (isset($_POST['submit'])) { // Form has been submitted.
		$username = trim(mysqli_real_escape_string($connection, $_POST['name']));
		$password = trim(mysqli_real_escape_string($connection,$_POST['password']));


		$query = "SELECT * FROM user WHERE name = '" . $username . "'";
		$result = mysqli_query($connection, $query);
			if (mysqli_num_rows($result) == 1) {
				
				// username/password authenticated
				// and only 1 match
				$found_user = mysqli_fetch_array($result);
                if(password_verify($password, $found_user['password'])){
				    $_SESSION['user_id'] = $found_user['ID'];
				    $_SESSION['name'] = $found_user['name'];
				    redirect_to("/login/dashboard/dashboardindex.php");
			} else {
				// username/password combo was not found in the database
				$message = "Username/password combination incorrect.<br />
					Please make sure your caps lock key is off and try again.";
			}}
	} else { // Form has not been submitted.
		if (isset($_GET['logout']) && $_GET['logout'] == 1) {
			$message = "You are now logged out.";
		} 
	}
?>

<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BAR' ÆNDER WEBSHOP - Cliff, Rasmus og Sonny</title>

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/heroic-features.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>


<?php if(!empty($message)) {echo "<p>" . $message . "</p>";} ?>

<h1 style="text-align: center; background-color: black; color: white">login to proceed</h1>
<h3 style="text-align: center;"><a style="color: black" href="/index.php">Index</a></h3>
<form action="" method="post" style="text-align: center">
navn:
<input type="text" name="name" maxlength="30" value="" /> <br />
password:
<input type="password" name="password" maxlength="30" value="" />
<input type="submit" name="submit" value="Login" />
</form>

</body>
</html>
<?php
if (isset($connection)){mysqli_close($connection);}
?>

