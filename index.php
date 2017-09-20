<?php session_start() ?>
<?php include 'vue/header.php' ?>
<?php  include 'modele/connexion_sql.php';?>

<?php
if (!isset($_SESSION["pseudo"])) {
include 'vue/connexion.php';
} else {
include 'vue/profil.php';
} ?>
<?php include 'vue/footer.php' ?>
