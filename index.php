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

/*
mysql_connect($host, $user,$password) or die("erreur de connexion au serveur"); 
mysql_select_db($bd) or die("erreur de connexion à la base de données"); 
*/
?>

<style>
.yamm .nav,
.yamm .dropup,
.yamm .dropdown,
.yamm .collapse {
  position: static;
}
.yamm .navbar-inner,
.yamm .container {
  position: relative;
}
.yamm .dropdown-menu {
  left: auto;
}
.yamm .dropdown-menu > li {
  display: block;
}
.yamm .dropdown-submenu .dropdown-menu {
  left: 100%;
}
.yamm .nav.pull-right .dropdown-menu {
  right: 0;
}
.yamm .yamm-content {
  padding: 20px 30px;
  *zoom: 1;
}
.yamm .yamm-content:before,
.yamm .yamm-content:after {
  display: table;
  content: "";
  line-height: 0;
}
.yamm .yamm-content:after {
  clear: both;
}
.yamm.navbar .nav > li > .dropdown-menu:after,
.yamm.navbar .nav > li > .dropdown-menu:before {
  display: none;
}
.yamm .dropdown.yamm-fullwidth .dropdown-menu {
  width: 100%;
  left: 0;
  right: 0;
}
@media (max-width: 969px) {
  .yamm .dropdown.yamm-fullwidth .dropdown-menu {
    width: auto;
  }
  .yamm .yamm-content {
    padding-left: 0;
    padding-right: 0;
  }
  .yamm .dropdown-menu > li > ul {
    display: block;
  }
}
 .layout-demo,
    .grid-demo {
      padding: 10px 20px;
    }

    .layout-demo [class*="span"] {
      line-height: 80px;
    }

    .grid-demo [class*="span"] {
      line-height: 30px;
    }

		.grid-demo [class*="span"],
    .layout-demo [class*="span"] {
			background: #eee;
			margin-top: 5px;
      margin-bottom: 5px;
			font-size: 12px;
			text-align: center;
      font-weight: bold;
		}
		.grid-demo [class*="span"]:hover,
    .layout-demo [class*="span"]:hover {
			background: #ddd;
		}
</style>
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
        		<li class="dropdown yamm-fullwidth">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Produits <b class="caret"></b> </a>
                  <ul class="dropdown-menu" style="color:black;padding:20px;box-shadow:0px 0px 10px #7fbbda inset">
                    <li>
                      <div class="yamm-content">
		<style>
	.table > tbody > tr > td:hover {
	background:rgba(127, 187, 218, 0.5);
	}
	.table > tbody > tr > td > a {
	text-transform:none;
	color:black;
	}
	.table > thead > tr > th {
	padding-right:100px;
	font-size:20px
	}
		</style>
                        <table class="table">
                          <thead>
                            <tr>
                              <th>FLEURS</th> 
							  <th>PLANTES</th>
							  <th>ACCESSOIRES</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td><a href="products.php">Fleurs t1</a></td>
							  <td>PLANTES 1</td>
							  <td>ACCESS 1</td>
                            </tr>
                            <tr>
                              <td>2</td>
							  <td>PLANTES 2</td>
							  <td>ACCESS 2</td>
                            </tr>
                            <tr>
                              <td>3</td>
							  <td>PLANTES 3</td>
							  <td>ACCESS 3</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </li>
                  </ul>
                </li>
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
<style>
.contact{
background-color: red;
}

.contactexpand{
  background-color: green;
}
</style>
<script>
function replace( hide, show ) {
  document.getElementById(hide).style.display="none";
  document.getElementById(show).style.display="block";
}
</script>
    <!-- Services -->
    <div id="services" class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center">
                    <div class="service-item">
                        <a style="cursor:pointer" onclick = "replace('plantes','fleurs')"><i class="service-icon glyphicon glyphicon-tree-conifer"></i></a>
                        <h4>Fleurs</h4>
                        <p>
						</p>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <div class="service-item">
                        <a style="cursor:pointer" onclick = "replace('fleurs','plantes')"><i class="service-icon fa fa-leaf"></i></a>
                        <h4>Plantes</h4>
                        <p>
						</p>
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
            <div class="row" id="fleurs" style="display:block">
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
			<div class="row" id="plantes" style="display:none">
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
                            <img class="img-portfolio img-responsive" src="img/plantes-<?php echo $i; ?>.jpg" style="height:250px">
                            <h4>Plantes</h4>
                            <p>A partir de 18 €</p>
                        </div>
                    </div>
                </div>  
            <?php
                }
            ?>
			</div>
			<div class="row" id="access" style="display:none">
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
                            <img class="img-portfolio img-responsive" src="img/access-<?php echo $i; ?>.jpg" style="height:250px">
                            <h4>Plantes</h4>
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
            <h1>"Un simple regard posé sur une fleur et  voilà une journée remplie de bonheur." </h1>
        </div>
    </div>
    <!-- /Callout -->

    <!-- Map & Infos -->
    <div class="servicesEnd" id="map">
        <div class="container">
        <div class="box">
                <div class="row col-lg-12">                
				<div id="map" style="position: relative; overflow: hidden;" class="col-lg-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2530.6824890975804!2d3.0569183000000084!3d50.63301489999992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2d5841126057b%3A0x74bd342d9da7dd55!2s22+Rue+de+Puebla%2C+59800+Lille!5e0!3m2!1sen!2sfr!4v1405702007659" width="100%" height="300" frameborder="0" style="border:0"></iframe>
                </div>
					<div class="col-lg-6">
                    <div class="col-sm-4 col-lg-6">
                        <h3><i class="fa fa-map-marker"></i> Adresse</h3>
                        <p>22 Rue Puebla<br>
                        59200<br>
                        Lille<br>
                        <strong>France</strong></p>
                    </div>
                    <div class="col-sm-4 col-lg-6">
                        <h3><i class="fa fa-phone"></i> Numero du magasin</h3>
                        <p>Numero gratuit du lundi au vendredi de 10h à 18h.</p>
                        <p><strong><a href="tel:03333258425">+333 33 25 84 25</a></strong></p>
                    </div>        
					<div class="col-sm-4 col-lg-*">
                        <h3><i class="glyphicon glyphicon-bell"></i> Horaires</h3>
                        <p>Notre magasin est ouvert:</p>
					</div>
					<div class="col-lg-8" style="margin-top:20px">
                        <ul>
                        <li><strong>Lundi:</strong> de 14h à 18h.</li>
                        <li><strong>Mardi au vendredi:</strong> de 10h à 18h.</li>
                        <li><strong>Samedi:</strong> de 10h à 14h.</li>
                        </ul>
					</div>
                    </div>  
					</div>
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
					    <div class="well well-sm visible-lg hidden-md hidden-sm hidden-xs"><strong><i class="glyphicon glyphicon-ok form-control-feedback"></i> Champs Requis</strong></div>
                    </div>
                   
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="InputMessage">Message</label>
                            <div class="input-group"> 
                                <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" required></textarea>
                                <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
                            </div>
						</div>
						<div class="form-group">
							
								<div class="hidden-lg visible-md-* visible-sm-* visible-xs-* col-md-8 col-sm-8 col-xs-8"><strong><i class="glyphicon glyphicon-ok form-control-feedback"></i> Champs Requis</strong></div>
								<input type="submit" name="submit" id="submit" value="Envoyer" class="btn btn-info btn-md">
							
                        </div>
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
