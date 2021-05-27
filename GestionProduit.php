<!-- Affichage des fleurs dans un tableau -->
<?php
require_once("Fonctions.php");
$connexion = BDDConnexionPDO();

 //////////////// Rercherche des produits /////////////////////////
	  
$lesProduits=$connexion->query("SELECT * FROM produit ORDER BY id_produit, id_illustration"); 
$lesProduits->setFetchMode(PDO::FETCH_OBJ); 
?>

<h1> Gestion des produits </h1>
<br/>

<!-- Tableau des produits -->
<table border=1>
<tr>           
                    <th> <b> Photo </th>
                    <th> <b> Numéro </th>
                    <th> <b> Désignation </th>
                    <th> <b> Description </th>
                    <th> <b> Prix </th>
                    <th> Modifier </th> 
                    <th> Supprimer </th> 
 </tr>
    <?php
	while( $UnProduit = $lesProduits->fetch() ) 
	{ 
         echo "<tr> <td align='center'> <img src='asset/images/illustration/".$UnProduit->id_illustration."' width='40'> </td>";
         echo "<td>".$UnProduit->id_produit."</td>";
         echo "<td>".$UnProduit->lib_produit."</td>";
         echo "<td>".$UnProduit->desc_produit."</td>";
         echo "<td align='right'> ".$UnProduit->prix_produit." €</td>";
  		echo "<td align='center'> <a href='GestionProduitModif.php?num=".$UnProduit->id_produit."'><img src='asset/images/Modifier.png'></a></td>";
		echo "<td align='center'> <a href='GestionProduitSupp.php?num=".$UnProduit->id_produit."'><img src='asset/images/Poubelle.png'></a></td> </tr>";
	} 
	?>
</table>

<p><a style='text-decoration:none;' href='GestionProduitAjout.php'><img border=0 src='asset/images/Ajouter.png'>&nbsp;Ajouter un produit</a></p>