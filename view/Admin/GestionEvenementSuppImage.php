<?php
require_once("Fonctions.php");
$connexion = BDDConnexionPDO();

if (!isset($_POST['Ref']))
{

  // Affichage de la news dans un formulaire 
	$lesEvenement=$connexion->prepare("SELECT * FROM photoevenement f WHERE id_photoevenement= ? "); 
	$lesEvenement->execute(array( $_POST['num'] ));
	$UnEvenement=$lesEvenement->fetch(PDO::FETCH_OBJ);

	//var_dump($_POST['num']);
	//var_dump($UnBureau);
?>

<h1 class="lamarge txt-center"> Suppression d'une photo d'événement </h1>

<form method='POST' action='gestionevenementsuppimage' class="col-12 lamarge">
	<div class="container-fluid">
		<div class="row lamarge table-responsive">
			<table class="table table-striped table-hover" width="95%" cellspacing="0" cellpadding="4">
				<thead> <tr>  <th> <b> Numéro Photo </th> <td> <?php echo $UnEvenement->id_photoevenement; ?> </td> </tr>
						<tr>  <th> <b> Nom Photo </th>  <td> <?php echo $UnEvenement->img_photoevenement;?> </td> </tr>                    	 

				</thead>
			</table>
	<input type='hidden' name='Ref' value='<?php echo $UnEvenement->id_photoevenement;?>'>
		<div class="txt-center">
		<br/>
		<input type='image' src='../asset/images/Poubelle.png'> 
		<a href='<?=WEBROOT.'admin/gestionevenement'?>'><img src='../asset/images/Annuler.png'></a>
		</div>
		</div>
	</div>
</form>
<?php
}
else
{

	// Mise à jour du contenu de la page dans la base de données 

		   $sql="DELETE FROM photoevenement WHERE id_photoevenement=?"; 
		   $resultats=$connexion->prepare($sql); 
	  	   $resultats->execute(array($_POST['Ref'] ));
		 
		   // Test du résultat de requête 
		   if ($resultats == true)
				header("Location: gestionevenement");
		   else
				echo "<script> alert('Erreur lors de la suppression !'); </script>";	

		$resultats->closeCursor();		

}
?>	 