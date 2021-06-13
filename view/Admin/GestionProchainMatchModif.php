<?php
require_once("Fonctions.php");
$connexion = BDDConnexionPDO();

if (!isset($_POST['Ref']))
{

  // Affichage de la news dans un formulaire 
	$lesProchainMatch=$connexion->prepare("SELECT * FROM prochainmatch WHERE num_match= ? "); 
	$lesProchainMatch->execute(array( $_POST['num'] ));
	$UnProchainMatch=$lesProchainMatch->fetch(PDO::FETCH_OBJ);

	//var_dump($_POST['num']);
	//var_dump($UnProduit);
?>

<h1 class="lamarge txt-center titreadmin"> Modification d'un prochain match </h1>

<form method='POST' action='gestionprochainmatchmodif' class="col-12 lamarge">
	<div class="container-fluid">
		<div class="row lamarge table-responsive">
			<table class="table table-striped table-hover" width="95%" cellspacing="0" cellpadding="4">
				<thead> 
					<tr>  <th> <b> Numéro </th> <td> <?php echo $UnProchainMatch->num_match; ?> </td> </tr>
					<tr>  <th> <b> Désignation </th>  <td> <input type='text' size='40' name='Desig' value='<?php echo $UnProchainMatch->lib_match;?>'> </td> </tr>  
					<tr>  <th> <b> Équipe 1 </th>  <td> <input type='text' size='80' name='Cont' value='<?php echo $UnProchainMatch->content_match;?>'> </td> </tr>
					<tr>  <th> <b> Équipe 2 </th>  <td> <input type='text' size='80' name='Cont2' value='<?php echo $UnProchainMatch->content2_match;?>'> </td> </tr>    
					<tr>  <th> <b> Date </th>  <td> <input type='text' size='40' name='Date' value='<?php echo $UnProchainMatch->date_match;?>'> </td> </tr>  
				</thead>
			</table>
	<input type='hidden' name='Ref' value='<?php echo $UnProchainMatch->num_match;?>'>
		<div class="txt-center">
		<br/>
		<input type='image' src='../asset/images/Enregistrer.png'>
		<a href='<?=WEBROOT.'admin/gestionprochainmatch'?>'><img src='../asset/images/Annuler.png'></a>
		</div>
		</div>
	</div>
</form>
<?php
}
else
{

	// Mise à jour du contenu de la page dans la base de données 

		   $sql="UPDATE prochainmatch SET lib_match=?, content_match=?, content2_match=?, date_match=? WHERE num_match=?"; 
		   $resultats=$connexion->prepare($sql); 
	  	   $resultats->execute(array( $_POST['Desig'] , $_POST['Cont'] , $_POST['Cont2'] , $_POST['Date'] , $_POST['Ref'] ));
	  	    
		 
		   // Test du résultat de requête 
		   if ($resultats == true)
				header("Location: gestionprochainmatch");
		   else
				echo "<script> alert('Erreur lors de la modification !'); </script>";	
  
		   $resultats->closeCursor();		

}
?>	 