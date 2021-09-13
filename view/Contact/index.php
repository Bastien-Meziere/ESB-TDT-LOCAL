<?php
  session_start();
?>
<?php $title = "ES Bonchamp Tdt - Nous contacter"; ?>
<div class="site-section m-top15">
  <div class="container">
      <?php if(array_key_exists('success', $_SESSION)): ?>
        <div class="alert succes">
          Votre message a bien été envoyé
        </div>
      <?php endif; ?>
    <div class="row">
      <form method="POST" action="mail/contact.php">
        <div class="col-md-6 form-group">
          <label class="labelcontact" for="prenom">Prénom *</label>
          <input id="prenom" type="text" name="prenom" required="required" size="200" class="form-control form-control-lg">
        </div>
        <div class="col-md-6 form-group">
          <label class="labelcontact" for="nom">Nom *</label>
          <input id="nom" type="text" name="nom" required="required" size="200" class="form-control form-control-lg">
        </div>
    </div>
    <div class="row">
      <div class="col-md-6 form-group">
        <label class="labelcontact" for="email">Email *</label>
        <input id="email" type="mail" name="email" required="required" class="form-control form-control-lg">
      </div>
      <div class="col-md-6 form-group">
        <label class="labelcontact" for="tel">Téléphone</label>
        <input id="tel" type="tel" name="tel" class="form-control form-control-lg">
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 form-group">
        <label class="labelcontact" for="message">Message *</label>
        <textarea id="message" name="message" required="required" cols="30" rows="12" class="form-control"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-4">
        <div class="champ-obligatoire">
          * : Champ obligatoire
        </div>
      </div>
    </div>
    <input type="hidden" id="recaptchaResponse" name="recaptcha-response">
    <div class="row">
      <div class="col-12">
        <button id="submit" type="submit" class="btn btn-primary rounded-0 px-3 px-5">Envoyer</button>
      </div>
    </div>
    </form>
    <div class="row lamarge2">
      <p>Ce site est protégé par reCAPTCHA et la <a href="https://policies.google.com/privacy?hl=fr" target="_blank">politique de confidentialité</a> et les <a href="https://policies.google.com/terms?hl=fr" target="_blank">conditions d'utilisation</a> de Google s'y appliquent.</p>
    </div>
  </div>
</div>
<?php
  unset($_SESSION['success']);
?>