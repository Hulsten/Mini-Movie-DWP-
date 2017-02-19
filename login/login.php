
<?php
$fb = new Facebook\Facebook([
  'app_id' => '1754200921464036', // Replace {app-id} with your app id
  'app_secret' => '0f5b6f89a576d9754bc7fdf719f5600e',
  'default_graph_version' => 'v2.2',
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('http://film.xn--barender-m0a.dk/login/fb-callback.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
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
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1754200921464036',
      xfbml      : true,
      version    : 'v2.8'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
	
	FB.getLoginStatus(function(response) {
  if (response.status === 'connected') {
    // the user is logged in and has authenticated your
    // app, and response.authResponse supplies
    // the user's ID, a valid access token, a signed
    // request, and the time the access token 
    // and signed request each expire
    var uid = response.authResponse.userID;
    var accessToken = response.authResponse.accessToken;
  } else if (response.status === 'not_authorized') {
    // the user is logged in to Facebook, 
    // but has not authenticated your app
  } else {
    // the user isn't logged in to Facebook.
  }
 });
</script>

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

