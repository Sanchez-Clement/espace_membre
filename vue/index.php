<?php include "modele/membre/get_profil.php" ?>
<?php
$userprofil = showProfil();

 ?>

<section class="col s12 m6">
  <h4 class="header"><?php echo $userprofil[0]["pseudo"] ?></h4>

<figure class="card horizontal">
  <div class="card-image">
          <img src="img/<?php echo $userprofil[0]['nom_image'] ?>">
  </div>
  <div class="card-stacked">
      <div class="card-content">
          <p><?php echo $userprofil[0]['signature'] ?></p>
      </div>
      <div class="card-action">
          <p>Inscrit depuis le : <?php echo $userprofil[0]['date_inscription'] ?></p>
          <a href="controleur/logout.php" class="btn">Deconnecter</a>
      </div>
    </div>

</figure>
</section>
