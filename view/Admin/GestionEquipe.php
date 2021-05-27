<!-- Affichage des membres du bureau dans un tableau -->
<?php
require_once("Fonctions.php");
$connexion = BDDConnexionPDO();

 //////////////// Rercherche des membres du bureau /////////////////////////
	  
$lesEquipe=$connexion->query("SELECT * FROM equipe ORDER BY num_equipe, id_photoequipe"); 
$lesEquipe->setFetchMode(PDO::FETCH_OBJ);

$lesEquipes=$connexion->query("SELECT * FROM photoequipe ORDER BY id_photoequipe, img_photoequipe"); 
$lesEquipes->setFetchMode(PDO::FETCH_OBJ); 

?>

<h1 class="lamarge txt-center"> Gestion des équipes (Page Accueil) </h1>

<!-- Tableau des membres des équipes -->
<table border=1 class="col-12 margeproduit">
<tr>           
                    <th> <b> Numéro </th>
                    <th> <b> Description </th>
                    <th class="txt-center"> Modifier </th> 
                    <th class="txt-center"> Supprimer </th> 
 </tr>
    <?php
    
	while( $UnEquipe = $lesEquipe->fetch() ) 
	{ 
         echo "<td>".$UnEquipe->num_equipe."</td>";
         echo "<td>".$UnEquipe->desc_equipe."</td>";
  		echo "<td align='center'> <form action='gestionequipemodif' method='POST'> 
        <input type='hidden' name='num' value='".$UnEquipe->num_equipe."'>
        <input type='image' src='../asset/images/Modifier.png'>
        </form>";

       // <a href='gestionproduitmodif?num=".$UnProduit->id_produit."'><img src='../asset/images/Modifier.png'></a></td>";
		echo "<td align='center'> <form action='gestionequipesupp' method='POST'>
        <input type='hidden' name='num' value='".$UnEquipe->num_equipe."'>
        <input type='image' src='../asset/images/Poubelle.png'>
        </form>
        </a></td> </tr>";
        
	} 
	?>
</table>

<p><a style='text-decoration:none;' href='<?=WEBROOT.'admin/gestionequipeajout'?>'><img src='../asset/images/Ajouter.png'>&nbsp;Ajouter une équipe</a></p>

<!-- Tableau des photos des équipes -->
<table border=1 class="col-12 margeproduit">
<tr>           
                    <th> <b> Numéro Photo </th>
                    <th> <b> Nom Photo </th>
                    <th class="txt-center"> Supprimer </th> 
 </tr>
    <?php
    
    while( $UnEquipe = $lesEquipes->fetch() ) 
    { 
         echo "<td>".$UnEquipe->id_photoequipe."</td>";
         echo "<td>".$UnEquipe->img_photoequipe."</td>";

       // <a href='gestionproduitmodif?num=".$UnProduit->id_produit."'><img src='../asset/images/Modifier.png'></a></td>";
        echo "<td align='center'> <form action='gestionequipesuppimage' method='POST'>
        <input type='hidden' name='num' value='".$UnEquipe->id_photoequipe."'>
        <input type='image' src='../asset/images/Poubelle.png'>
        </form>
        </a></td> </tr>";
        
    } 
    ?>
</table>

<p><a style='text-decoration:none;' href='<?=WEBROOT.'admin/gestionequipeajoutimage'?>'><img src='../asset/images/Ajouter.png'>&nbsp;Ajouter une photo d'une équipe</a></p>

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

