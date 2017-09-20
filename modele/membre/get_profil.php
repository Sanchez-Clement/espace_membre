<?php
function showProfil() {
  $resq = $bdd->prepare('
  SELECT *
  FROM membre m
  INNER JOIN avatar a
  ON m.id = a.id_membre
  WHERE m.id = ?

   ');
  $resq->execute([$_SESSION['id']]);
  $userprofil = $resq->fetchAll() ;
  return $userprofil;
}
