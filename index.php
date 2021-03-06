<!-- php til at udregne antal sekunder der er tilbage af i dag -->
 <?php
    date_default_timezone_set('Europe/Copenhagen');
    $today = strtotime('today 23:59');
    $tomorrow = strtotime('tomorrow 23:59');
    $now = time();
    $timeLeft = ($now > $today ? $tomorrow : $today) - $now;
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


    <title>BAREÆNDER FILM</title>
	<!-- favorit icon -->
    <link rel="icon" type="image/png" href="/images/favicon-32x32.png" />
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/heroic-features.css" rel="stylesheet">
    <link rel="stylesheet" href="css/jquery.countdown.css">
	<style type="text/css">
	#defaultCountdown { width: 240px; height: 45px; margin-left: auto; margin-right: auto; }
	</style>
   <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Script til countdown daily offer -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/jquery.plugin.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>


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
</script>
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
                <a class="navbar-brand" href="index.php">BAREÆNDER VIDEO</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="produktvisning.php">MOVIES</a>
                    </li>
                   
                    <li>
                        <a href="kontakt.php">CONTACT US</a>
                    </li>
                
                     <li>
                        <a href="login/1353/index.php">LOGIN</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    
     
            <!-- Jumbotron Header -->
    <header>
         <div class="jumbotron">
            <div class="container">
                <div class="box">
                <div class="col-md-12 col-sm-12">
                    <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/MtN1YnoL46Q" frameborder="0" allowfullscreen></iframe>
					</div>

            </div>
            </div>
            </div>
            </div>

    </header>

    <!-- Page Content -->
    <div class="container">


        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>POPULÆRE FILM</h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/b29yLwesgdI" frameborder="0" allowfullscreen></iframe>
					</div>
                    <div class="caption">
                        <h3>When Did We First Use Rubber Ducks?</h3>
                        <p>Udgivelses år: 2007</p>
                        <p>
                          <div class="row">
                         
                           <div class="col-xs-12">
                            <a class="btn btn-info btn-sm" href="produkt.php?name=b29yLwesgdI" >Se mere</a>
							  </div>
						</div>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/HUxnwivu5fE" frameborder="0" allowfullscreen></iframe>
					</div>
                    <div class="caption">
                        <h3>How To Make Rubber Duck Jelly</h3>
                        <p>Udgivelses år: 2007</p>
                        <p>
                        <div class="row">
                        
                           <div class="col-xs-12">
                            <a class="btn btn-info btn-sm" href="produkt.php?name=HUxnwivu5fE" >Se mere</a>
							  </div>
						</div>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                   <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/oAZFtEKi44c" frameborder="0" allowfullscreen></iframe>
					</div>
                    <div class="caption">
                        <h3>DIY GIANT GUMMY RUBBER DUCKY</h3>
                        <p>Udgivelses år: 2011</p>
                        <p>
                        <div class="row">
                          
                          	 <div class="col-xs-12">
                            <a class="btn btn-info btn-sm" href="produkt.php?name=oAZFtEKi44c" >Se mere</a>
							  </div>
						</div>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/rSo5MqQVwCY" frameborder="0" allowfullscreen></iframe>
					</div>
                    <div class="caption">
                        <h3>Giant rubber duck in China</h3>
                        <p>Udgivelses år: 2013</p>
                        <p>
               			<div class="row">
                           	 <div class="col-xs-12">
                            <a class="btn btn-info btn-sm" href="produkt.php?name=rSo5MqQVwCY" >Se mere</a>
							  </div>
						</div>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/ohZTiVT2qFk" frameborder="0" allowfullscreen></iframe>
					</div>
                    <div class="caption">
                        <h3>Hot Knife vs. Rubber Duck</h3>
                        <p>Udgivelses år: 2017</p>
                        <p>
               			<div class="row">
                          
                          	 <div class="col-xs-12">
                            <a class="btn btn-info btn-sm" href="produkt.php?name=ohZTiVT2qFk" >Se mere</a>
							  </div>
						</div>                           
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                   <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/uzbY3m32vFE" frameborder="0" allowfullscreen></iframe>
					</div>
                    <div class="caption">
                        <h3>Rubber Duck - Crush It</h3>
                        <p>Udgivelses år: 2011</p>
                        <p>
               			<div class="row">
                          
                          	 <div class="col-xs-12">
                            <a class="btn btn-info btn-sm" href="produkt.php?name=uzbY3m32vFE" >Se mere</a>
							  </div>
						</div>                           
                        </p>
                      </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                   <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/nPHSdNnfQLY" frameborder="0" allowfullscreen></iframe>
					</div>
                    <div class="caption">
                        <h3>Rubber Duck Song</h3>
                        <p>Udgivelses år: 2010</p>
                        <p>
                        <div class="row">
                         
                          	 <div class="col-xs-12">
                            <a class="btn btn-info btn-sm" href="produkt.php?name=nPHSdNnfQLY" >Se mere</a>
							  </div>
						</div>      
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/Mh85R-S-dh8" frameborder="0" allowfullscreen></iframe>
					</div>
                    <div class="caption">
                        <h3>Sesame Street</h3>
                        <p>Udgivelses år: 1999</p>
                        <p>
                         <div class="row">
                          
                          	 <div class="col-xs-12">
                            <a class="btn btn-info btn-sm" href="produkt.php?name=Mh85R-S-dh8" >Se mere</a>
							  </div>
						</div>                             
                        </p>
                    </div>
                </div>
            </div>

        </div>
        
        
    <!-- <div class="well">
        <div class="dailyproduct">
        <?
            
                    $connect = mysqli_connect("mysql17.unoeuro.com", "bareaender_dk0", "1Nygummiand", "bareaender_dk0_db");
                    $query = 'SELECT * FROM dailyoffer limit 1';
                    $result = mysqli_query($connect, $query);  
                    $name = "";
                        if(mysqli_num_rows($result) > 0)
                        {
                            $row = mysqli_fetch_assoc($result);
                            $name = $row['name'];
                            if((int)$row['date'] != date("w")) {
                                $query = 'SELECT ducks, url FROM products ORDER BY RAND() LIMIT 1';
                                $result = mysqli_query($connect, $query);
                                if(mysqli_num_rows($result) > 0) {
                                    $row = mysqli_fetch_assoc($result);
                                    $query = "UPDATE dailyoffer SET id=1, name='" . $row['ducks'] . "', date='" . date("w") . "' WHERE id=1";
                                    mysqli_query($connect, $query);
                                    $name = $row['ducks'];
                                }
                            }
                        } else {
                             $query = 'SELECT ducks, url FROM products ORDER BY RAND() LIMIT 1';
                             $result = mysqli_query($connect, $query);
                             if(mysqli_num_rows($result) > 0) {
                                $row = mysqli_fetch_assoc($result);
                                $query = "INSERT INTO dailyoffer (name, date) VALUES ('" . $row["ducks"] . "', '" . date("w") . "')";
                                mysqli_query($connect, $query);  
                             }
                          }
              
        ?>
             <script>
               $(function () {
                var austDay = new Date();
                austDay = new Date(austDay.getFullYear() + 0, 1 - 1, 26);
                $('#defaultCountdown').countdown({until: +<?php echo $timeLeft;?>});
                $('#year').text(austDay.getFullYear());
                });
             </script>
            
            <div class="dailyoffer">
                 <div class="row">
                     <div class="col-sm-6">
                        <h1 style="text-align: center">Daily offer!</h1>
                            <p style="text-align: center"><?=$name?><br>
                              <a href="produkt.php?name=<?=$name?>">Se mere</a></p>
                                </div>
                                <div class="col-sm-6">
                                <h1 style="text-align: center">Dette tilbud udløber om:</h1>
                            <div id="defaultCountdown"></div>
                     </div> 
                 </div>  
             </div>    
        
        </div>
        </div>
         
         
           <div class="newssection">
                <h3 style="text-align: center">Kommende news / Events!</h3>
                
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
        
        
        
        
        <!-- /.container -->

    </div>
    <!-- /.container -->

    -->

</body>


 <!-- Footer -->
<footer>
 <div class="row">
   <div class="col-lg-12">
    <div class="container">
     <div class="box1">
                    <p style="text-align: center">www.film.bareænder.dk ©2017<br>
                    +45 50 71 10 50<br>
                    shop@bareænder.dk</p>

    </div>
    </div>
  </div>
</footer>
</html>
