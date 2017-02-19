<?php
    session_start();
    require_once "login/includes/connection.php";
    $subtotal = 0;
?>

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
   <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/jquery-1.8.0.min.js"></script> 
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script type="text/javascript" src="/js/kurv.js"></script>
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
                        <a href="#">BASKET</a>
                    </li>
					
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Page Content -->
    <div class="container">
        <table class="table table-bordered">
 								 <thead>
  								  <tr>
     							  <th class="col-md-2">#</th>
   							      <th>Produkt navn</th>
     							  <th>Antal</th>
     							  <th>Pris</th>
     							  <th class="col-md-1">Fjern fra kurv</th>
 							      </tr>
 								 </thead>
            <?php
                if(isset($_SESSION["kurv"])){
                    for($i = 0; $i < sizeof($_SESSION["kurv"]); $i++){
                        $query = "SELECT * FROM `products` WHERE id='" . $_SESSION["kurv"][$i] . "' LIMIT 1";
                        $search_result = mysqli_query($connection, $query);
                        while($row = mysqli_fetch_assoc($search_result)){
                            $subtotal = $subtotal + $row["prize"];
                            ?>
                               
									<tbody>
 								  
  								  <tr data-id="<?= $row['id'] ?>">
								     
 								     <th><img src="images/<?= $row['url'] ?>.jpg" style="height: 60px;"></th>
  								    <td><?= $row['ducks'] ?></td>
  								    <td>1</td>
    							    <td><?= $row['prize'] ?> kr.</td>
    							    <td><div class="kurv-element-delete">
                                        <p data-id="<?= $row['id'] ?>">X</p>
                                    </div></td>
    							    
  								  </tr>
                            <?php
                        }
                    }
                }

            ?>
        
        
    </div>
   								 <tr>
								     
 								     <th>Total beløb i kr.</th>
  								    <td></td>
  								    <td></td>
    							    <td><?= $subtotal?></td>
    							    <td></td>
    							     
  								  </tr>
    </tbody>
    </table>
    <div class="row">
  	<div class="col-xs-6">
		<a type="button" class="btn btn-default" value="Forsæt køb" style="float: left;" href="produktvisning.php">Forsæt køb</a>
  	</div>
  	<div class="col-xs-6">
		<a type="button" class="btn btn-primary" value="Afslut køb" style="float: right;" href="checkout.php">Afslut køb</a>
  	</div>
</div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <div class="spacer"></div>
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
  </div>
</footer>
</html>
