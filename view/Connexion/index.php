<?php $title = "ES Bonchamp Tdt - Connexion"; ?>
<?php
  session_start();
?>
 <!-- Formulaire de connexion -->
<section class="page-section lamarge" id="connect">
  <div class="container">
  <?php if(array_key_exists('danger', $_SESSION)): ?>
    <div class="alert faux">
      Nom d'utilisateur ou mot de passe incorrect !
    </div>
  <?php endif; ?>
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="titreconnexion section-heading text-uppercase">Se connecter en tant qu'Administrateur</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 ">
        <form id="contactForm" name="sentMessage" method="POST" action="<?= WEBROOT.'connexion/connect' ?>" >
          <div class="row">
            <div class="col-md-12 col-xs-12">
              <div class="form-group">
                <input class="form-control" id="login" name="login" type="text" placeholder="Votre nom d'utilisateur *" required="required">
              </div>
              <div class="form-group">
                <input class="form-control" id="mdp" name="mdp" type="password" placeholder="Votre mot de passe *" required="required">
              </div>
              <div class="col-lg-12 col-xs-12 text-center lamargetrois">
                <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary m-top30" type="submit">Se connecter</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- Fin Formulaire de connexion -->
<?php
  unset($_SESSION['danger']);
?>