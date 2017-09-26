
<form class="col s12 m6 center-align card" action="controleur/connexion_post.php" method="post">
<div class="input-field">
  <label for="pseudo">Pseudo</label>
  <input type="text" name="pseudo" id="pseudo" value="">
  <?php if (isset($_SESSION["error"]["pseudo_connexion"])): ?>
    <?php echo $_SESSION["error"]["pseudo_connexion"] ?>
  <?php endif; ?>
</div>
<div class="input-field">
  <label for="password">Mot de passe</label>
  <input type="password" name="password" id="password" value="">
  <?php if (isset($_SESSION["error"]["passwd_connexion"])): ?>
    <?php echo $_SESSION["error"]["passwd_connexion"] ?>
  <?php endif; ?>
</div>
<input  class="btn" type="submit" name="" value="Se connecter">
<div class="card-action">
  <a href="index.php?section=adduser">Pas encore inscrit ?</a>
</div>
</form>
