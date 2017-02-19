<?php
include('login/includes/connection.php');
    $min = 1;
    $max = 600;
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `products` WHERE CONCAT(`ducks`, `category`, `prize`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);

}
elseif(isset($_POST['prizerange']))
{
    mysqli_real_escape_string($connection,$_POST['amount']);
    $values = str_replace(' ','',$_POST['amount']);
    $values = str_replace('$','',$values);
    $values = explode('-',$values);
    $min = $values[0];
    $max = $values[1];
	$query = 'select * from products where `prize` BETWEEN "'.$min.'" AND "'.$max.'"';
    $search_result = filterTable($query);
     
    }
else {
    $query = "SELECT * FROM `products`";
    $search_result = filterTable($query);
}
// slider funktion til at filter efter pris

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("mysql17.unoeuro.com", "bareaender_dk0", "1Nygummiand", "bareaender_dk0_db2");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}


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
    <meta property="og:url"                content="http://bareænder.dk/index.html" />
	<meta property="og:type"               content="article" />
	<meta property="og:title"              content="En verden af Bare Ænder" />
	<meta property="og:description"        content="Vi har brugt tid og kræfter på at finde de bedste ænder" />
	<meta property="og:image"              content="http://xn--barender-m0a.dk/images/rubber-duck.png" />
    <meta property="og:image:width"        content="1373px" />
    <meta property="og:image:height"       content="1410px" />


    <title>Bare &AElig;nder - Webshop</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- favorit icon -->
    <link rel="icon" type="image/png" href="/images/favicon-32x32.png" />
   
    
    <!-- Custom CSS -->
    <link href="css/heroic-features.css" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />

  <!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/js/jquery-1.8.0.min.js"></script> 
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script type="text/javascript" src="/js/kurv.js"></script>
  
  
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
        <style>
        table, th, td {
            margin-top: 20px;
            margin-left: auto;
            border: 1px solid black;
        }
        th {
            background-color: #4CAF50;
        }
        td {
            border: thin;
        }
    </style>

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
                <a class="navbar-brand" href="index.php">Bare&AElig;nder</a>
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


    <!-- Page Content -->
    <div class="container"><br><br><br><br>
    	<div class="filtercontainer">
            <div class="form-group">
        <form action="produktvisning.php" method="post">
    <input style="margin: 40 px auto 0 0" class="form-control" type="text" name="valueToSearch" placeholder="Look for a duck">
			<br>
    <input type="submit" class="btn btn-default" name="search" value="Search / reset"><br><br>
			</div>
			</form>
			<h1>Eller</h1>
	<br>
	<form action="" method="post" id="products">
<div style="margin-left:0px">
    <label for="amount">Pris mellem:</label>
    <input type="text" id="amount" name="amount" style="border:0; color:black; font-weight:bold;" readonly>
    <br><br>
    <div id="slider-range" style="width:80%;"></div>
    <br><br>
    <input type="submit" name="prizerange" class="btn btn-default" value=" Show products " />
    <br><br>
    <?php echo $HTML; ?>
</div>
</form>

<script type="text/javascript">
$(function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 1,
      max: 200,
      values: [ <?php echo $min; ?>, <?php echo $max; ?> ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "DKK" + $( "#slider-range" ).slider( "values", 0 ) +
      " - DKK" + $( "#slider-range" ).slider( "values", 1 ) );
  });
</script>
			</div>

		<div class="produktcontainer">	
            <div class="row text-center">
              <?php while($row = mysqli_fetch_array($search_result)):?>
               <div class=col-md-3 col-sm-6 hero-feature>
               <div class="thumbnail">
                   <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/<?php echo $row['url'];?>" frameborder="0" allowfullscreen></iframe>
					</div>
                    <div class="caption">
                        <h3><?php echo $row['ducks'];?></h3>
						<p>Kategori: <?php echo $row['category'];?></p>
                        <p>DKK: <?php echo $row['prize'];?></p>
                        <div class="btn-group">
                            <button type="button" data-id="<?= $row['id'] ?>" class="btn btn-primary btn-sm buy-now-btn" href="#">TILFØJ KURV</button>
                            <a type="button" class="btn btn-info btn-sm" href="produkt.php?name=<?php echo $row['url'];?>">SE MERE</a>
                        </div>
                        <p id="confirm-<?=  $row['id'] ?>">
                        </p>
                    </div>
                </div>
            </div>
                      <?php endwhile;?>
    	           </div>
    		  	</div>
    			</div>
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
</footer>
</html>