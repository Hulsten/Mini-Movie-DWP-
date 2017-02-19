<!DOCTYPE html>
<html>
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


	<?php if(isset($_GET["name"])) { ?>
		<title>produkt - <?= $_GET["name"] ?></title>
	<?php } ?>
	  <title>BAR' ÆNDER WEBSHOP - Cliff, Rasmus</title>
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
 <script> 
    $(function(){
      $("#includedContent").load("topmenu.php"); 
    });
    </script> 
    <div id="includedContent"></div>
</head>

<body>
 <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/da_DK/sdk.js#xfbml=1&version=v2.8&appId=1754200921464036";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-89035645-1', 'auto');
  ga('send', 'pageview');

</script>
   <div class="row text-center">
    <div class="container">
    <div class="row">
    <div class="col-sm-6">
         <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/<?=$_GET["name"]?>" frameborder="0" allowfullscreen></iframe>
					</div>    
		</div>
    <div class="col-sm-6">
		<h1><?php echo $_GET['name'];?></h1>
		<h4 style="text-align: left;">Intet spa uden gummiand! Få dig en gummiand med nogle frække solbriller, der kan svømme rundt og passe på dit spabad. <br> <br><B>Katogori</B><br>Denne type ænder er fremstille med inspiration fra den virkelige verden<br><br><B>Størrelse</B><br>5 cm.</h4>
   <div class="fb-comments" data-href="http://film.bare&#xe6;nder.dk/produkt.php?name=<?=$_GET["name"]?>" data-numposts="5"></div>
    <div class="row">
                          <div class="col-xs-6">
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="TGA8B4FVVGYVY">
<input type="image" src="http://xn--barender-m0a.dk/images/kobnuknap.png" border="0" name="submit" alt="PayPal – den sikre og nemme måde at betale på nettet." style="height: 35px;">
<img alt="" border="0" src="https://www.paypalobjects.com/da_DK/i/scr/pixel.gif" width="1" height="1">
</form>
		</div>
       <div class="col-xs-6">
        <INPUT TYPE="button" class="btn btn-primary btn" VALUE="Tilbage" onClick="history.go(-1);">
			</div>
			
	</div>
	</div>
	</div>
   <div class="row">
    <div id="recommendedducks" style="margin: auto; width: 50%;">
       <h1>Ænder der minder om det produkt du ser på</h1>
        <?php
            if(isset($_GET["name"])) {
                $name = $_GET["name"];
                $mysqli = mysqli_connect("mysql17.unoeuro.com", "bareaender_dk0", "1Nygummiand", "bareaender_dk0_db");
                $result = mysqli_query($mysqli, "SELECT tags FROM products WHERE url='" . $name . "'");

                $tags = null;
                if(mysqli_num_rows($result) == 1) {
                    $tags = mysqli_fetch_assoc($result);
                    $tags = explode(",", $tags["tags"]);
                }


                $result = mysqli_query($mysqli, "SELECT id, tags FROM products WHERE ducks <> '" . $name ."'");
                $data = array();
                if(mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $data[$row["id"]] = explode(",", $row["tags"]);
                    }
                }

                $rec = array();
                foreach ($data as $key => $value) {

                    for($i = 0; $i < sizeof($tags); $i++) {
                        if(in_array($tags[$i], $value)) {
                            if(!in_array($key, $rec)) {
                                array_push($rec, $key);
                            }
                        }
                    }
                }

                for($i = 0; $i < sizeof($rec); $i++) {
                    $result = mysqli_query($mysqli, "SELECT * FROM products WHERE id='" . $rec[$i] . "'");
                    $data = mysqli_fetch_assoc($result);
                    ?>

                        <html>
                        <div class="duck-recommendation">
                            
                            <div class="duck-recommendation-bottom">
                                <p><?=$data["ducks"]?></p>
                                <a href="produkt.php?name=<?php echo $data['ducks'];?>">
                                <img alt="" style="object-fit: cover; height: 100px; margin-top: 20px" src="images/<?php echo $data['url'];?>.jpg">
								</a>
                            </div>
                        </div>
                        </html>
                    <?php
                }

            }
        ?>
        
    </div>
		</div>
	</div>
	</div>
</body>
</html>
