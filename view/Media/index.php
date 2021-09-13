<?php $title = "ES Bonchamp Tdt - Média"; ?>
<div class="intro-section site-blocks-cover innerpage" style="background-image: url('<?= IMAGE ?>images/presse.jpg');">
  <div class="container">
    <div class="row align-items-center text-center">
      <div class="col-lg-12 mt-5" data-aos="fade-up">
        <h1>Média</h1>
      </div>
    </div>
  </div>
</div>
  
<!-- Les titres + les images sur la page "Média" -->
<div class="container-fluid">
  <div class="row">
    <?php foreach($variablequinze['mediaa'] as $ligne): ?>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center">
    <div class="site-section services-1-wrap">
      <h1 class="section-subtitle5 ml-auto mr-auto center"><?= $ligne->nom_media ?></h1>
      <div class="person">
        <a href="<?= IMAGE ?>images/<?= $ligne->img_photomedia?>" target="_blank"><img src="<?= IMAGE ?>images/<?= $ligne->img_photomedia?>" class="img-fluid" alt="Presse ES Bonchamp Tdt"></a>
      </div>
    </div>
  </div>
    <?php endforeach ?>
  </div>
</div>
<!-- Fin Les titres + les images sur la page "Média" -->