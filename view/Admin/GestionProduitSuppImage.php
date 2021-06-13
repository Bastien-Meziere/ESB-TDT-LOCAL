<?php
require_once("Fonctions.php");
$connexion = BDDConnexionPDO();

if (!isset($_POST['Ref']))
{

  // Affichage de la news dans un formulaire 
	$lesProduits=$connexion->prepare("SELECT * FROM illustration f WHERE id_illustration= ? "); 
	$lesProduits->execute(array( $_POST['num'] ));
	$UnProduit=$lesProduits->fetch(PDO::FETCH_OBJ);

	//var_dump($_POST['num']);
	//var_dump($UnSalle);
?>

<h1 class="txt-center lamarge"> Suppression d'une photo d'un produit </h1>

<form method='POST' action='gestionproduitsuppimage' class="col-12 lamarge">
	<div class="container-fluid">
		<div class="row lamarge table-responsive">
			<table class="table table-striped table-hover" width="95%" cellspacing="0" cellpadding="4">
				<thead> <tr>  <th> <b> Numéro Photo </th> <td> <?php echo $UnProduit->id_illustration; ?> </td> </tr>
						<tr>  <th> <b> Nom Photo </th>  <td> <?php echo $UnProduit->img_illustration;?> </td> </tr>                    	 

				</thead>
			</table>
	<input type='hidden' name='Ref' value='<?php echo $UnProduit->id_illustration;?>'>
		<div class="txt-center">
		<br/>
		<input type='image' src='../asset/images/Poubelle.png'> 
		<a href='<?=WEBROOT.'admin/gestionproduit'?>'><img src='../asset/images/Annuler.png'></a>
		</div>
		</div>
	</div>
</form>
<?php
}
else
{

	// Mise à jour du contenu de la page dans la base de données 

		   $sql="DELETE FROM illustration WHERE id_illustration=?"; 
		   $resultats=$connexion->prepare($sql); 
	  	   $resultats->execute(array($_POST['Ref'] ));
		 
		   // Test du résultat de requête 
		   if ($resultats == true)
				header("Location: gestionproduit");
		   else
				echo "<script> alert('Erreur lors de la suppression !'); </script>";	

		$resultats->closeCursor();		

}
?>	 