<?php
require_once("Fonctions.php");
$connexion = BDDConnexionPDO();

if (!isset($_POST['Ref']))
{

  // Affichage de la news dans un formulaire 
	$lesSlide=$connexion->prepare("SELECT * FROM slide f WHERE num_slide= ? "); 
	$lesSlide->execute(array( $_POST['num'] ));
	$UnSlide=$lesSlide->fetch(PDO::FETCH_OBJ);

	//var_dump($_POST['num']);
	//var_dump($UnSalle);
?>

<h1 class="lamarge txt-center"> Suppression d'une slide </h1>

<form method='POST' action='gestionslidesupp' class="col-12 lamarge">
	<div class="container-fluid">
		<div class="row lamarge table-responsive">
			<table class="table table-striped table-hover" width="95%" cellspacing="0" cellpadding="4">
				<thead> <tr>  <th> <b> Numéro </th> <td> <?php echo $UnSlide->num_slide; ?> </td> </tr>
						<tr>  <th> <b> Contenu 1 </th>  <td> <?php echo $UnSlide->contenu1_slide;?> </td> </tr>
						<tr>  <th> <b> Contenu 2 </th>  <td> <?php echo $UnSlide->contenu2_slide;?> </td> </tr>
						<tr>  <th> <b> Contenu 3 </th>  <td> <?php echo $UnSlide->contenu3_slide;?> </td> </tr>
						<tr>  <th> <b> Contenu 4 </th>  <td> <?php echo $UnSlide->contenu4_slide;?> </td> </tr>
						<tr>  <th> <b> Numéro Photo </th> <td> <?php echo $UnSlide->id_photoslide;?> </td> </tr>                     	 

				</thead>
			</table>
	<input type='hidden' name='Ref' value='<?php echo $UnSlide->num_slide;?>'>
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

		   $sql="DELETE FROM slide WHERE num_slide=?"; 
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