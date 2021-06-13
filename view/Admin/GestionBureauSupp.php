<?php
require_once("Fonctions.php");
$connexion = BDDConnexionPDO();

if (!isset($_POST['Ref']))
{

  // Affichage de la news dans un formulaire 
	$lesBureau=$connexion->prepare("SELECT * FROM lebureau f WHERE num_bureau= ? "); 
	$lesBureau->execute(array( $_POST['num'] ));
	$UnBureau=$lesBureau->fetch(PDO::FETCH_OBJ);

	//var_dump($_POST['num']);
	//var_dump($UnBureau);
?>

<h1 class="lamarge txt-center"> Suppression d'un membre de bureau </h1>

<form method='POST' action='gestionbureausupp' class="col-12 lamarge">
	<div class="container-fluid">
    	<div class="row lamarge table-responsive">
			<table class="table table-striped table-hover" width="95%" cellspacing="0" cellpadding="4">
				<thead> <tr>  <th> <b> Numéro </th> <td> <?php echo $UnBureau->num_bureau; ?> </td> </tr>
						<tr>  <th> <b> Nom </th>  <td> <?php echo $UnBureau->nom_bureau;?> </td> </tr>
						<tr>  <th> <b> Rôle </th>  <td> <?php echo $UnBureau->role_bureau;?> </td> </tr> 
						<tr>  <th> <b> Description </th>  <td> <?php echo $UnBureau->desc_bureau;?> </td> </tr>
						<tr>  <th> <b> Photo </th> <td> <?php echo $UnBureau->id_photobureau;?> </td> </tr>                     	 

				</thead>
			</table>
	<input type='hidden' name='Ref' value='<?php echo $UnBureau->num_bureau;?>'>
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

		   $sql="DELETE FROM lebureau WHERE num_bureau=?"; 
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