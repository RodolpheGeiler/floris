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


      <div class="navbar navbar-fixed-top navbar-default" style="z-index:1"> 
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#top">FLORIS</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></li>
              <li class="active"><a href="#services">Produits</a></li>
              <li><a href="#portfolio">Thèmes</a></li>
              <li><a href="#contact">Contact</a></li>
              <li><a href="">Espace personnel</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>

    <!-- Side Menu -->
    <a id="menu-toggle" href="#" class="btn btn-primary btn-lg toggle"><span class="glyphicon glyphicon-shopping-cart">(0)</span></a>
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-default btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">Mon Panier
            </li>
            <div style="padding:15px">
            <a href="#top">Veuillez vous identifier pour avoir accès à votre panier.</a>
            </div>
        </ul>
    </div>
    <!-- /Side Menu -->

    <!-- Fleurs -->
    <div id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center">
                    <h2>Nos fleurs</h2>
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
                                                <input type="radio" name="taille" id="taillemoyen" value="moyen" checked="true">
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
                                            <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-shopping-cart"></span></button>
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
    <!-- /Portfolio -->
    <!-- Accessoires -->
    <div id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center">
                    <h2>Nos Accessoires</h2>
                    <hr>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <ul class="list-inline">
                        <li><i class="fa fa-facebook fa-3x"></i>
                        </li>
                        <li><i class="fa fa-twitter fa-3x"></i>
                        </li>
                        <li><i class="fa fa-dribbble fa-3x"></i>
                        </li>
                    </ul>
                    <div class="top-scroll">
                        <a href="#top"><i class="fa fa-circle-arrow-up scroll fa-4x"></i></a>
                    </div>
                    <hr>
                    <p>Copyright &copy; Floris 2013</p>
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
