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

    <!-- Side Menu -->
    <a id="menu-toggle" href="#" class="btn btn-success btn-lg toggle"><i class="fa fa-bars"></i></a>
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-default btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand"><a href="http://startbootstrap.com">Start Bootstrap</a>
            </li>
            <li><a href="#top">Accueil</a>
            </li>
            <li><a href="#about">About</a>
            </li>
            <li><a href="#services">Services</a>
            </li>
            <li><a href="#portfolio">Portfolio</a>
            </li>
            <li><a href="#contact">Nous contacter</a>
            </li>
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
                            <img class="img-portfolio img-responsive" src="img/fleurs-<?php echo $i; ?>.jpg">
                            <h4>Tulipes</h4>
                            <p>18€</p>
                            <button type="button" class="btn btn-sm" data-toggle="modal" data-target=".bs-example-modal-sm<?php echo $i; ?>"><span class="glyphicon glyphicon-list"></span> Details</button>
                            <div class="modal fade bs-example-modal-sm<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="tulipedetails" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel">Tulipes</h4>
                                    </div>
                                    <div class="modal-body">
                                    <img class="img-portfolio img-responsive" src="img/fleurs-<?php echo $i; ?>.jpg">
                                        <h3>Yolo</h3>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <input type="number" class="btn btn-default btn-sm" style="width:18%" min="1" max="10" id="number_flowers" value="1">
                            <button type="button" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-shopping-cart"></span></button>
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
