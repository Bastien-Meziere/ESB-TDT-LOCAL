<?php $title = "ES Bonchamp Tdt - Connexion"; ?>
 <!-- Page d'erreur lors d'une tentative de connexion sur la page d'administration du site -->
<section class="page-section lamarge" id="connect">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="titreconnexion section-heading text-uppercase">Se connecter en tant qu'Administrateur</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <p class="faux margeproduit">Mot de passe ou nom d'utilisateur incorrect !</p>
      </div>
    </div>
      <div class="row">
        <div class="col-lg-12 ">
          <form id="contactForm" name="sentMessage" method="POST" action="<?= WEBROOT.'seconnecter/connect' ?>" >
            <div class="row">
              <div class="col-md-12 col-xs-12">
                <div class="form-group">
                  <input class="form-control" id="login" name="login" type="text" placeholder="Votre nom d'utilisateur *" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="mdp" name="mdp" type="password" placeholder="Votre mot de passe *" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 col-xs-12 text-center lamargetrois">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Se connecter</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Fin Page d'erreur lors d'une tentative de connexion sur la page d'administration du site -->