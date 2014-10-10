<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Floris - Produits</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>



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
                    <li><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></li>
                    <li class="active"><a href="#top">Produits</a></li>
                    <li><a href="index.php#map">Notre magasin</a></li>
                    <li><a href="index.php#contact">Contact</a></li>
                    <li><a data-toggle="modal" data-target="#Login" href="">Se connecter</a></li>       
                </ul>
            </div>
        </div>
     </div>

    <!-- /Nav Bar -->
    <!-- Pop Ups -->

    <div class="modal fade" id="Login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6 col-md-8 col-md-offset-2">
                            <h1 class="text-center login-title">Veuillez vous connecter afin de continuer</h1>
                            <div class="account-wall">
                                <img class="profile-img" style="width:20" src="img/logo-big.png" alt="">
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
    <a href="#">
    <button id="menu-toggle" class="btn btn-primary btn-lg toggle sidebar-btn"><span class="glyphicon glyphicon-shopping-cart"> (0)</span></button>
    </a>    
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-default btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <a href="panier.php"><li class="sidebar-brand">Mon Panier</a></li>
            <div style="padding:15px">
            <a href="#top">Veuillez vous identifier pour avoir accès à votre panier.</a>
            </div>
        </ul>
    </div>
    <!-- /cart -->
    <div id="services" class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-md-offset-5 text-center">
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 text-center">
                    <div class="service-item">
                        <a href="#Fleurs"><i class="service-icon glyphicon glyphicon-tree-conifer"></i></a>
                        <h4>Fleurs</h4>
                        <p>
                        </p>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="service-item">
                        <a href="#Plantes"><i class="service-icon fa fa-leaf"></i></a>
                        <h4>Plantes</h4>
                        <p>
                        </p>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="service-item">
                        <a href="#Accessoires"><i class="service-icon glyphicon glyphicon-filter"></i></a>
                        <h4>Accessoires</h4>
                        <p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Fleurs -->
    <div id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center">
                    <h2 id="Fleurs">Nos fleurs</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
            <?php
                for ($i = 1; $i <= 4; $i++) {
            ?>  
                <div class="col-xs-6 col-md-3">
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
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target=".bs-example-modal-sm<?php echo $i; ?>"><span class="glyphicon glyphicon-shopping-cart"></span> Ajouter au panier</button>
                            <div class="modal fade bs-example-modal-sm<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="tulipedetails" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h2 class="modal-title" id="myModalLabel">Tulipes</h2>
                                        </div>
                                        <div class="modal-body">
                                        <img class="img-portfolio img-responsive" src="img/fleurs-<?php echo $i; ?>.jpg">
                                            <h5>Taille du bouquet:</h5>
                                            <div class="radio">
                                              <label>
                                                <input type="radio" name="taille" id="taillepetit" value="petit">
                                                Mignion - 18 €
                                              </label>
                                            </div>
                                            <div class="radio">
                                              <label>
                                                <input type="radio" name="taille" id="taillemoyen" value="moyen" checked="checked">
                                                Classique (voir photo) - 23 €
                                              </label>
                                            </div>
                                            <div class="radio">
                                              <label>
                                                <input type="radio" name="taille" id="taillegrand" value="grand">
                                                Généreux - 28 €
                                              </label>
                                            </div>
                                            <h5>Autres options:</h5>
                                            <div class="checkbox">
                                              <label>
                                            <input type="checkbox" name="vase" id="vase" value="on">
                                                Présenté en vase - + 15 €
                                              </label>
                                            </div>
                                            <div class="checkbox">
                                              <label>
                                                <input type="checkbox" name="swag" id="swag" value="on">
                                                Swag - + 250 €
                                              </label>
                                            </div>
                                            <div class="checkbox">
                                              <label>
                                                <input type="checkbox" name="cadeau" id="cadeau" value="on">
                                                Emballage cadeau : + 10 €
                                              </label>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                                            <input type="number" class="btn btn-default" style="width:8%" min="1" max="10" id="number_flowers" value="1">
                                            <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-shopping-cart"></span> Ajouter</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            <?php
                }
            ?>
            </div>
        </div>
    </div>
    <!-- /Fleurs -->
    <!-- Plantes -->
    <div id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center">
                    <h2 id="Plantes">Nos Plantes</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-md-3">
                    <div class="thumbnail">
                        <div class="portfolio-item">
                            <img class="img-portfolio img-responsive" src="img/plantes-1.jpg">
                            <h4>Bulbizare</h4>
                            <p>A partir de 6 €</p>
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target=".bs-example-modal-sm<?php echo $i; ?>"><span class="glyphicon glyphicon-shopping-cart"></span> Ajouter au panier</button>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    <!--- /Plantes -->
    <!-- Accessoires -->
    <div id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center">
                    <h2 id="Accessoires">Nos Accessoires</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-md-3">
                    <div class="thumbnail">
                        <div class="portfolio-item">
                            <img class="img-portfolio img-responsive" src="img/access-1.jpg">
                            <h4>Pot en ceramique</h4>
                            <p>A partir de 9 €</p>
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target=".bs-example-modal-sm<?php echo $i; ?>"><span class="glyphicon glyphicon-shopping-cart"></span> Ajouter au panier</button>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
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
</body>

</html>
