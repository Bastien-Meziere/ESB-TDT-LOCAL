
<?php
require_once("Fonctions.php");
$connexion = BDDConnexionPDO();

if (!isset($_POST['Ref']))
{

  // Affichage de la news dans un formulaire 
	$lesProduits=$connexion->prepare("SELECT * FROM produit f WHERE id_produit= ? "); 
	$lesProduits->execute(array( $_GET['num'] ));
	$UnProduit=$lesProduits->fetch(PDO::FETCH_OBJ);
	?>

	<form method='POST' action='GestionProduitSupp.php'>
        <table  width="95%" border="1" cellspacing="0" cellpadding="4">
           <caption>Suppression d'un produit </caption>
            <thead> <tr>  <th> <b> Numéro </th> <td> <?php echo $UnProduit->id_produit; ?> </td> </tr>
                    <tr>  <th> <b> Désignation </th>  <td> <?php echo $UnProduit->lib_produit;?> </td> </tr> 
                    <tr>  <th> <b> Description </th>  <td> <?php echo $UnProduit->desc_produit;?> </td> </tr>
                    <tr>  <th> <b> Prix </th>  <td> <?php echo preg_replace('/^(.{4})-(.{2})-(.{2})$/','$3/$2/$1', $UnProduit->prix_produit);?> €</td> </tr>  
					<tr>  <th> <b> Photo </th> <td> <?php echo $UnProduit->id_illustration;?> </td> </tr>                     	 

            </thead>
        </table>
		<input type='hidden' name='Ref' value='<?php echo $UnProduit->id_produit;?>'>
		<div align='center'>
		<br/>
		   <input type='image' src='asset/images/poubelle.png'> 
		   <a href='GestionProduit.php'><img border=0 src='asset/images/Annuler.png'></a>
		</div> 
</form>
<?php
}
else
{

	// Mise à jour du contenu de la page dans la base de données 
	
     
	
		   $sql="DELETE FROM produit WHERE id_produit=?"; 
		   $resultats=$connexion->prepare($sql); 
	  	   $resultats->execute(array($_POST['Ref'] ));
		 
		   // Test du résultat de requête 
		   if ($resultats == true)
				RechargerPage("GestionProduit.php");
		   else
				echo "<script> alert('Erreur lors de la suppression !'); </script>";	

		$resultats->closeCursor();		

}
?>

		 