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

            $("#inscription").click(function () {

                nom = $("#nom").val();
               prenom= $("#prenom").val();
                email = $("#email").val();
               mdp = $("#mdp").val();

                $.ajax({
                    type: "POST",
                    url: "ajoutUser.php",
                    data: "nom=" + nom + "&prenom=" + prenom + "&email=" + email + "&mdp=" + mdp,
                    success: function (html) {
                        if (html == 'true') {

                            $("#add_err2").html('<div class="alert alert-success"> \
                                                 <strong>Compte utilisateur</strong> traité. \ \
                                                 </div>');

                            window.location.href = "index.php";

                        } else if (html == 'false') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong> Adresse Email </strong> existe déjà dans le système. \ \
                                                 </div>');                    

                        } else if (html == 'nom') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>nom</strong> est requis. \ \
                                                 </div>');
												 
						} else if (html == 'prenom') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Prénom</strong> est requis. \ \
                                                 </div>');

                        } else if (html == 'eshort') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Adresse Mail</strong> est requis. \ \
                                                 </div>');

                        } else if (html == 'eformat') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Adresse Mail</strong> format non valide. \ \
                                                 </div>');
												 
						} else if (html == 'pshort') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>mot de passe</strong> doit avoir au moins 4 caractères . \ \
                                                 </div>');

                        } else {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Error</strong> traitement de la requête. veuillez réessayer. \ \
                                                 </div>');
                        }
                    },
                    beforeSend: function () {
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
                    <hr>
                    <h2 class="intro-text text-center"> formulaire
                        <strong>d'inscription</strong>
                    </h2>
                    <div id="add_err2"></div>
                    <hr>
                   
                    <form role="form">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Nom</label>
                                <input type="text" id="nom" name="nom" maxlength="25" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Prénom</label>
                                <input type="text" id="prenom" name="prenom" maxlength="25" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email</label>
                                <input type="mail" id="email" name="email" maxlength="25" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Mot de passe</label>
                                <input type="password" id="mdp" name="mdp" maxlength="10" class="form-control">
                            </div>
                            <div class="form-group col-lg-12">
                                <button type="submit" id="inscription" class="btn btn-info">inscription</button>
                            </div>
                        </div>
                    </form>
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
