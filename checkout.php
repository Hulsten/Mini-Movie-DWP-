<!-- php til at udregne antal sekunder der er tilbage af i dag -->
<?php
    require_once "login/includes/connection.php";
$sql ="CREATE TABLE `bareaender_dk0_db`.`Ordre` (
`id` INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`produkt` VARCHAR(30) NOT NULL , 
`antal` TINYINT NOT NULL , 
`kunde` VARCHAR NOT NULL , 
)";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Facebook Markup -->
    <meta property="og:url"                content="http://bareænder.dk/index.php" />
	<meta property="og:type"               content="article" />
	<meta property="og:title"              content="En verden af Bare Ænder" />
	<meta property="og:description"        content="Vi har brugt tid og kræfter på at finde de bedste ænder" />
	<meta property="og:image"              content="http://xn--barender-m0a.dk/images/rubber-duck.png" />
    <meta property="og:image:width"        content="1373px" />
    <meta property="og:image:height"       content="1410px" />


    <title>BAR' ÆNDER WEBSHOP - Cliff, Rasmus</title>
	<!-- favorit icon -->
    <link rel="icon" type="image/png" href="/images/favicon-32x32.png" />
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/heroic-features.css" rel="stylesheet">

   <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Script til countdown daily offer -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/jquery.plugin.min.js"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                        <a href="kontakt.php">CONTACTS US</a>
                    </li>
				
					 <li>
                        <a href="login/login.php">LOGIN</a>
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
	
         
			<div class="container-fluid">
				<h1>Indtast leveringsoplysninger, og gå videre til betaling</h1>
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
  <label for="Adress">Adresse *</label>
  <input  type="text" class="form-control" name="Adress" maxlength="50" size="30">
 </div>
 
 <form class="form-inline">
 <div class="form-group">
  <label for="Postnummer">Postnummer *</label>
  <input  type="text" class="form-control" name="Postnummer" >
 </div>
 <div class="form-group">
  <label for="Postnummer">By *</label>
  <input  type="text" class="form-control" name="By">
 </div>
	</form>

 
 <div class="form-group">
  <label for="email">Email Address *</label>
  <input  type="text" class="form-control" name="email" maxlength="80" size="30">
 </div>
 
 <div class="form-group">
  <label for="telephone">Telephone Number</label>
  <input  type="text" class="form-control" name="telephone" maxlength="30" size="30">
 </div>
<div class="row">
  	<div class="col-xs-6 col-sm-4">
  		<input type="submit" class="btn btn-default" value="Tilbage">
  	</div>
  <div class="col-xs-6 col-sm-4"></div>
  <!-- Optional: clear the XS cols if their content doesn't match in height -->
  <div class="clearfix visible-xs-block"></div>
  	<div class="col-xs-6 col-sm-4">
  		<input type="submit" class="btn btn-primary" value="Næste" style="float: right;">
  	</div>
</div>

<div class="col-md-4">
  	
  </div>
		     
			</div>

	</div>    
     </div>

    <!-- Page Content -->
    <div class="container">

<br>
    <br>       
<br>
   <br>
   <br>
    </div>      
 
    
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
</footer>
</html>
