<?php
// ajoute utilisateur dans bdd

function insert_user($pseudo,$passw,$mail,$signature) {
  global $bdd;
  $req = $bdd->prepare('INSERT INTO membre (pseudo, passwd, mail, signature,date_inscription) VALUES(:pseudo, :passwd, :mail, :signature, CURDATE())');
  $req->execute(array(
  'pseudo' => $pseudo ,
  'passwd' => $passw,
  'mail' => $mail ,
  'signature' => $signature,


  ));

}
// ajojute avatar lié à utilisateur dans bdd
function insert_avatar($nom_image,$source) {
  global $bdd;
  $req = $bdd->prepare('INSERT INTO avatar (id_membre, nom_image, source) VALUES(:id_membre, :nom_image, :source)');
  $req->execute(array(
  'id_membre' => $bdd -> lastInsertId(),
  'nom_image' => htmlspecialchars($nom_image),
  'source' => htmlspecialchars($source) ,

));
}
