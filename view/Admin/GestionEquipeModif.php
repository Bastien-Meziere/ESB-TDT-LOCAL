<?php
require_once("Fonctions.php");
$connexion = BDDConnexionPDO();

if (!isset($_POST['Ref']))
{

  // Affichage de la news dans un formulaire 
	$lesEquipe=$connexion->prepare("SELECT * FROM equipe WHERE num_equipe= ? "); 
	$lesEquipe->execute(array( $_POST['num'] ));
	$UnEquipe=$lesEquipe->fetch(PDO::FETCH_OBJ);

	//var_dump($_POST['num']);
	//var_dump($UnBureau);
	?>
<h1 class="lamarge txt-center"> Modification d'une équipe </h1>

<form method='POST' action='gestionequipemodif' class="col-12 lamarge">
	<div class="container-fluid">
		<div class="row lamarge table-responsive">
			<table class="table table-striped table-hover" width="95%" cellspacing="0" cellpadding="4">
				<thead> 
					<tr>  <th> <b> Numéro </th> <td> <?php echo $UnEquipe->num_equipe; ?> </td> </tr>
					<tr>  <th> <b> Description </th>  <td> <input type='text' size='120' name='Desc' value='<?php echo $UnEquipe->desc_equipe;?>'> </td> </tr>      
					<tr>  <th> <b> Numéro Photo </th>  <td> <input type='text' size='5' name='Photo' value='<?php echo $UnEquipe->id_photoequipe;?>'> </td> </tr>      
				</thead>
			</table>
	<input type='hidden' name='Ref' value='<?php echo $UnEquipe->num_equipe;?>'>
		<div class="txt-center">
		<br/>
		<input type='image' src='../asset/images/Enregistrer.png'>
		<a href='<?=WEBROOT.'admin/gestionequipe'?>'><img src='../asset/images/Annuler.png'></a>
		</div>
		</div>
	</div>
</form>
<?php
}
else
{

	// Mise à jour du contenu de la page dans la base de données 

		   $sql="UPDATE equipe SET desc_equipe=?, id_photoequipe=? WHERE num_equipe=?"; 
		   $resultats=$connexion->prepare($sql); 
	  	   $resultats->execute(array( $_POST['Desc'] , $_POST['Photo'] , $_POST['Ref'] ));
	  	   
		 
		   // Test du résultat de requête 
		   if ($resultats == true)
				header("Location: gestionequipe");
		   else
				echo "<script> alert('Erreur lors de la modification !'); </script>";	
  
		   $resultats->closeCursor();		

}
?>