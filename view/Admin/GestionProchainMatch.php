<!-- Affichage des prochains matchs dans un tableau -->
<?php
require_once("Fonctions.php");
$connexion = BDDConnexionPDO();

 //////////////// Rercherche des prochains matchs /////////////////////////
	  
$lesProchainMatch=$connexion->query("SELECT * FROM prochainmatch ORDER BY num_match"); 
$lesProchainMatch->setFetchMode(PDO::FETCH_OBJ); 

?>

<h1 class="txt-center m-top150"> Gestion des prochains matchs </h1>
<!-- Tableau des prochains matchs -->
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
    
	while( $UnProchainMatch = $lesProchainMatch->fetch() ) 
	{ 
         echo "<td>".$UnProchainMatch->num_match."</td>";
         echo "<td>".$UnProchainMatch->lib_match."</td>";
         echo "<td>".$UnProchainMatch->content_match."</td>";
         echo "<td>".$UnProchainMatch->content2_match."</td>";
         echo "<td>".$UnProchainMatch->date_match."</td>";
  		echo "<td align='center'> <form action='gestionprochainmatchmodif' method='POST'> 
        <input type='hidden' name='num' value='".$UnProchainMatch->num_match."'>
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



