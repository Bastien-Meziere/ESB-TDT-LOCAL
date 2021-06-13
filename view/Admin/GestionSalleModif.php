<?php
require_once("Fonctions.php");
$connexion = BDDConnexionPDO();

if (!isset($_POST['Ref']))
{

  // Affichage de la news dans un formulaire 
	$lesSalle=$connexion->prepare("SELECT * FROM lasalle WHERE num_salle= ? "); 
	$lesSalle->execute(array( $_POST['num'] ));
	$UnSalle=$lesSalle->fetch(PDO::FETCH_OBJ);

	//var_dump($_POST['num']);
	//var_dump($UnSalle);
?>

<h1 class="lamarge txt-center"> Modification d'une section de la page Salle </h1>

<form method='POST' action='gestionsallemodif' class="col-12 lamarge">
	<div class="container-fluid">
		<div class="row lamarge table-responsive">
			<table class="table table-striped table-hover" width="95%" cellspacing="0" cellpadding="4">
				<thead> 
					<tr>  <th> <b> Numéro </th> <td> <?php echo $UnSalle->num_salle; ?> </td> </tr>
					<tr>  <th> <b> Titre </th>  <td> <input type='text' size='40' name='Desig' value='<?php echo $UnSalle->titre_salle;?>'> </td> </tr> 
					<tr>  <th> <b> Description </th>  <td> <input type='text' size='160' name='Desc' value='<?php echo $UnSalle->desc_salle;?>'> </td> </tr>      
					<tr>  <th> <b> Numéro Photo </th>  <td> <input type='text' size='5' name='Photo' value='<?php echo $UnSalle->id_photosalle;?>'> </td> </tr>      
				</thead>
			</table>
	<input type='hidden' name='Ref' value='<?php echo $UnSalle->num_salle;?>'>
		<div class="txt-center">
		<br/>
		<input type='image' src='../asset/images/Enregistrer.png'>
		<a href='<?=WEBROOT.'admin/gestionsalle'?>'><img src='../asset/images/Annuler.png'></a>
		</div>
		</div>
	</div>
</form>
<?php
}
else
{

	// Mise à jour du contenu de la page dans la base de données 

		   $sql="UPDATE lasalle SET titre_salle=?, desc_salle=?, id_photosalle=? WHERE num_salle=?"; 
		   $resultats=$connexion->prepare($sql); 
	  	   $resultats->execute(array( $_POST['Desig'] , $_POST['Desc'] , $_POST['Photo'] , $_POST['Ref'] ));
	  	   
		 
		   // Test du résultat de requête 
		   if ($resultats == true)
				header("Location: gestionsalle");
		   else
				echo "<script> alert('Erreur lors de la modification !'); </script>";	
  
		   $resultats->closeCursor();		

}
?>