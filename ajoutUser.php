<?php

session_start();
//connexion à la BD
$mysqli = new mysqli('localhost', 'root', '', 'tasseparfaite');

//en cas d'erreur procéder à la déconnexion 
if ($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}
$nom = mysqli_real_escape_string($mysqli, $_POST['nom']);
$prenom = mysqli_real_escape_string($mysqli, $_POST['prenom']);
$email = mysqli_real_escape_string($mysqli, $_POST['email']);
$mdp = mysqli_real_escape_string($mysqli, $_POST['mdp']);

//VALIDATION vérification

if (strlen($nom) < 2) {
    echo 'nom';
} elseif (strlen($prenom) < 2) {
    echo 'prenom';
} elseif (strlen($email) <= 4) {
    echo 'eshort';
} elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo 'eformat';
} elseif (strlen($mdp) <= 4) {
    echo 'pshort';
	
} else {
	
	//PASSWORD ENCRYPT
	$smdp = password_hash($mdp, PASSWORD_BCRYPT, array('cost' => 12));
	
	$query = "SELECT * FROM membre WHERE email='$email'";
	$result = mysqli_query($mysqli, $query) or die(mysqli_error());
	$num_row = mysqli_num_rows($result);
	$row = mysqli_fetch_array($result);
	
		if ($num_row < 1) {

			$insert_row = $mysqli->query("INSERT INTO membre (nom, prenom, email, mdp) VALUES ('$nom', '$prenom', '$email', '$smdp')");

			if ($insert_row) {

				$_SESSION['login'] = $mysqli->insert_id;
				$_SESSION['nom'] = $nom;
				$_SESSION['prenom'] = $prenom;

				echo 'true';

			}

		} else {

			echo 'false';

		}
		
}



?>