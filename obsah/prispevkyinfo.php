<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>Hlavni Stránka</title>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
        
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="../css/bootstrap.min.css"><!--navbar-->
        <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../css/fontAwesome.css">
        <link rel="stylesheet" href="../css/hero-slider.css">
        <link rel="stylesheet" href="../css/owl-carousel.css">
        <link rel="stylesheet" href="../css/templatemo-style.css"><!-- background-->
        <link rel="stylesheet" href="../css/lightbox.css">
   
        <script src="../js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
	<style>
        * {cursor: url(cursor.cur),default; }
	</style>
<body>
    <div class="header">
        <div class="container">
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header">
                    <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                   <!-- <a href="#" class="navbar-brand scroll-top"><em>T</em>inker</a>-->
                </div>
                <!--/.navbar-header-->
                <div id="main-nav" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="../index.php">Úvod</a></li>
                        <li><a href="oklubu.php"><strong>O klubu</strong></a></li>
                        <li><a href="historie.php"><strong>Historie MuayThai</strong></a></li>
                        <li><a href="akce.php"><strong>Akce</strong></a></li>
						<li><a href="treninky.php"><strong>Tréninky</strong></a></li>
						<li><a href="galerie.php"><strong>Bojovníci</strong></a></li>
						<li><a href="fotogalerie.php"><strong>Fotogalerie</strong></a></li>
						<li><a href="gdpr.php"><strong>GDRP</strong></a></li>
						<li><a href="kontakt.php"><strong>Kontakt</strong></a></li>
                    </ul>
                </div>
                <!--/.navbar-collapse-->
            </nav>
            <!--/.navbar-->
        </div>
        <!--/.container-->
    </div>
    <!--/.header-->


    

    

    <section id="testimonial2">
        <div class="container">
            <div class="row">
		      	 <h2>Příspěvky:</h2><br>
                 <!--content-->
				<?php
				include('../admin/connect.php');
				$idakce=$_GET['akce'];
				$prikaz="SELECT * FROM prispevky WHERE id='$idakce'";
				$vysledek=mysqli_query($db,$prikaz);
			while($pole = mysqli_fetch_assoc($vysledek)){
				$informace=$pole['obsah'];
				$jmeno=$pole['predmet'];
				
				echo "<h3>$jmeno</h3>".$informace;
				
				
				if($pole['textobrazku']== "ano"){
					  echo "<h3>Fotky:</h3>";
				  }
				
				
				
				$prikaz2="SELECT url FROM prispevky WHERE textobrazku='$jmeno'";
				$vysledek2=mysqli_query($db,$prikaz2);
			while($pole2 = mysqli_fetch_assoc($vysledek2)){
				$url=$pole2['url'];
				
				echo "<br><img  height=235 width=350 src=../admin/web/obrazky/".$url." ><br>";
				
				
			}
			}
			echo  "<br><a href='../index.php'><strong><p>Zpět</p></strong></a>";
				?>
				
			 <?php/*
  include('../admin/connect.php');
	$jmenoakce=$_GET['jmeno']; 
	 $prikaz="SELECT url FROM prispevky WHERE textobrazku='$jmenoakce'";
	 $vysledek=mysqli_query($db,$prikaz);
	while($pole = mysqli_fetch_assoc($vysledek)){
		$url=$pole['url'];	
	    echo "<br><img  height=235 width=350 src=../admin/web/obrazky/".$url." ><br>";
		
	}
	

echo  "<br><a href='../index.php'><strong>Zpět</strong></a>";


*/
?> 	
				
				
				
				
            </div>
        </div>
    </section>

    

    <div id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h4>Kontaktujte nás</h4>
                        <div class="line-dec"></div>
						<p>Jestli máte nějaké dotazy</p>
                        <div class="pop-button">
                            <h4>Pošlete nám zprávu</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="pop">
                        <span>✖</span>
                        <form id="contact" action="contact_form.php" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                  <fieldset>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Vaše jméno..." required="">
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <input name="email" type="email" class="form-control" id="email" placeholder="Váš Email..." required="">
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Vaše zpráva..." required=""></textarea>
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <button type="submit" id="form-submit" class="btn">Poslat zprávu</button>
                                  </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="map">
    	
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1095.6261845655213!2d15.882952352527246!3d49.22231660357444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470d423c7884781d%3A0x6d174cdb1058de2!2zWsOha2xhZG7DrSDFoWtvbGEgVMWZZWLDrcSNLCB1bC4gS3B0LiBKYXJvxaFlIDgzNg!5e0!3m2!1scs!2scz!4v1559642819246!5m2!1scs!2scz" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="logo">
                        <a class="logo-ft scroll-top" href="#">Thai Box Devils Třebíč</a>
                        <p>Copyright &copy; 2019 Thaibox Devils Třebíč
                       <br>Design: Radim Zezula</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="location">
                        <h4>Adresa</h4>
                        <ul>
                            <li>Čeloudova 1117, Třebíč <br>Česká Republika 674 01</li>
                            <li>Kpt. Jaroše 836/1, Třebíč <br>České Republika 674 01</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-12">
                    <div class="contact-info">
                        <h4>Více Informací</h4>
                        <ul>
                            <li><em>Telefon</em>: 777 172 230</li>
                            <li><em>Email</em>: <a href="mailto:petrottich@wfca-czech.cz"><b>petrottich@wfca-czech.cz</b></a> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-12">
                    <div class="connect-us">
                        <h4>Sociální sítě</h4>
                        <ul>
                            <li><a href="https://www.facebook.com/devilstrebic/"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/devilstrebic/"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/cs_CZ/sdk.js#xfbml=1&version=v3.3"></script>
	
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="../js/vendor/bootstrap.min.js"></script>

    <script src="../js/plugins.js"></script>
    <script src="../js/main.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        // navigation click actions 
        $('.scroll-link').on('click', function(event){
            event.preventDefault();
            var sectionID = $(this).attr("data-id");
            scrollToID('#' + sectionID, 750);
        });
        // scroll to top action
        $('.scroll-top').on('click', function(event) {
            event.preventDefault();
            $('html, body').animate({scrollTop:0}, 'slow');         
        });
        // mobile nav toggle
        $('#nav-toggle').on('click', function (event) {
            event.preventDefault();
            $('#main-nav').toggleClass("open");
        });
    });
    // scroll function
    function scrollToID(id, speed){
        var offSet = 50;
        var targetOffset = $(id).offset().top - offSet;
        var mainNav = $('#main-nav');
        $('html,body').animate({scrollTop:targetOffset}, speed);
        if (mainNav.hasClass("open")) {
            mainNav.css("height", "1px").removeClass("in").addClass("collapse");
            mainNav.removeClass("open");
        }
    }
    if (typeof console === "undefined") {
        console = {
            log: function() { }
        };
    }
    </script>
	
	
	
</body>
</html>