<!DOCTYPE html>
<html lang="da">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BAR' ÆNDER WEBSHOP - Cliff, Rasmus</title>
    <!-- favorit icon -->
    <link rel="icon" type="image/png" href="/images/favicon-32x32.png" />

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/heroic-features.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- Google captia -->
    <script type="text/javascript">
      var onloadCallback = function() {
        grecaptcha.render('html_element', {
          'sitekey' : '6LcFKAwUAAAAAC4iTGqO5aB3Yw9R9pswDigcWBTb'
        });
      };
    </script>
   <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-89035645-1', 'auto');
  ga('send', 'pageview');

</script>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">BAREÆNDER</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="produktvisning.php">PRODUCTS</a>
                     </li>
                     <li>
                        <a href="kontakt.php">CONTACT US</a>
                     </li>
                     <li>
                        <a href="/login/login.php">LOGIN</a>
                     </li>
					           <li>
                        <a href="kurv.php">BASKET</a>
                     </li>
					
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Page Content -->
    <div class="container">
        <div class="holder">
            <h2 style="text-align: center; margin-top: 50px;">Want a special product? Contact us!</h2>
            <?php if(isset($_GET['CaptchaPass'])){ ?>
            <div class="FormElement">Message sent</div>
            <?php } ?>
            <?php if(isset($_GET['CaptchaFail'])){ ?>
            <div class="FormElement">Captcha failed, try again!</div>
            <?php } ?>
        </div>
<div class="row">
  <div class="col-md-4">
  	
  </div>
  <div class="col-md-4">
<form name="contactform" method="post" action="contactform/send_form_email.php">

 <div class="form-group">
  <label for="first_name">First Name *</label>
  <input  type="text" class="form-control" name="first_name" maxlength="50" size="30">
 </div>

 <div class="form-group">
  <label for="last_name">Last Name *</label>
  <input  type="text" class="form-control" name="last_name" maxlength="50" size="30">
 </div>
 
 <div class="form-group">
  <label for="email">Email Address *</label>
  <input  type="text" class="form-control" name="email" maxlength="80" size="30">
 </div>
 
 <div class="form-group">
  <label for="telephone">Telephone Number</label>
  <input  type="text" class="form-control" name="telephone" maxlength="30" size="30">
 </div>
 
 <div class="form-group">
  <label for="comments">Comments *</label>
  <textarea  name="comments" class="form-control" maxlength="1000" cols="25" rows="6"></textarea>
 </div>
    
        <div class="FormElement">
            <div class="g-recaptcha" data-sitekey="6LcFKAwUAAAAAC4iTGqO5aB3Yw9R9pswDigcWBTb"></div>
        </div>
      <div class="FormElement">
            <input name="ContactButton" type="submit" class="Button" id="ContactButton" value="Contact us"> 
      </div>
</form>
</div>
<div class="col-md-4">
  	
  </div>
    </div>
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <div class="spacer"></div>
</body>


 <!-- Footer -->
<footer>
 <div class="row">
   <div class="col-lg-12">
    <div class="container">
	 <div class="box1">
          <p style="text-align: center">www.bareænder.dk ©2016<br>
					+45 50 71 10 50<br>
					shop@bareænder.dk</p>
    </div>
	</div>
  </div>
  </div>
</footer>
</html>
