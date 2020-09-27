<?php
session_start();

$email = $_POST['email'];
$mdp = $_POST['mdp'];

// connexion à la BD
$mysqli = new mysqli('localhost','root','','tasseparfaite');
// en cas d'erreur , procéder a une déconnexion 

if ($mysqli ->connect_error){
    die('Error :('. $mysqli->connect_errno . ')'. $mysqli->connect_error);
}
$query = " SELECT * FROM membre WHERE email = '$email'";
$result = mysqli_query($mysqli, $query) or die(mysqli_error());
$num_row = mysqli_num_rows($result);
$row =  mysqli_fetch_array($result);

if ($num_row >= 1) {
    if (password_verify($mdp, $row['mdp'])){

        $_SESSION['login'] = $row['id'];
        $_SESSION['nom'] = $row['nom'];
        $_SESSION['prenom']= $row['prenom'];
        echo 'true';
      }else {
        echo'false';
      }


        }else {
            echo 'false';
        }

?>