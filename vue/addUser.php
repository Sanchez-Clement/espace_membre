<form class="col s12 m6 center" action="controleur/addUser_post.php" method="post" enctype="multipart/form-data">
  <div class="input-field">


  <label for="pseudo">Pseudo</label>
  <input type="text" name="pseudo" id="pseudo" value="" required>

  </div>
    <div class="input-field">
  <label for="mail">Mail</label>
  <input type="text" name="mail" id='mail' value="" required>
  <?php if(isset($_SESSION["error"]["mail_register"])) { echo $_SESSION["error"]["mail_register"];} ?>
    </div>
    <div class="input-field">
  <label for="password1">password</label>
  <input type="password" name="password1" id="password1" value="" required>
    </div>
    <div class="input-field">
  <label for="password2">Retapez votre password</label>
  <input type="password" name="password2"id='password2' value="" required>
  <?php if (isset($_SESSION["error"]["password_register"])) { echo $_SESSION["error"]["password_register"];} ?>
    </div>
    <div class="input-field">
      <label for="signature">Signature :</label>
  <input type="text" name="signature" id="signature" value="" required>
    </div>
    <div class="input-field">
      <label for="avatar">Avatar</label>
      <input type="file" name="avatar" id="avatar" value="" required>
      <?php if (isset($_SESSION["error"]["avatar_register"])) { echo $_SESSION["error"]["avatar_register"];}; ?>
    </div>
    <input type="submit" name="" value="Créer compte">
</form>
