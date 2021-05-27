<?php $title = "ES Bonchamp Tdt - Salle"; ?>
<div class="site-section bg-light">
  <div class="container">
    <div class="row justify-content-center text-center mb-5 section-2-title">
      <div class="col-md-6">
        <h2 class="mb-4 salle">Salle</h2>
          <p class="taillesalle">Différentes photos de la salle de tennis de table de l'ES Bonchamp</p>
      </div>
    </div>
    <div class="site-section">
      <div class="container">
        <?php
              foreach($variabledix['lasalle'] as $ligne) {
        ?>
        <div class="row">
          <div class="lamarge2 col-lg-6 mb-5 mb-lg-0 order-lg-2">
            <img src="<?= IMAGE ?>images/<?= $ligne->img_photosalle?>" alt="Salle" class="img-fluid1">
          </div>
          <div class="margeproduit col-lg-4 mr-auto rectangle">
            <div class="col-12">
              <h2 class="taillecoin"><?= $ligne->titre_salle ?></h2>
                <p class="taillepara"><?= $ligne->desc_salle ?></p>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
</div>