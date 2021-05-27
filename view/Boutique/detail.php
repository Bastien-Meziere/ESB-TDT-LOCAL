<section class="bg-light page-section" id="blague_detail">
    <div class="container">
    	<div class="row">
		<?php 
        foreach($variable['produit'] as $ligne){
        ?>
			<div class="selection col-md-4 col-lg-4 col-sm-4 col-xs-12">
                <article>
                    <h2 class="text-center"><?= $ligne->lib_produit ?></h2>
                    <p class="text-center"><img class="img-fluid" src="<?= IMAGE ?>images/illustration/<?= $ligne->images_illustration?>" alt="<?= $ligne->lib_produit ?>" /></p>
                    <p><?= $ligne->desc_produit ?></p>
                    <p class="text-center"><span class="badge badge-warning" style="font-size:12px"><?= $prix=($ligne->prix_produit!=null)?$ligne->prix_produit:0 ?> &euro; </span></p>
                </article>
			</div><br>
		<?php } ?>
		</div>
	</div>
</section>


<!-- Portfolio Grid -->
  <section class="bg-light page-section" id="blague">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Les produits</h2>
        </div>
      </div>
      
      <div class="row">
      
      <!-- Demarrage de la boucle -->
      <?php  foreach($variable['produit'] as $ligne ){ 
     
      ?>
          
        <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item cadre">
          <a class="portfolio-link" data-toggle="modal" href="<?= WEBROOT.'boutique/detail/'.$ligne->id_produit ?>">
            
            <img class="img-fluid" src="<?= IMAGE ?>images/illustration/<?= $ligne->images_illustration?>" alt="<?= $ligne->lib_produit ?>">
          </a>
          <div class="portfolio-caption">
            <h4><?= $ligne->lib_produit ?></h4>
            
          </div>
        </div>
     <?php  
     
      } ?>
     <!-- fin de la boucle -->
        
        
      </div>
    </div>
  </section>