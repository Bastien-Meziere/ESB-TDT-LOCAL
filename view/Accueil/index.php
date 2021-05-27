<?php $title = "ES Bonchamp Tdt - Accueil"; ?>
<!-- Slides -->
<div class="hero-slide owl-carousel site-blocks-cover">
  <div class="intro-section" style="background-image: url('<?= IMAGE ?>images/table.jpg');">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
          <h1>Bienvenue sur le site de l'ES Bonchamp Tennis de table !</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="intro-section" style="background-image: url('<?= IMAGE ?>images/vainqueur.jpg');">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
          <h1>Tournoi de Bonchamp le 09 Avril 2021 !</h1>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Fin des Slides -->
    
<!-- Section Derniers résultats, Prochains matchs -->
<div class="container-fluid">
  <div class="row">
    <?php
      foreach($variable['resultatmatch'] as $ligne) {
            
    ?>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="site-section services-1-wrap">
        <h1 class="section-subtitle5 ml-auto mr-auto center">Derniers résultats</h1>
          <div class="mb-5 justify-content center">
              <div class="h7"><h7><?= $ligne->date_resultat ?></h7></div>
                <div class="section-title">
                  <p><?= $ligne->content_resultat ?></p>
                  <p><?= $ligne->content2_resultat ?></p>
                </div>
          </div>
      </div>
    </div>
    <?php } ?>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="site-section services-1-wrap center">
        <?php
          foreach($variabledeux['prochainmatch'] as $ligne) {
          
        ?>
        <h1 class="section-subtitle5 ml-auto mr-auto center">Prochains matchs</h1>
          <div class="mb-5 justify-content center">
              <div class="h7"><h7><?= $ligne->date_match ?></h7></div>
                <div class="section-title">
                  <p><?= $ligne->content_match ?></p>
                  <p><?= $ligne->content2_match ?></p>
                </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
</div>
<!-- Fin Section Derniers résultats, Prochains matchs -->

<!-- Section Photo d'équipe -->
<div class="container-fluid">
  <div class="row">
    <?php
      foreach($variableonze['equipe'] as $ligne) {
      
    ?>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <div class="site-section services-1-wrap">
        <h1 class="section-subtitle6 ml-auto mr-auto center"><?= $ligne->desc_equipe ?></h1>
            <div class="mb-5 justify-content text-center">
                <img class="photod2 img-fluid" src="<?= IMAGE ?>images/<?= $ligne->img_photoequipe?>" alt="Equipe du club" >
            </div>
      </div>
    </div>
    <?php } ?>
  </div>
</div>
<!-- Fin Section Photo d'équipe -->

<!-- Infos du club -->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-4 ml-auto mr-auto center">
      <h1 class="section-subtitle7">Infos du club</h1>
    </div>
  </div>
  </div>

  <div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <div class="site-section services-1-wrap center-block">
        <div class="mb-5 justify-content center">
            <video class="video1 img-fluid" src="<?= IMAGE ?>images/entrainement.mp4" controls width="500" poster="<?= IMAGE ?>images/table.png"></video>
              <p class="p1">Entraînement Mardi soir</p>
              <p class="p2">Voir <a href="<?=WEBROOT.'entrainements'?>" class="badge badge-danger"> Entraînements</a></p>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <div class="site-section services-1-wrap center-block">
        <div class="mb-5 justify-content center">
          <a href="http://www.es-bonchamp.fr/Plan/Plan-01.htm"><img class="plan img-fluid" src="<?= IMAGE ?>images/plantdt.png" alt="es-bonchamp.fr" width="530"><h2 class="p1">Plan de situation de la salle de TDT</h2></a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Fin Infos du club -->