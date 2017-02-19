<?php require_once("includes/session.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-15" />
</head>

<?php
// START FORM PROCESSING
if (isset($_POST['submit'])) { // Form has been submitted.
	$errors = array();

	// perform validations on the form data
	$username = trim(mysqli_real_escape_string($connection, $_POST['name']));
	$password = trim(mysqli_real_escape_string($connection, $_POST['password']));
	$email = trim(mysqli_real_escape_string($connection, $_POST['email']));
    $iterations = ['cost' => 15];
    $hashed_password = password_hash($password, PASSWORD_BCRYPT, $iterations);

	$query = "INSERT INTO `user` (name, password, email) VALUES ('{$username}', '{$hashed_password}', '{$email}')";
	$result = mysqli_query($connection, $query);
		if ($result) {
			$message = "User Created.";
		} else {
			$message = "User could not be created.";
			$message .= "<br />" . mysqli_error($connection);
		}
}

if (!empty($message)) {echo "<p>" . $message . "</p>";}
?>
<h2 style="text-align: center">Lav en ny bruger</h2>

<form action="" method="post" style="text-align: center">
navn:
<input type="text" name="name" maxlength="30" value="" /> <br />
password:
<input type="password" name="password" maxlength="30" value="" /> <br />
email:
<input type="email" name="email" maxlength="1000" value="" /> <br />
<input type="submit" name="submit" value="Create" />
</form>
    
    <a style="text-align: center" href="/login/login.php">Til login siden</a>

</body>
</html>
<?php
if (isset($connection)){mysqli_close($connection);}
?>
