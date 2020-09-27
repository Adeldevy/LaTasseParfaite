<?php 
// Initialisation de la session 
session_start();
if (isset($_SESSION['login'])) {

  $nom = $_SESSION['nom'];
  $prenom = $_SESSION['prenom'];



?>




<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog- La tasse parfaite  </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">La Tasse Parfaite</div>
    <div class="address-bar">3481 Melrose Place | Beverly Hills, CA 90210 | 123.456.7890</div>

    <!-- Navigation -->
    <?php require_once 'nav.php'; ?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                  <!-- Message d'accueil avec le lien de déconnexion-->
                  <h4 classe="text-center">Bienvenue <?php echo $nom. ' '. $prenom.' ';?>-<a href="deconnexion.php">Déconnexion</a></h4>
                    <hr>
                    <h2 class="intro-text text-center">La Tasse Parfaite
                        <strong>blog</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-1.jpg" alt="">
                    <h2>Le café à la noix de coco
                        <br>
                        <small>Juin 2020</small>
                    </h2>
                    <p>Croyez-le ou non : la noix de coco et le café se marient à merveille. Essayez votre café préféré avec le goût riche et gourmand du lait de coco sucré et un soupçon de sirop de caramel. Cette boisson très gourmande, est parfaite pour les froides journées d'hiver. Elle peut également être réalisée avec de la glace, pour se rafraîchir pendant l'été. Grâce à cette recette, apprenez à réaliser un café à la noix de coco en quelques étapes, simples et rapides.</p>
                    <botton type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">
                   Read More</botton>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-2.jpg" alt="">
                    <h2>Le café gourmand
                        <br>
                        <small>Septembre 2019</small>
                    </h2>
                    <p>Proposé depuis une quinzaine d'années dans de nombreux restaurants, le café gourmand s'invite depuis dans nos cuisines. Idéal pour terminer son repas avec une touche sucrée, on craque pour ces desserts format miniature qui accompagnent notre expresso. À servir sur une belle assiette ou une ardoise, jouez avec les couleurs et les formes pour un effet des plus esthétiques.
                       Macarons, profiteroles, mini cannelés, chouquettes, variez les bouchées selon les envies et les préférences de vos invités. Pour changer de la traditionnelle bûche lors du réveillon de fin d'année et proposer des saveurs différentes, quelques truffes au chocolat, du pain d'épice et des meringues combleront toutes les papilles.</p>
                       <botton type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">
                   Read More</botton>
                    <hr>
                </div>

                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-3.jpg" alt="">
                    <h2>Le café latte
                        <br>
                        <small>October  2018</small>
                    </h2>
                    <p>La grand différence avec le Cappuccino, vient en effet, de l’ordre d’introduction des ingrédients. Pour se faire, il faut « monter » son lait, autrement dit créer une mousse de lait avec une buse vapeur ou le cas échéant, un mousseur à lait fera parfaitement l’affaire.
                       Prenez plutôt un verre haut et transparent, type Bodum double paroi de 35 cl, afin de profiter pleinement de l’esthétique de cette boisson.
                       Verser la quantité desirée de lait et de mousse de lait dans le contenant (généralement au 3/4) puis verser un espresso au centre du verre: vous verrez alors apparaitre 3 étages dinstincts. Composé, en haut, de la mousse de lait, de l’espresso et pour finir, le lait (car la densité est plus élevé) en bas du verre.</p>
                       <botton type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">
                   Read More</botton>
                    <hr>
                </div>

                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Older</a>
                        </li>
                        <li class="next"><a href="#">Newer &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->
    <!-- Modal1 -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Café à la noix de coco</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      
      </div>
    </div>
  </div>
</div>

<!-- Modal2 -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Café gourmand</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      
      </div>
    </div>
  </div>
</div>

<!-- Modal3 -->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Café latte</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      
      </div>
    </div>
  </div>
</div>

     <?php require_once 'footer.php'; ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

<?php
} else {
 header("location:login.php");


}
?>