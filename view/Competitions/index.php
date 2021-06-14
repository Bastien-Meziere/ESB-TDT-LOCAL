<?php $title = "ES Bonchamp Tdt - Compétitions"; ?>
<div class="intro-section site-blocks-cover innerpage" style="background-image: url('<?= IMAGE ?>images/trophee.jpg');">
  <div class="container">
    <div class="row align-items-center text-center">
      <div class="col-lg-12 mt-5" data-aos="fade-up">
        <h1>Compétitions</h1>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <?php
          foreach($variabletreize['competition'] as $ligne) {
    ?>
    <div class="col-md-4 ml-auto mr-auto center">
      <h1 class="section-subtitle7 titrechampionnat"><?= $ligne->desc_compet ?></h1>
    </div>
    <?php } ?>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <?php
          foreach($variabletreize['competition'] as $ligne) {
    ?>
    <div class="col-12">
      <div class="site-section services-1-wrap">
        <div class="container">
            <div class="lamargebas" style="position:center; width:100%; height:700px; z-index:1; visibility: visible">
              <iframe name ="championnat" src="<?= IMAGE ?>images/<?= $ligne->doc_photocompet?>" scrolling="yes" height="100%" width="100%" frameborder="yes"></iframe>
            </div>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>
</div>

<!-- Classement des poules -->
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <div class="site-section services-1-wrap txt-center">
        <div class="mb-5 justify-content center">
          <h3 class="section-subtitle7 titrechampionnat">Phase 1</h3>
            <a href="http://www.fftt.com/monclub/spid_equipe/chp_div.php?organisme_pere=53&cx_poule=6503&D1=3716&virtuel=0" target="_blank" class="txt-poule">Équipe 1 (Poule B)</a><br />
            <a href="http://www.fftt.com/monclub/spid_equipe/chp_div.php?organisme_pere=53&cx_poule=12682&D1=4358&virtuel=0" target="_blank" class="txt-poule">Équipe 2 (Poule C)</a>
        </div>
      </div>
    </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="site-section services-1-wrap txt-center">
          <div class="mb-5 justify-content center">
            <h3 class="section-subtitle7 titrechampionnat">Phase 2</h3>
              <a href="#" target="_blank" class="txt-poule">Équipe 1 (Poule ?)</a><br />
              <a href="#" target="_blank" class="txt-poule">Équipe 2 (Poule ?)</a>
          </div>
        </div>
      </div>
  </div>
</div>
<!-- Fin Classement des poules -->