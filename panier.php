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
<?php 
include ('connex.php');
/*
mysql_connect($host, $user,$password) or die("erreur de connexion au serveur"); 
mysql_select_db($bd) or die("erreur de connexion à la base de données"); 
*/
?>
<body>
    <div class="navbar navbar-fixed-top navbar-default" style="z-index:1;width:100%;padding:0"> 
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
                                    <button class="btn btn-lg btn-connex btn-block" type="submit">Connexion</button>
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

    <div class="container">

            <div class="col-md-12">
            <div class="box text-center">

                <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <h1>Panier</h1>
                    <p class="text-muted">Vous avez actuellement 3 article(s) dans votre panier.</p>
                </div>
                </div>
            </div>

            </div>

            <div class="col-md-9 clearfix" id="basket">

            <div class="box">

                <form method="post" action="checkout1.html">

                <div class="table-responsive">
                    <table class="table">
                    <thead>
                        <tr>
                        <th colspan="2">Product</th>
                        <th>Quantity</th>
                        <th>Unit price</th>
                        <th>Discount</th>
                        <th colspan="2">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td><a href="#"><img src="img/detailsquare.jpg" alt="White Blouse Armani"></a></td>
                        <td><a href="#">White Blouse Armani</a></td>
                        <td><input type="number" value="2" class="form-control"></td>
                        <td>$123.00</td>
                        <td>$0.00</td>
                        <td>$246.00</td>
                        <td><a href="#"><i class="fa fa-trash-o"></i></a></td>
                        </tr>
                        <tr>
                        <td><a href="#"><img src="img/basketsquare.jpg" alt="Black Blouse Armani"></a></td>
                        <td><a href="#">Black Blouse Armani</a></td>
                        <td><input type="number" value="1" class="form-control"></td>
                        <td>$200.00</td>
                        <td>$0.00</td>
                        <td>$200.00</td>
                        <td><a href="#"><i class="fa fa-trash-o"></i></a></td>
                        </tr>                   
                    </tbody>
                    <tfoot>
                        <tr>
                        <th colspan="5">Total</th>
                        <th colspan="2">$446.00</th>
                        </tr>   
                    </tfoot>
                    </table>

                </div> <!-- /.table-responsive -->  

                <div class="box-footer">
                    <div class="pull-left">
                    <a href="category.html" class="btn btn-default"><i class="fa fa-chevron-left"></i> Continue shopping</a>
                    </div>
                    <div class="pull-right">
                    <button class="btn btn-default"><i class="fa fa-refresh"></i> Update cart</button>
                    <button type="submit" class="btn btn-primary">Proceed to checkout <i class="fa fa-chevron-right"></i></button>
                    </div>
                </div>

                </form>

            </div> <!-- /.box -->

            </div> <!-- /.col-md-9 -->

            <div class="col-md-3">
            <div class="box" id="order-summary">
                <div class="box-header">
                <h3>Order summary</h3>
                </div>
                <p class="text-muted">Shipping and additional costs are calculated based on the values you have entered.</p>

                <div class="table-responsive">
                <table class="table">
                    <tbody>
                    <tr>
                        <td>Order subtotal</td>
                        <th>$446.00</th>
                    </tr>
                    <tr>
                        <td>Shipping and handling</td>
                        <th>$10.00</th>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <th>$0.00</th>
                    </tr>
                    <tr class="total">
                        <td>Total</td>
                        <th>$456.00</th>
                    </tr>                   
                    </tbody>
                </table>
                </div>

            </div>          


            </div><!-- /.col-md-3 -->

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
