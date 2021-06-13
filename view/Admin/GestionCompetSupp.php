<?php
require_once("Fonctions.php");
$connexion = BDDConnexionPDO();

if (!isset($_POST['Ref']))
{

  // Affichage de la news dans un formulaire 
	$lesCompet=$connexion->prepare("SELECT * FROM competition f WHERE num_compet= ? "); 
	$lesCompet->execute(array( $_POST['num'] ));
	$UnCompet=$lesCompet->fetch(PDO::FETCH_OBJ);

	//var_dump($_POST['num']);
	//var_dump($UnBureau);
?>

<h1 class="lamarge txt-center"> Suppression d'une section de compétitions </h1>

<form method='POST' action='gestioncompetsupp' class="col-12 lamarge">
	<div class="container-fluid">
    	<div class="row lamarge table-responsive">
			<table class="table table-striped table-hover"  width="95%" cellspacing="0" cellpadding="4">
				<thead> <tr>  <th> <b> Numéro </th> <td> <?php echo $UnCompet->num_compet; ?> </td> </tr> 
						<tr>  <th> <b> Description </th>  <td> <?php echo $UnCompet->desc_compet;?> </td> </tr>
						<tr>  <th> <b> Numéro Document </th> <td> <?php echo $UnCompet->id_photocompet;?> </td> </tr>                     	 

				</thead>
			</table>
	<input type='hidden' name='Ref' value='<?php echo $UnCompet->num_compet;?>'>
		<div class="txt-center">
		<br/>
		<input type='image' src='../asset/images/Poubelle.png'> 
		<a href='<?=WEBROOT.'admin/gestioncompet'?>'><img src='../asset/images/Annuler.png'></a>
		</div>
		</div>
	</div>
</form>
<?php
}
else
{

	// Mise à jour du contenu de la page dans la base de données 

		   $sql="DELETE FROM competition WHERE num_compet=?"; 
		   $resultats=$connexion->prepare($sql); 
	  	   $resultats->execute(array($_POST['Ref'] ));
		 
		   // Test du résultat de requête 
		   if ($resultats == true)
				header("Location: gestioncompet");
		   else
				echo "<script> alert('Erreur lors de la suppression !'); </script>";	

		$resultats->closeCursor();		

}
?>	 