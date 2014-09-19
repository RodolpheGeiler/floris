<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Floris - Livraison de fleurs en France</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>

    <!-- Nav Bar -->

<body>
    <div class="navbar navbar-fixed-top navbar-default" style="z-index:1;width:100%"> 
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a href="index.php#top"><img src="img/logo-mini.png"></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#top"><span class="glyphicon glyphicon-home"></span></a></li>
        			<li><a href="products.php">Produits</a></li>  
                    <li><a href="#map">Notre magasin</a></li>
                    <li><a href="#contact">Contact</a></li>
        			<li><a data-toggle="modal" data-target="#Login" href="">Se connecter</a></li>		
                </ul>
            </div>
        </div>
     </div>

    <!-- /Nav Bar -->
    <!-- Pop Ups -->

    <div class="modal fade" id="Login" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6 col-md-8 col-md-offset-2">
                            <h1 class="text-center login-title">Veuillez vous connecter afin de continuer</h1>
                            <div class="account-wall">
                                <img class="profile-img" src="img/logo-mini.png" alt="">
                                <form class="form-signin">
                                    <input type="text" class="form-control" placeholder="Adresse e-mail" required autofocus>
                                    <input type="password" class="form-control" placeholder="Mot de passe" required>
                                    <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
                                    <a href="#" class="pull-right need-help">Besoin d'aide ? </a><span class="clearfix"></span>
                                </form>
                            </div>
                            <a href="#" class="text-center new-account">Créer un compte </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>      

    <!-- /Pop Ups -->
	<!-- Cart -->
	<a href="">
    <button id="menu-toggle" class="btn btn-primary btn-lg toggle sidebar-btn"><span class="glyphicon glyphicon-shopping-cart"> (0)</span></button>
	</a>	
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-default btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <a href="panier.php"><li class="sidebar-brand">Mon Panier</a></li>
			<div style="padding:15px">
            <a data-toggle="modal" data-target="#Login">Veuillez vous identifier pour avoir accès à votre panier.</a></a><br>
            </div>
        </ul>
    </div>
    <!-- /cart -->
    <!-- Full Page Image Header Area -->
    <div id="top" class="header">
        <div class="vert-text">
            <h1>F L O R I S</h1>
        </div>
    </div>
    <!-- /Full Page Image Header Area -->

    <!-- Services -->
    <div id="services" class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center">
                    <h2>Nos produits</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 text-center">
                    <div class="service-item">
                        <i class="service-icon glyphicon glyphicon-tree-conifer"></i>
                        <h4>Fleurs</h4>
                        <p>Did your navigation system shut down in the middle of that asteroid field? We can repair any dings and scrapes to your spacecraft!
						<div class="btn-group">
						</div></p>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="service-item">
                        <i class="service-icon fa fa-leaf"></i>
                        <h4>Plantes</h4>
                        <p>Need to know how magnets work? Our problem solving solutions team can help you identify problems and conduct exploratory research.</p>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="service-item">
                        <i class="service-icon glyphicon glyphicon-filter"></i>
                        <h4>Accessoires</h4>
                        <p>Planning a time travel trip to the middle ages? Preserve the space time continuum by blending in with period accurate armor and weapons.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Services -->



    <!-- Portfolio -->
    <div id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center">
                    <h2>Articles en promotions</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
            <?php
                for ($i = 1; $i <= 4; $i++) {
            ?>  
                <div class="col-md-3">
                    <div class="thumbnail">
                        <div class="portfolio-item">
                            <?php
                                if ($i == 2) {
                            ?>
                            <div class="ribbon sale">
                                <div class="theribbon">REDUCTION</div>
                            </div>
                            <?php } ?>
                            <img class="img-portfolio img-responsive" src="img/fleurs-<?php echo $i; ?>.jpg">
                            <h4>Tulipes</h4>
                            <p>A partir de 18 €</p>
                        </div>
                    </div>
                </div>  
            <?php
                }
            ?>
            </div>
        </div>
    </div>
    <!-- /Portfolio -->

    <!-- Callout -->
    <div class="callout">
        <div class="vert-text">
            <h1>Yolo Swag</h1>
        </div>
    </div>
    <!-- /Callout -->

    <!-- Map & Infos -->
    <div class="services" id="map">
        <div class="container">
        <div class="box">
                <div class="row">
                    <div class="col-sm-4">
                        <h3><i class="fa fa-map-marker"></i> Addresse</h3>
                        <p>22 Rue Puebla<br>
                        59200<br>
                        Lille<br>
                        <strong>France</strong></p>
                    </div>
                    <div class="col-sm-4">
                        <h3><i class="glyphicon glyphicon-bell"></i> Horraires</h3>
                        <p>Notre magasin est ouvert:</p>
                        <ul>
                        <li><strong>Lundi:</strong> de 14h à 18h.</li>
                        <li><strong>Mardi au vendredi:</strong> de 10h à 18h.</li>
                        <li><strong>Samedi:</strong> de 10h à 14h.</li>
                        </ul>
                    </div>   
                    <div class="col-sm-4">
                        <h3><i class="fa fa-phone"></i> Numero du magasin</h3>
                        <p>Numero gratuit du lundi au vendredi de 10h à 18h.</p>
                        <p><strong><a href="tel:03333258425">+333 33 25 84 25</a></strong></p>
                    </div>        
                </div>
                <hr>
                <div id="map" style="position: relative; overflow: hidden;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2530.6824890975804!2d3.0569183000000084!3d50.63301489999992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2d5841126057b%3A0x74bd342d9da7dd55!2s22+Rue+de+Puebla%2C+59800+Lille!5e0!3m2!1sen!2sfr!4v1405702007659" width="100%" height="300" frameborder="0" style="border:0"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- /Map & Infos-->

    <!-- Contact -->
    <div class="container">
        <div class="box" id="contact">
            <h2 class="text-center">Formulaire de contact</h2>
            <div class="row">
                <form role="form" action="" method="post" >
                    <div class="col-lg-6">
                        <div class="form-group">
                        <label for="InputName">Votre Nom</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Entrez votre nom" required>
                            <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
                        </div>
                        <div class="form-group">
                        <label for="InputEmail">Votre E-mail</label>
                        <div class="input-group">
                            <input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Entrez votre e-mail" required  >
                            <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
                        </div>
                    </div>
                    <hr class="featurette-divider hidden-lg">
                    <div class="col-lg-5 col-md-push-1">
                        <div class="form-group">
                            <label for="InputMessage">Message</label>
                            <div class="input-group"> 
                                <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" required></textarea>
                                <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
                            </div>
                        </div>
                    <div class="well well-sm"><strong><i class="glyphicon glyphicon-ok form-control-feedback"></i> Champs Requis</strong></div>
					<input type="submit" name="submit" id="submit" value="Envoyer" class="btn btn-info pull-right">
                    </div>
                </form>
                <!-- Message de validation et d'erreur
                <div class="col-md-12">
                    <div class="alert alert-success"><strong><span class="glyphicon glyphicon-send"></span> Message envoyé ! (If form ok!)</strong></div>   
                    <div class="alert alert-danger"><span class="glyphicon glyphicon-alert"></span><strong> Erreur ! Verrifiez le formulaire</strong></div>
                </div> -->
            </div>
        </div>
    </div><br>
    <!-- /Contact -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
            <p style="text-align:center">Livraison 7j/7 et jours fériés par un fleuriste <a href="index.php">FLORIS</a>. Contactez-nous au <span class="bold">03 33 25 84 25</span> du lundi au vendredi de 10h à 18h.</p>
                <div class="col-md-6 col-md-offset-3 text-center">
                    <ul class="list-inline">
                        <li><i class="fa fa-facebook fa-3x"></i>
                        </li>
                        <li><i class="fa fa-twitter fa-3x"></i>
                        </li>
                    </ul>
                    <hr>
                    <p>Copyright &copy; 2014 FLORIS</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- /Footer -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

    <!-- Custom JavaScript for the Side Menu and Smooth Scrolling -->
    <script>
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    </script>
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    </script>
    <script>
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>

</body>

</html>
