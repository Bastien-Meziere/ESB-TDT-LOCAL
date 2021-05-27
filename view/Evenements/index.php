<?php $title = "ES Bonchamp Tdt - Événements"; ?>
<div class="intro-section site-blocks-cover innerpage" style="background-image: url('<?= IMAGE ?>images/événements.jpg');">
  <div class="container">
    <div class="row align-items-center text-center">
      <div class="col-lg-12 mt-5" data-aos="fade-up">
        <h1>Événements</h1>
        <h1>à venir</h1>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <?php
          foreach($variablequatorze['evenement'] as $ligne) {
    ?>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mb-lg-0 text-center">
      <div class="rectangle2">
        <div class="site-section services-1-wrap">
          <figure>
            <img class="affichetournoi img-fluid" src="<?= IMAGE ?>images/<?= $ligne->img_photoevenement?>" >
          </figure>
          <p class="jourj"><?= $ligne->desc_evenement ?></p>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>
</div>