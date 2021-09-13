<?php $title = "ES Bonchamp Tdt - Accueil"; ?>
<!-- Slides -->
<div class="hero-slide owl-carousel site-blocks-cover">
<?php foreach($variablequarante['slide'] as $ligne): ?>
  <div class="intro-section" style="background-image: url('<?= IMAGE ?>images/<?= $ligne->img_photoslide?>');">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
          	<h1 class="lamargetrois"><?= $ligne->contenu1_slide ?></h1>
            <h1 class="lamargetrois couleurrouge"><?= $ligne->contenu2_slide ?></h1>
			<h3 class="texte-resultat-prochain"><?= $ligne->contenu3_slide ?></h3>
			<h3 class="texte-resultat-prochain"><?= $ligne->contenu4_slide ?></h3>
        </div>
      </div>
    </div>
  </div>
<?php endforeach ?>
</div>
<!-- Fin des Slides -->

<!-- Section Photo d'équipe -->
<div class="container-fluid margehaut100">
  <div class="row">
    <?php foreach($variableonze['equipe'] as $ligne): ?>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <div class="site-section services-1-wrap">
        <h1 class="section-subtitle6 ml-auto mr-auto center"><?= $ligne->desc_equipe ?></h1>
            <div class="mb-5 justify-content text-center">
                <img class="photod2 img-fluid" src="<?= IMAGE ?>images/<?= $ligne->img_photoequipe?>" alt="Equipe ES Bonchamp Tdt" >
            </div>
      </div>
    </div>
    <?php endforeach ?>
  </div>
</div>
<!-- Fin Section Photo d'équipe -->

<!-- Infos du club -->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-4 ml-auto mr-auto center">
      <h1 class="section-subtitle7">Annexes du club</h1>
    </div>
  </div>
  </div>

  <div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <div class="site-section services-1-wrap txt-center">
        <div class="mb-5 justify-content center">
            <video class="video1 img-fluid" src="<?= IMAGE ?>images/entrainement.mp4" controls width="500"></video>
              <p class="p1">Entraînement Mardi soir</p>
              <p class="p2">Voir <a href="<?=WEBROOT.'entrainements'?>" class="badge badge-danger"> Entraînements</a></p>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <div class="site-section services-1-wrap txt-center">
        <div class="mb-5 justify-content center">
          <a href="http://www.es-bonchamp.fr/Plan/Plan-01.htm"><img class="img-fluid" src="<?= IMAGE ?>images/plantdt.png" alt="Plan ES Bonchamp"><h2 class="p1">Plan de situation de la salle de TDT</h2></a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Fin Infos du club -->