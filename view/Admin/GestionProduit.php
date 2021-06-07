<!-- Affichage des produits dans un tableau -->
<?php
require_once("Fonctions.php");
$connexion = BDDConnexionPDO();

 //////////////// Rercherche des produits /////////////////////////
	  
$lesProduits=$connexion->query("SELECT * FROM produit ORDER BY id_produit, id_illustration"); 
$lesProduits->setFetchMode(PDO::FETCH_OBJ);

$lesProduitss=$connexion->query("SELECT * FROM illustration ORDER BY id_illustration, img_illustration"); 
$lesProduitss->setFetchMode(PDO::FETCH_OBJ); 

?>

<h1 class="txt-center lamarge"> Gestion des produits </h1>
<br/>

<!-- Tableau des produits -->
<table border=1 class="col-12 margeproduit titreadmin">
<tr>           
                    <th> <b> Numéro </th>
                    <th> <b> Désignation </th>
                    <th> <b> Description </th>
                    <th> <b> Prix </th>
                    <th> <b> Numéro Photo </th>
                    <th class="txt-center"> Modifier </th> 
                    <th class="txt-center"> Supprimer </th> 
 </tr>
    <?php
    
	while( $UnProduit = $lesProduits->fetch() ) 
	{ 
        echo "<td>".$UnProduit->id_produit."</td>";
        echo "<td>".$UnProduit->lib_produit."</td>";
        echo "<td>".$UnProduit->desc_produit."</td>";
        echo "<td align='left'> ".$UnProduit->prix_produit." €</td>";
        echo "<td>".$UnProduit->id_illustration."</td>";
  		echo "<td align='center'> <form action='gestionproduitmodif' method='POST'> 
        <input type='hidden' name='num' value='".$UnProduit->id_produit."'>
        <input type='image' src='../asset/images/Modifier.png'>
        </form>";

       // <a href='gestionproduitmodif?num=".$UnProduit->id_produit."'><img src='../asset/images/Modifier.png'></a></td>";
		echo "<td align='center'> <form action='gestionproduitsupp' method='POST'>
        <input type='hidden' name='num' value='".$UnProduit->id_produit."'>
        <input type='image' src='../asset/images/Poubelle.png'>
        </form>
        </a></td> </tr>";
        
	} 
	?>
</table>

<p><a style='text-decoration:none;' href='<?=WEBROOT.'admin/gestionproduitajout'?>'><img src='../asset/images/Ajouter.png'>&nbsp;Ajouter un produit</a></p>

<!-- Tableau des produits -->
<table border=1 class="col-12 margeproduit titreadmin">
<tr>           
                    <th class="txt-center"> <b> Photo </th>
                    <th> <b> Numéro Photo </th>
                    <th> <b> Nom Photo </th>
                    <th class="txt-center"> Supprimer </th> 
 </tr>
    <?php
    
    while( $UnProduit = $lesProduitss->fetch() ) 
    { 
        echo "<tr> <td align='center'> <img src='../asset/images/".$UnProduit->img_illustration."' width='50'> </td>";
        echo "<td>".$UnProduit->id_illustration."</td>";
        echo "<td align='left'> ".$UnProduit->img_illustration."</td>";

       // <a href='gestionproduitmodif?num=".$UnProduit->id_produit."'><img src='../asset/images/Modifier.png'></a></td>";
        echo "<td align='center'> <form action='gestionproduitsuppimage' method='POST'>
        <input type='hidden' name='num' value='".$UnProduit->id_illustration."'>
        <input type='image' src='../asset/images/Poubelle.png'>
        </form>
        </a></td> </tr>";
        
    } 
    ?>
</table>

<p><a style='text-decoration:none; margin-bottom: 30px;' href='<?=WEBROOT.'admin/gestionproduitajoutimage'?>'><img src='../asset/images/Ajouter.png'>&nbsp;Ajouter une photo d'un produit</a></p>

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

