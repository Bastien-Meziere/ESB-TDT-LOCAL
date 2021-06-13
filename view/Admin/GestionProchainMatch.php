<!-- Affichage des prochains matchs dans un tableau -->
<?php
require_once("Fonctions.php");
$connexion = BDDConnexionPDO();

 //////////////// Rercherche des prochains matchs /////////////////////////
	  
$lesProchainMatch=$connexion->query("SELECT * FROM prochainmatch ORDER BY num_match"); 
$lesProchainMatch->setFetchMode(PDO::FETCH_OBJ); 
?>

<h1 class="txt-center m-top150"> Gestion des prochains matchs (Page Accueil) </h1>

<!-- Tableau des prochains matchs -->
<div class="container-fluid">
    <div class="row lamarge table-responsive">
        <table class="col-12 margeproduit table table-striped table-hover">
        <tr>           
                            <th class="txt-center"> <b> Numéro </th>
                            <th class="txt-center"> <b> Désignation </th>
                            <th class="txt-center"> <b> Équipe 1 </th>
                            <th class="txt-center"> <b> Équipe 2 </th>
                            <th class="txt-center"> <b> Date </th>
                            <th class="txt-center"> Modifier </th> 
        </tr>
            <?php
            
            while( $UnProchainMatch = $lesProchainMatch->fetch() ) 
            { 
                echo "<td align='center'>".$UnProchainMatch->num_match."</td>";
                echo "<td align='center'>".$UnProchainMatch->lib_match."</td>";
                echo "<td align='center'>".$UnProchainMatch->content_match."</td>";
                echo "<td align='center'>".$UnProchainMatch->content2_match."</td>";
                echo "<td align='center'>".$UnProchainMatch->date_match."</td>";
                echo "<td align='center'> <form action='gestionprochainmatchmodif' method='POST'> 
                <input type='hidden' name='num' value='".$UnProchainMatch->num_match."'>
                <input type='image' src='../asset/images/Modifier.png'>
                </form>";

            // <a href='gestionproduitmodif?num=".$UnProduit->id_produit."'><img src='../asset/images/Modifier.png'></a></td>";

            } 
            ?>
        </table>
    </div>
</div>

<!-- Bouton de retour -->
<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <form>
                <button class="btn btn-primary lamargetrois" type="submit" formaction="<?=WEBROOT.'seconnecter/retour'?>">Retour</button>
            </form>
        </div>
    </div>
</div>
<!-- Fin Bouton de retour-->