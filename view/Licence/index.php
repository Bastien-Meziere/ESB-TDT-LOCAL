<?php $title = "ES Bonchamp Tdt - Licences"; ?>
<div class="intro-section site-blocks-cover innerpage" style="background-image: url('<?= IMAGE ?>images/signature.jpg');">
  <div class="container">
    <div class="row align-items-center text-center">
      <div class="col-lg-12 mt-5" data-aos="fade-up">
        <h1>Licence</h1>
      </div>
    </div>
  </div>
</div>

<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 mx-auto">
        <div class="titredocuments col-lg-4 mr-auto text-center rectangle">
          <p>Documents nécessaires pour la licence</p>
        <div class="row">
          <div class="documents col-lg-6">
            <i class="icon-medkit"></i>
          </div>
          <div class="documents col-lg-6">
            <p>Le certificat médical</p>
          </div> 
          <div class="documents col-lg-6">
            <i class="icon-camera"></i>
          </div>
          <div class="documents col-lg-6">
            <p>2 photos d'identité (pour nouveau licencié)</p>
          </div>
          <div class="documents col-lg-6">
            <i class="icon-newspaper-o"></i>
          </div>
          <div class="documents col-lg-6">
            <p>Fiche de renseignement</p>
          </div>
        </div>
        </div>
        <div class="titretarif col-lg-6 ml-auto text-center">
            <p>Tarif de la licence</p>
            <div class="tarif">
              <p><?= $ligne->cat_licence ?> <?= $ligne->prix_licence ?> €</p>
              <img src="<?= IMAGE ?>images/<?= $ligne->img_photolicence?>" alt="Licence du club ES Bonchamp Tdt" class="img-fluid">
            </div>
        </div>
      </div>
    </div>
  </div>
</div>