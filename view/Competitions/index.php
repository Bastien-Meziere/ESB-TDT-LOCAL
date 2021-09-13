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
    <?php foreach($variabletreize['competition'] as $ligne): ?>
    <div class="col-md-4 ml-auto mr-auto center">
      <h1 class="section-subtitle7 titrechampionnat"><?= $ligne->desc_compet ?></h1>
    </div>
    <?php endforeach ?>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <?php foreach($variabletreize['competition'] as $ligne): ?>
    <div class="col-12">
      <div class="site-section services-1-wrap">
            <div class="lamargebas" style="position:center; width:100%; height:700px; z-index:1; visibility: visible">
              <iframe title="Document Championnat" name ="championnat" src="<?= IMAGE ?>images/<?= $ligne->doc_photocompet?>" scrolling="yes" height="100%" width="100%" frameborder="yes"></iframe>
            </div>
      </div>
    </div>
    <?php endforeach ?>
  </div>
</div>