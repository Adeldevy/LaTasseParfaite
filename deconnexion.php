
<?php

session_start();


 unset($_SESSION['login']);
 unset( $_SESSION['nom']);
 unset( $_SESSION['prenom']);

header("location:index.php?logout=true");

?>
