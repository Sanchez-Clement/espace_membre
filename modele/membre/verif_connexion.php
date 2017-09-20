<?php
function connexion($pseudo,$passwd){
  global $bdd;
  $reponse = $bdd->prepare('SELECT pseudo, passwd FROM membre WHERE pseudo = :pseudo AND passwd = :passwd');
  $reponse->execute(array(
'pseudo' => htmlspecialchars($pseudo),
'passwords' => sha1($passwd)
));

$connexion = $reponse->fetch();

return $connexion;
}
