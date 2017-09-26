<?php
if (!isset($_SESSION["pseudo"])) {
include 'vue/connexion.php';
} else {
include 'vue/index.php';
}?>
