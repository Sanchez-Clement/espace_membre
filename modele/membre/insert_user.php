<?php

function insert_user($pseudo,$passw,$mail,$signature) {
  global $bdd;
  $req = $bdd->prepare('INSERT INTO membre (pseudo, passw, mail, signature,date_inscription) VALUES(:pseudo, :passw, :mail, :signature, CURDATE())');
  $req->execute(array(
  'pseudo' => htmlspecialchars($pseudo),
  'passw' => sah1($passw),
  'mail' => htmlspecialchars($mail) ,
  'signature' => htmlspecialchars($signature),


  ));

}

function insert_avatar($nom_image,$source) {
  global $bdd;
  $req = $bdd->prepare('INSERT INTO avatar (id_membre, nom_image, source) VALUES(:id_membre, :nom_image, :source)');
  $req->execute(array(
  'id_membre' => $bdd -> lastInsertId(),
  'nom_image' => htmlspecialchars($nom_image),
  'source' => htmlspecialchars($source) ,

));
}
