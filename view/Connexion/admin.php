<?php
    session_start();
?>
<?php $title = "ES Bonchamp Tdt - Administration"; ?>
 <!-- Page d'administration du site -->
<section class="page-section lamarge" id="commande">
    <div class="container">
    	<div class="row">
    		<div class="col-12 text-center">
    			<h2 class="titreadmin lamargetrois">Bienvenue sur la page Admin !</h2>
    		</div>
    	</div>
        <div class="row">
            <div class="col-12 text-center">
                <div class="row">
                    <a href="<?=WEBROOT.'formulaireDoc'?>">-> Ajouter un document</a>
                </div>
                <div class="row">
                    <a href="<?=WEBROOT.'formulaireImage'?>">-> Ajouter une image</a>
                </div>
                <div class="row">
                    <a href="<?=WEBROOT.'admin/gestionproduit'?>">-> Gérer les produits (Boutique)</a>
                </div>
                <div class="row">
                    <a href="<?=WEBROOT.'admin/gestionresultatmatch'?>">-> Gérer les derniers résultats (Accueil)</a>
                </div>
                <div class="row">
                    <a href="<?=WEBROOT.'admin/gestionprochainmatch'?>">-> Gérer les prochains matchs (Accueil)</a>
                </div>
                <div class="row">
                    <a href="<?=WEBROOT.'admin/gestionbureau'?>">-> Gérer les membres du bureau (Bureau)</a>
                </div>
                <div class="row">
                    <a href="<?=WEBROOT.'admin/gestionentrainement'?>">-> Gérer les entraîneurs (Entraînements)</a>
                </div>
                <div class="row">
                    <a href="<?=WEBROOT.'admin/gestionsalle'?>">-> Gérer les images/textes de la salle (Salle)</a>
                </div>
                <div class="row">
                    <a href="<?=WEBROOT.'admin/gestionprixlicence'?>">-> Gérer le prix des licences (Licences)</a>
                </div>
                <div class="row">
                    <a href="<?=WEBROOT.'admin/gestionequipe'?>">-> Gérer les photos d'équipe (Accueil)</a>
                </div>
                <div class="row">
                    <a href="<?=WEBROOT.'admin/gestioncompet'?>">-> Gérer le tableau des championnats (Compétitions)</a>
                </div>
                <div class="row">
                    <a href="<?=WEBROOT.'admin/gestionmedia'?>">-> Gérer les médias (Média)</a>
                </div>
                <div class="row lamargetrois">
                    <a href="<?=WEBROOT.'admin/gestionevenement'?>">-> Gérer les événements (Événements)</a>
                </div>

                <!-- Bouton de déconnexion -->
                <form>
                    <button class="btn btn-primary lamargetrois" type="submit" formaction="<?=WEBROOT.'connexion/logout'?>">Se déconnecter</button>
                </form>
                <!-- Fin Bouton de déconnexion-->

                <?php 

                ?>
            </div>
        </div>
    </div>
</section>
<!-- Fin Page d'administration du site -->