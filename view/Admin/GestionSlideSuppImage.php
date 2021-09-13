<?php
require_once("Fonctions.php");
$connexion = BDDConnexionPDO();

if (!isset($_POST['Ref']))
{

  // Affichage de la news dans un formulaire 
	$lesSlide=$connexion->prepare("SELECT * FROM photoslide f WHERE id_photoslide= ? "); 
	$lesSlide->execute(array( $_POST['num'] ));
	$UnSlide=$lesSlide->fetch(PDO::FETCH_OBJ);

	//var_dump($_POST['num']);
	//var_dump($UnSalle);
?>

<h1 class="lamarge txt-center"> Suppression d'une photo de slide </h1>

<form method='POST' action='gestionslidesuppimage' class="col-12 lamarge">
	<div class="container-fluid">
		<div class="row lamarge table-responsive">
			<table class="table table-striped table-hover" width="95%" cellspacing="0" cellpadding="4">
				<thead> <tr>  <th> <b> Numéro Photo </th> <td> <?php echo $UnSlide->id_photoslide; ?> </td> </tr>
						<tr>  <th> <b> Nom Photo </th>  <td> <?php echo $UnSlide->img_photoslide;?> </td> </tr>                    	 

				</thead>
			</table>
	<input type='hidden' name='Ref' value='<?php echo $UnSlide->id_photoslide;?>'>
		<div class="txt-center">
		<br/>
		<input type='image' src='../asset/images/Poubelle.png'> 
		<a href='<?=WEBROOT.'admin/gestionslide'?>'><img src='../asset/images/Annuler.png'></a>
		</div>
		</div>
	</div>
</form>
<?php
}
else
{

	// Mise à jour du contenu de la page dans la base de données 

		   $sql="DELETE FROM photoslide WHERE id_photoslide=?"; 
		   $resultats=$connexion->prepare($sql); 
	  	   $resultats->execute(array($_POST['Ref'] ));
		 
		   // Test du résultat de requête 
		   if ($resultats == true)
				header("Location: gestionslide");
		   else
				echo "<script> alert('Erreur lors de la suppression !'); </script>";	

		$resultats->closeCursor();		

}
?> 