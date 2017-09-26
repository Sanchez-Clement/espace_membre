<?php
function updateProfil($nvpseudo,$nvpasswd,$nvmail,$nvsignature) {
  global $bdd;
  $req = $bdd->prepare('UPDATE membre SET pseudo = :nvpseudo, passwd = :nvpasswd, mail = :nvmail, signature = :nvsignature WHERE id = :idmembre');
$req->execute(array(
	'nvpseudo' => htmlspecialchars($nvpseudo),
	'nvpasswd' => sha1($nvpasswd),
	'nvmail' => htmlspecialchars($nvmail),
  'nvsignature' => htmlspecialchars($nvsignature),
  'idmembre' => $_SESSION['id']
	));



}
