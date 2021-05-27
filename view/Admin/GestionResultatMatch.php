<!-- Affichage des derniers résultats dans un tableau -->
<?php
require_once("Fonctions.php");
$connexion = BDDConnexionPDO();

 //////////////// Rercherche des derniers résultats /////////////////////////
	  
$lesResultatMatch=$connexion->query("SELECT * FROM resultatmatch ORDER BY num_resultat"); 
$lesResultatMatch->setFetchMode(PDO::FETCH_OBJ); 

?>

<h1 class="txt-center m-top150"> Gestion des derniers résultats </h1>

<!-- Tableau des derniers résultats -->
<table border=1 class="col-12 margeproduit">
<tr>           
                    <th> <b> Numéro </th>
                    <th> <b> Désignation </th>
                    <th> <b> Phrase 1 </th>
                    <th> <b> Phrase 2 </th>
                    <th> <b> Date </th>
                    <th class="txt-center"> Modifier </th> 
 </tr>
    <?php
    
	while( $UnResultatMatch = $lesResultatMatch->fetch() ) 
	{ 
         echo "<td>".$UnResultatMatch->num_resultat."</td>";
         echo "<td>".$UnResultatMatch->lib_resultat."</td>";
         echo "<td>".$UnResultatMatch->content_resultat."</td>";
         echo "<td>".$UnResultatMatch->content2_resultat."</td>";
         echo "<td>".$UnResultatMatch->date_resultat."</td>";
  		echo "<td align='center'> <form action='gestionresultatmatchmodif' method='POST'> 
        <input type='hidden' name='num' value='".$UnResultatMatch->num_resultat."'>
        <input type='image' src='../asset/images/Modifier.png'>
        </form>";

       // <a href='gestionproduitmodif?num=".$UnProduit->id_produit."'><img src='../asset/images/Modifier.png'></a></td>";
		
        
    
        
	} 
	?>
</table>

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


