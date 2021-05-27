<?php $title = "ES Bonchamp Tdt - Boutique"; ?>
<div class="intro-section site-blocks-cover innerpage" style="background-image: url('<?= IMAGE ?>images/boutique.png');">
  <div class="container">
    <div class="row align-items-center text-center">
      <div class="col-lg-12 mt-5" data-aos="fade-up">
        <h1>Boutique</h1>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 text-center">
      <h2 class="titreadmin tailledutexte section-heading text-uppercase margeproduit">Les produits du club</h2>
    </div>
  </div>
</div>

<section class="bg-light page-section" id="blague_detail">
  <div class="container">
    <div class="row">
      <?php 
          foreach($variable['produit'] as $ligne){
      ?>
    <div class="selection col-md-4 col-lg-4 col-sm-4 col-xs-12">
      <article>
        <h2 class="titreadmin text-center"><?= $ligne->lib_produit ?></h2>
        <p class="text-center"><img class="img-fluid2" src="<?= IMAGE ?>images/<?= $ligne->img_illustration?>" alt="<?= $ligne->lib_produit ?>" /></p>
        <p class="titreadmin tp text-center"><?= $ligne->desc_produit ?></p>
        <p class="text-center"><span class="badge badge-danger" style="font-size:18px"><?= $prix=($ligne->prix_produit!=null)?$ligne->prix_produit:0 ?> &euro; </span></p>
      </article>
    </div><br>
      <?php } ?>
    </div>
  </div>
</section>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 text-center margeproduit">
      <h4 class="titreadmin tailledutexte">Pour passer commande ou se renseigner, veuillez nous contacter : tresorier.tdt@es-bonchamp.fr</h4>
    </div>
  </div>
</div>