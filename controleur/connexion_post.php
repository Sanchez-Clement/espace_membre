<?php
session_start();

include '../modele/connexion_sql.php';
$pseudo = htmlspecialchars($_POST["pseudo"]);
$password = $_POST["password"];
include '../modele/membre/verif_connexion.php';
echo $pseudo;
echo $password;

// appel du modele pour verifier si l'user esr enregistré en base de donné

$connexion = connexion($pseudo);
if(!$connexion) { $_SESSION["error"]["pseudo_connexion"] = "Pseudo non reconnu";
$error = 1;} else {
  $_SESSION["error"]["pseudo_connexion"] ="";
  if (!password_verify($password, $connexion["passwd"])) {
    $_SESSION["error"]["passwd_connexion"] = "erreur de mot de passe";
    $error = 1;
  } else {
    $_SESSION["error"]["passwd_connexion"] ="";
  }

}

// redirection vers index 
if (isset($error)) {
header("Location: ../index.php" );
} else {
  $_SESSION["pseudo"] = $pseudo;
  header("Location: ../index.php" );
}
 ?>
