<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>La tasse parfaite -inscription</title>

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
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Script -->
	<script type="text/javascript">
        $(document).ready(function () {

            $("#login").click(function () {

                email = $("#email").val();
                mdp = $("#mdp").val();

                $.ajax({
                    type: "POST",
                    url: "pVerif.php",
                    data: "email="+email+"&mdp="+mdp,
                    success: function(html) {
                        if (html=='true') {

                            $("#add_err2").html('<div class="alert alert-success"> \
                                                 <strong>Connexion</strong> . \ \
                                                 </div>');

                            window.location.href = "blog.php";

                        } else if (html=='false') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong> Echec </strong> de connexion au compte. \ \
                                                 </div>');                    

                        
                        } else {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Error</strong> traitement de la requête. veuillez réessayer. \ \
                                                 </div>');
                        }
                    },
                    beforeSend:function() {
                        $("#add_err2").html("loading...");
                    }
                });
                return false;
            });
        });
    </script>

</head>

<body>

    <div class="brand">La tasse parfaite</div>
    <div class="address-bar">3481 Melrose Place | Beverly Hills, CA 90210 | 123.456.7890</div>

    <!-- Navigation -->
   <?php require_once "nav.php"; ?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">

                <div class="alert alert-danger">
					<strong>Vous devez être connecté pour voir le blog.</strong>
					</div>

                    <hr>
                    <h2 class="intro-text text-center"> 
                        <strong>Connexion</strong>
                    </h2>
                    <div id="add_err2"></div>
                    <hr>
                   
                    <form role="form">
                        <div class="row">
                           
                            <div class="form-group col-lg-6">
                                <label>Email</label>
                                <input type="mail" id="email" name="email" maxlength="25" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-6">
                                <label>Mot de passe</label>
                                <input type="password" id="mdp" name="mdp" maxlength="10" class="form-control">
                            </div>
                            <div class="form-group col-lg-12">
                                <button type="submit" id="login" class="btn btn-info">Connexion</button>
                            </div>
                        </div>
                    </form>
                    <div class="form-group col-lg-12">
						<a href="inscription.php"><button type="submit" class="btn btn-danger">Not a Member? Register here</button></a>
					</div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <?php require_once "footer.php"; ?>

    

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
