<?php
require_once("Fonctions.php");
$connexion = BDDConnexionPDO();

if (!isset($_POST['Ref']))
{

  // Affichage de la news dans un formulaire 
	$lesMedia=$connexion->prepare("SELECT * FROM photomedia f WHERE id_photomedia= ? "); 
	$lesMedia->execute(array( $_POST['num'] ));
	$UnMedia=$lesMedia->fetch(PDO::FETCH_OBJ);

	//var_dump($_POST['num']);
	//var_dump($UnBureau);
?>

<h1 class="lamarge txt-center"> Suppression d'une photo d'un média </h1>

<form method='POST' action='gestionmediasuppimage' class="col-12 lamarge">
	<div class="container-fluid">
		<div class="row lamarge table-responsive">
			<table class="table table-striped table-hover" width="95%" cellspacing="0" cellpadding="4">
				<thead> <tr>  <th> <b> Numéro Photo </th> <td> <?php echo $UnMedia->id_photomedia; ?> </td> </tr>
						<tr>  <th> <b> Nom Photo </th>  <td> <?php echo $UnMedia->img_photomedia;?> </td> </tr>                    	 

				</thead>
			</table>
	<input type='hidden' name='Ref' value='<?php echo $UnMedia->id_photomedia;?>'>
		<div class="txt-center">
		<br/>
		<input type='image' src='../asset/images/Poubelle.png'> 
		<a href='<?=WEBROOT.'admin/gestionmedia'?>'><img src='../asset/images/Annuler.png'></a>
		</div>
		</div>
	</div>
</form>
<?php
}
else
{

	// Mise à jour du contenu de la page dans la base de données 

		   $sql="DELETE FROM photomedia WHERE id_photomedia=?"; 
		   $resultats=$connexion->prepare($sql); 
	  	   $resultats->execute(array($_POST['Ref'] ));
		 
		   // Test du résultat de requête 
		   if ($resultats == true)
				header("Location: gestionmedia");
		   else
				echo "<script> alert('Erreur lors de la suppression !'); </script>";	

		$resultats->closeCursor();		

}
?>