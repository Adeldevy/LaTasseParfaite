<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>La tasse Parfaite -Contact  </title>

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

            $("#contact").click(function () {

                nom = $("#nom").val();           
                email = $("#email").val();
                message = $("#message").val();

                $.ajax({
                    type: "POST",
                    url: "envoiMessage.php",
                    data: "nom=" + nom +  "&email=" + email + "&message=" + message,
                    success: function (html) {
                        if (html == 'true') {

                            $("#add_err2").html('<div class="alert alert-success"> \
                                                 <strong>Message Envoyé !</strong> \ \
                                                 </div>');

                           

                        } else if (html == 'nom_long') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong> le nom </strong>ne doit dépasser 50 caractères. \ \
                                                 </div>');                    

                        } else if (html == 'nom_court') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Le nom</strong> doit comprendre plus de 2 caractères. \ \
                                                 </div>');
												 
						} else if (html == 'email_long') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong> L\'email  </strong> ne doit dépasser 50 caractères. \ \
                                                 </div>');                    


                        } else if (html == 'email_court') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>L\'email </strong> doit comprendre plus de 2 caractères. \ \
                                                 </div>');
                        } else if (html == 'eformat') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Adresse Mail</strong> format non valide. \ \
                                                 </div>');
												 
						} else if (html == 'message_long') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Message</strong> ne doit dépasser 50 caractères. . \ \
                                                 </div>');

                        } else if (html == 'message_court') {
                          $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Message</strong> doit comprendre plus de 2 caractères. . \ \
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

    <div class="brand">La Tasse Parfaite</div>
    <div class="address-bar">2 Place Sadi Carnot |  42000 Saint-Étienne | 0100000000</div>


    <!-- Navigation -->
    <?php require_once 'nav.php'; ?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>La Tasse Parfaite</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2799.0607088100865!2d4.3833466154637994!3d45.4484327425166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f5ac1b2b1e1495%3A0x75b1c9d34723cbc8!2sPlace%20Sadi%20Carnot%2C%2042000%20Saint-%C3%89tienne!5e0!3m2!1sfr!2sfr!4v1601220797543!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="col-md-4">
                    <p>Téléphone:
                        <strong>0100000000</strong>
                    </p>
                    <p>Email:
                        <strong><a href="mailto:name@example.com">contact@latasseparfaite.fr</a></strong>
                    </p>
                    <p>Address:
                        <strong>2 Place Sadi Carnot
                            <br> 42000 Saint-Étienne</strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Formulaire
                        <strong>Contact</strong>
                    </h2>
                    <hr>
                    <div id="add_err2"></div>
                 
                    <form role="form">
                        <div class="row">
                        <div class="form-group col-lg-4">
                                <label>Nom</label>
                                <input type="text" id="nom" name="nom" maxlength="25" class="form-control">
                            </div>

                            <div class="form-group col-lg-4">
                                <label>Email</label>
                                <input type="mail" id="email" name="email" maxlength="25" class="form-control">
                            </div>
                           
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Message</label>
                                <textarea class="form-control" id="message" name="message" rows="6" maxlength="100"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                               
                                <button type="submit" id="contact" class="btn btn-info">Envoyer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </div>
    </footer>

   

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
