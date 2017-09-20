<?php
session_start();
include '../modele/connexion_sql.php';

 $pseudo = htmlspecialchars($_POST["pseudo"]);
 $passw = htmlspecialchars($_POST["password1"]);
 $password2 = htmlspecialchars($_POST["password2"]);
 $mail = htmlspecialchars($_POST["mail"]);
 $signature = htmlspecialchars($_POST["signature"]);
 $extension = ['image/jpg', 'image/png', 'image/jpeg','image/svg' ];


if ($passw != $password2) {
  $_SESSION["error"]["password_register"] = "Mot de pass différent";
  $error = 1;
} else { $_SESSION["error"]["password_register"] ="";
$passw = password_hash($passw,PASSWORD_BCRYPT);};

if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $mail)) {
    $_SESSION["error"]["mail_register"] ="";

} else { $_SESSION["error"]["mail_register"] = "format non conforme !";
$error = 1;} ;

if (!in_array($_FILES["avatar"]["type"], $extension)) {
  $_SESSION["error"]["avatar_register"] ="type de fichier non accepté";
  $error = 1;
} elseif ($_FILES["avatar"]["size"] > 1000000) {
$_SESSION["error"]["avatar_register"] = "Fichier trop volumineux";
$error = 1;
} else { $_SESSION["error"]["avatar_register"] = "";};

if (isset($error)) {
header("Location: ../index.php" );


} else {
  $_SESSION["pseudo"] = $pseudo;
  include '../modele/membre/insert_user.php';
  insert_user($pseudo,$passw,$mail,$signature);
  insert_avatar($_FILES["avatar"]["name"],$_FILES["avatar"]["type"]);
  $target_file = "../img/" .$_FILES['avatar']['name'] ;

  move_uploaded_file($_FILES['avatar']['tmp_name'], $target_file);
  header("Location: ../index.php" );
}

// header("Location: index.php" );
