<?php
require_once("Fonctions.php");
$connexion = BDDConnexionPDO();

if (!isset($_POST['Ref']))
{

  // Affichage de la news dans un formulaire 
	$lesBureau=$connexion->prepare("SELECT * FROM photobureau f WHERE id_photobureau= ? "); 
	$lesBureau->execute(array( $_POST['num'] ));
	$UnBureau=$lesBureau->fetch(PDO::FETCH_OBJ);

	//var_dump($_POST['num']);
	//var_dump($UnBureau);
?>

<h1 class="lamarge txt-center"> Suppression d'une photo d'un membre de bureau </h1>

<form method='POST' action='gestionbureausuppimage' class="col-12 lamarge">
	<div class="container-fluid">
    	<div class="row lamarge table-responsive">
			<table class="table table-striped table-hover" width="95%" cellspacing="0" cellpadding="4">
				<thead> <tr>  <th> <b> Numéro Photo </th> <td> <?php echo $UnBureau->id_photobureau; ?> </td> </tr>
						<tr>  <th> <b> Nom Photo </th>  <td> <?php echo $UnBureau->img_photobureau;?> </td> </tr>                    	 

				</thead>
			</table>
	<input type='hidden' name='Ref' value='<?php echo $UnBureau->id_photobureau;?>'>
		<div class="txt-center">
		<br/>
		<input type='image' src='../asset/images/Poubelle.png'> 
		<a href='<?=WEBROOT.'admin/gestionbureau'?>'><img src='../asset/images/Annuler.png'></a>
		</div>
		</div>
	</div>
</form>
<?php
}
else
{

	// Mise à jour du contenu de la page dans la base de données 

		   $sql="DELETE FROM photobureau WHERE id_photobureau=?"; 
		   $resultats=$connexion->prepare($sql); 
	  	   $resultats->execute(array($_POST['Ref'] ));
		 
		   // Test du résultat de requête 
		   if ($resultats == true)
				header("Location: gestionbureau");
		   else
				echo "<script> alert('Erreur lors de la suppression !'); </script>";	

		$resultats->closeCursor();		

}
?>		 