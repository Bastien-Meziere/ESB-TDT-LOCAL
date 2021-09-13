<?php $title = "ES Bonchamp Tdt - Bureau"; ?>
<div class="site-section bg-light">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7">
        <h2 class="site-section-heading font-weight-light text-black text-center bureau">Le bureau</h2>
      </div>
    </div>
  
  <div class="container-fluid">
    <div class="row">
      <?php foreach($variabletrois['lebureau'] as $ligne): ?>
    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 text-center" data-aos="fade-up">
      <img class="img-fluid w-50 rounded-circle mb-4" src="<?= IMAGE ?>images/<?= $ligne->img_photobureau?>" alt="Membre du bureau ES Bonchamp Tdt">
      <h2 class="text-black font-weight-light mb-4"><?= $ligne->nom_bureau ?></h2>
      <h2 class="text-black font-weight-light mb-4"><?= $ligne->role_bureau ?></h2>
      <p class="db mb-4"><?= $ligne->desc_bureau ?></p>
    </div>
      <?php endforeach ?>
    </div>
  </div>
  </div>
</div>