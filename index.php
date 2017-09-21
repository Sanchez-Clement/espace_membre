<?php session_start() ?>
<?php include 'vue/header.php' ?>
<?php  include 'modele/connexion_sql.php';?>

<?php
if(isset($_GET['section']) && $_GET['section']=="adduser"){

  include 'vue/addUser.php';
} else {
  include 'controleur/index.php';
}


include 'vue/footer.php';
?>
