<?php
function connexion($pseudo){
  global $bdd;
  $reponse = $bdd->prepare('SELECT pseudo, passwd FROM membre WHERE pseudo = :pseudo');
  $reponse->execute(array(
'pseudo' => $pseudo,
// 'passwd' => $passwd
));

$connexion = $reponse->fetch();

return $connexion;
}
