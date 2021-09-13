<?php $title = "ES Bonchamp Tdt - Entraînements"; ?>
<div class="intro-section site-blocks-cover innerpage" style="background-image: url('<?= IMAGE ?>images/entrainement.jpg');">
  <div class="container">
    <div class="row align-items-center text-center">
      <div class="col-lg-12 mt-5" data-aos="fade-up">
        <h1>Entraînements</h1>
      </div>
    </div>
  </div>
</div>

<!-- Tableau des horaires d'entraînements -->
<div class="container-fluid">
  <div class="row lamarge table-responsive">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <table class="table table-striped table-hover">
        <thead class="thead-primary">
          <tr class="text-center">
            <th class="" scope="col"></th>
            <th class="niveau" scope="col">Primaires/Débutants</th>
            <th class="niveau" scope="col">Collégiens Intermédiaires</th>
            <th class="niveau" scope="col">Collégiens/Lycéens Confirmés</th>
            <th class="niveau" scope="col">Seniors</th>
            <th class="niveau" scope="col">Compétitions</th>
          </tr>
        </thead> 
        <tbody class="text-center">
          <tr>
            <th class="semaine" scope="row">Lundi</th>
            <td class="price"></td>
            <td class="price"></td>
            <td class="price"></td>
            <td class="price"></td>
            <td class="price"></td>
          </tr><!-- Fin de la ligne-->
          <tr>
            <th class="semaine" scope="row">Mardi</th>
            <td class="price heure">De 17h00 à 18h30</td>
            <td class="price"></td>
            <td class="price"></td>
            <td class="price heure">De 19h30 à 21h00</td>
            <td class="price"></td>
          </tr><!-- Fin de la ligne-->
          <tr>
          <th class="semaine" scope="row">Mercredi</th>
            <td class="price heure">De 13h30 à 15h00</td>
            <td class="price heure">De 15h00 à 16h30</td>
            <td class="price heure">De 16h30 à 18h00</td>
            <td class="price"></td>
            <td class="price"></td>
          </tr><!-- Fin de la ligne-->
          <tr>
          <th class="semaine" scope="row">Jeudi</th>
            <td class="price"></td>
            <td class="price heure">De 18h30 à 20h00</td>
            <td class="price"></td>
            <td class="price"></td>
            <td class="price"></td>
          </tr><!-- Fin de la ligne-->
          <tr>
          <th class="semaine" scope="row">Vendredi</th>
            <td class="price heure">De 17h00 à 18h30</td>
            <td class="price"></td>
            <td class="price"></td>
            <td class="price"></td>
            <td class="price heure">Championnat Senior (De 20h00 à 01h00)</td>
          </tr><!-- Fin de la ligne-->
          <tr>
          <th class="semaine" scope="row">Samedi</th>
            <td class="price"></td>
            <td class="price"></td>
            <td class="price"></td>
            <td class="price"></td>
            <td class="price heure">Championnat Jeune (De 13h30 à 17h00)</td>
          </tr><!-- Fin de la ligne-->
          <tr>
          <th class="semaine" scope="row">Dimanche</th>
            <td class="price"></td>
            <td class="price"></td>
            <td class="price"></td>
            <td class="price"></td>
            <td class="price"></td>
          </tr><!-- Fin de la ligne-->
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- Fin du tableau des horaires d'entraînements -->

<!-- Entraîneurs du club -->
<div class="container-fluid">
  <div class="row lamarge2">
    <?php foreach($variablequatre['entrainement'] as $ligne): ?>
    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 text-center" data-aos="fade-up">
      <img class="img-fluid w-40 rounded-circle mb-4" src="<?= IMAGE ?>images/<?= $ligne->img_photobureau?>" alt="Entraineur du club ES Bonchamp Tdt">
      <h2 class="text-black font-weight-light mb-4"><?= $ligne->nom_entrainement ?></h2>
      <h3 class="text-black font-weight-light mb-4"><?= $ligne->role_entrainement ?></h3>
      <p class="mb-4"><?= $ligne->desc_entrainement ?></p>
    </div>
    <?php endforeach ?>
  </div>
</div>
<!-- Fin Entraîneurs du club -->