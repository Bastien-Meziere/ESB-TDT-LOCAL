
<?php
require_once("Fonctions.php");
$connexion = BDDConnexionPDO();

if (!isset($_POST['Ref']))
{
  // Affichage de la news dans un formulaire 
	$lesBureau=$connexion->prepare("SELECT * FROM lebureau WHERE num_bureau= ? "); 
	$lesBureau->execute(array( $_POST['num'] ));
	$UnBureau=$lesBureau->fetch(PDO::FETCH_OBJ);

	//var_dump($_POST['num']);
	//var_dump($UnBureau);
?>

<h1 class="lamarge txt-center"> Modification d'un membre de bureau </h1>

<form method='POST' action='gestionbureaumodif' class="col-12 lamarge">
	<div class="container-fluid">
    	<div class="row lamarge table-responsive">
			<table class="table table-striped table-hover"  width="95%" cellspacing="0" cellpadding="4">
				<thead> 
					<tr>  <th> <b> Numéro </th> <td> <?php echo $UnBureau->num_bureau; ?> </td> </tr>
					<tr>  <th> <b> Nom </th>  <td> <input type='text' size='40' name='Desig' value='<?php echo $UnBureau->nom_bureau;?>'> </td> </tr> 
					<tr>  <th> <b> Rôle </th>  <td> <input type='text' size='40' name='Role' value='<?php echo $UnBureau->role_bureau;?>'> </td> </tr> 
					<tr>  <th> <b> Description </th>  <td> <input type='text' size='165' name='Desc' value='<?php echo $UnBureau->desc_bureau;?>'> </td> </tr>      
					<tr>  <th> <b> Numéro Photo </th>  <td> <input type='text' size='5' name='Photo' value='<?php echo $UnBureau->id_photobureau;?>'> </td> </tr>      
				</thead>
			</table>
	<input type='hidden' name='Ref' value='<?php echo $UnBureau->num_bureau;?>'>
		<div class="txt-center">
		<br/>
		<input type='image' src='../asset/images/Enregistrer.png'>
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

		   $sql="UPDATE lebureau SET nom_bureau=?, role_bureau=?, desc_bureau=?, id_photobureau=? WHERE num_bureau=?"; 
		   $resultats=$connexion->prepare($sql); 
	  	   $resultats->execute(array( $_POST['Desig'] , $_POST['Role'] , $_POST['Desc'] , $_POST['Photo'] , $_POST['Ref'] ));
	  	   
		 
		   // Test du résultat de requête 
		   if ($resultats == true)
				header("Location: gestionbureau");
		   else
				echo "<script> alert('Erreur lors de la modification !'); </script>";	
  
		   $resultats->closeCursor();		

}
?>	 