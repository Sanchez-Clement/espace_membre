<!-- permet de récuperer le profil de la personne connecté -->
<?php
function showProfil() {
  global $bdd;
  $resq = $bdd->prepare('
  SELECT *
  FROM membre m
  INNER JOIN avatar a
  ON m.id = a.id_membre
  WHERE m.pseudo = ?

   ');
  $resq->execute([$_SESSION['pseudo']]);
  $userprofil = $resq->fetchAll() ;
  return $userprofil;
}
