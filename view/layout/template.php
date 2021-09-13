<!DOCTYPE html>
<html lang="fr">
<head>
  <title><?php if (isset($title)) { echo $title; } else { echo 'ES Bonchamp Tdt'; } ?></title>
  <meta charset="utf-8">
  <meta name="description" content="Le site officiel de l'ES Bonchamp tdt. Vous pouvez y retrouver toutes les informations du club : Résultat, Prochain Match, Entraînement, Boutique..">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:300,400,700Muli:300,400">
  <link rel="stylesheet" href="<?= IMAGE ?>fonts/icomoon/style.css">

  <link rel="icon" type="image/ico" href="<?= IMAGE ?>images/favicon-32x32.png">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
  <link rel="stylesheet" href="<?= IMAGE ?>css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= IMAGE ?>css/owl.theme.default.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">

  <link rel="stylesheet" href="<?= IMAGE ?>fonts/flaticon/font/flaticon.css">
  <link rel="preload" href="../asset/fonts/flaticon/font/Flaticon.woff2" as="font" type="font/woff2">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.mb.YTPlayer/3.3.9/css/jquery.mb.YTPlayer.min.css" media="all" type="text/css">

  <link rel="stylesheet" href="<?= IMAGE ?>css/style.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css"/>
  <link rel="preload" as="image" href="../asset/images/table.jpg">
  <link rel="preload" as="image" href="../asset/images/table.jpg" type="image/svg+xml">
  <script src="https://www.google.com/recaptcha/api.js?render=6LfN_lYcAAAAABzg1rl1JAlyVfGSbOHqYrMHYAjK"></script>
  <script>
  grecaptcha.ready(function() {
  grecaptcha.execute('6LfN_lYcAAAAABzg1rl1JAlyVfGSbOHqYrMHYAjK', {action: 'homepage'}).then(function(token) {
      document.getElementById('recaptchaResponse').value = token
  });
  });
  </script>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  <div class="site-wrap">
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <div class="header-top bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-lg-3">
            <a href="<?=WEBROOT.''?>">
              <img src="<?= IMAGE ?>images/logo.png" alt="Logo ES Bonchamp Tdt" class="img-fluid">
            </a>
          </div>
          <div class="col-lg-3 d-none d-lg-block">
            <div class="quick-contact-icons d-flex">
              <div class="icon align-self-start">
                <span class="flaticon-placeholder text-primary"></span>
              </div>
              <div class="text">
                <span class="h4 d-block">Bonchamp-lès-Laval</span>
                <span class="caption-text">53960</span>
              </div>
            </div>
          </div>
          <div class="col-lg-3 d-none d-lg-block">
            <div class="quick-contact-icons d-flex">
              <div class="icon align-self-start">
                <span class="flaticon-call text-primary"></span>
              </div>
              <div class="text">
                <span class="h4 d-block">06 09 87 62 74</span>
              </div>
            </div>
          </div>
          <div class="col-lg-3 d-none d-lg-block">
            <div class="quick-contact-icons d-flex">
              <div class="icon align-self-start">
                <span class="flaticon-email text-primary"></span>
              </div>
              <div class="text">
                <span class="h4 d-block">tdt@es-bonchamp.fr</span>
              </div>
            </div>
          </div>
          <div class="col-6 d-block d-lg-none text-right">
              <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span 
                class="icon-menu h3"></span></a>
          </div>
        </div>
      </div>

      <!--Barre de navigation-->
      <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">
        <div class="container lecentre">
            <div class="mr-auto">
              <nav class="site-navigation position-relative text-right navbar-expand-sm">
                <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
                  <li>
                    <a href="<?=WEBROOT.''?>">Accueil</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      Le Club
                    </a>
                  <div class="dropdown-menu lecentre2">
                    <a class="dropdown-item" href="<?=WEBROOT.'bureau'?>">Bureau</a>
                    <a class="dropdown-item" href="<?=WEBROOT.'salle'?>">Salle</a>
                    <a class="dropdown-item" href="<?=WEBROOT.'entrainements'?>">Entraînements</a>
                    <a class="dropdown-item" href="<?=WEBROOT.'licence'?>">Licence</a>
                    <a class="dropdown-item" href="<?=WEBROOT.'boutique'?>">Boutique</a>
                    <a class="dropdown-item" href="<?=WEBROOT.'evenements'?>">Événements</a>
                  </div>
                  <li><a href="<?=WEBROOT.'competitions'?>">Compétitions</a></li>
                  <li><a href="<?=WEBROOT.'classement'?>">Classement</a></li>
                  <li><a href="<?=WEBROOT.'media'?>">Média</a></li>
                  <li><a href="<?=WEBROOT.'contact'?>">Nous contacter</a></li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Liens Utiles
                      </a>
                    <div class="dropdown-menu lecentre2">
                      <a class="dropdown-item" href="http://www.fftt.com/site/">FFTT</a>
                      <a class="dropdown-item" href="https://tennisdetablepaysdelaloire.org">Ligue TDT Pays de la Loire</a>
                      <a class="dropdown-item" href="https://www.cd53tt.com">Comité TDT de la Mayenne</a>
                    </div>
                   <li>
                    <a href="https://www.es-bonchamp.com">ES Bonchamp</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>

    <main>

<?php 

    //var_dump($_SESSION); 
    //$_SESSION['test']==false;
    echo $content_for_layout 
?>

    </main>

<!-- Footer -->
<div class="footer">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="copyright">
          <a href="https://www.facebook.com/esbonchamptt/"><i class="icon-facebook-square" title="Facebook"></i></a>
            <footer>
            <!-- Copyright -->
            ES Bonchamp Tennis de Table &copy;<script>document.write(new Date().getFullYear());</script> | <a class="connexion" href="<?=WEBROOT.'mentionlegale'?>">Mentions Légales</a> | <a class="connexion" href="<?=WEBROOT.'connexion'?>">Connexion</a>
            <!-- Copyright -->
            </footer>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Fin footer -->

  <!-- Loader -->
  <div id="loader" class="show fullscreen col-12"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#096BDC"/></svg></div>
  <!-- Fin Loader -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.3.2/jquery-migrate.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="<?= SCRIPT ?>owl.carousel.min.js"></script>
  <script src="<?= SCRIPT ?>loader.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/stellar.js/0.6.2/jquery.stellar.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.sticky/1.0.4/jquery.sticky.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mb.YTPlayer/3.3.9/jquery.mb.YTPlayer.min.js"></script>
  <script src="<?= SCRIPT ?>main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Cookie Consent -->
  <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
  <script>
  window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#096bdc"
    },
    "button": {
      "background": "#fff",
      "text": "#096bdc"
    }
  },
  "theme": "classic",
  "position": "bottom-right",
  "content": {
    "message": "L'ES Bonchamp Tennis de table utilise des cookies essentiels pour vous garantir le bon fonctionnement du site.",
    "dismiss": "D'accord",
    "link": "En savoir plus",
    "href": "http://esb-tdt-local.test/mentionlegale"
  }
  });
  </script>
<!-- Fin du Cookie Consent -->
</body>
</html>