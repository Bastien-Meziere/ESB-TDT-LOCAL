<!-- Affichage des derniers résultats dans un tableau -->
<?php
require_once("Fonctions.php");
$connexion = BDDConnexionPDO();

 //////////////// Rercherche des derniers résultats /////////////////////////
	  
$lesResultatMatch=$connexion->query("SELECT * FROM resultatmatch ORDER BY num_resultat"); 
$lesResultatMatch->setFetchMode(PDO::FETCH_OBJ); 
?>

<h1 class="txt-center m-top150"> Gestion des derniers résultats (Page Accueil) </h1>

<!-- Tableau des derniers résultats -->
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
            
            while( $UnResultatMatch = $lesResultatMatch->fetch() ) 
            { 
                echo "<td align='center'>".$UnResultatMatch->num_resultat."</td>";
                echo "<td align='center'>".$UnResultatMatch->lib_resultat."</td>";
                echo "<td align='center'>".$UnResultatMatch->content_resultat."</td>";
                echo "<td align='center'>".$UnResultatMatch->content2_resultat."</td>";
                echo "<td align='center'>".$UnResultatMatch->date_resultat."</td>";
                echo "<td align='center'> <form action='gestionresultatmatchmodif' method='POST'> 
                <input type='hidden' name='num' value='".$UnResultatMatch->num_resultat."'>
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