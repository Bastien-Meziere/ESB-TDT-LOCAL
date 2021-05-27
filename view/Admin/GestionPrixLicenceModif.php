
<?php
require_once("Fonctions.php");
$connexion = BDDConnexionPDO();

if (!isset($_POST['Ref']))
{

	


  // Affichage de la news dans un formulaire 
	$lesPrixLicence=$connexion->prepare("SELECT * FROM prixlicence WHERE num_prixlicence= ? "); 
	$lesPrixLicence->execute(array( $_POST['num'] ));
	$UnPrixLicence=$lesPrixLicence->fetch(PDO::FETCH_OBJ);

	//var_dump($_POST['num']);
	//var_dump($UnPrixLicence);
	?>
<h1 class="lamarge txt-center"> Modification des prix de la licence </h1>

<form method='POST' action='gestionprixlicencemodif' class="col-12 lamarge">
    <table  width="95%" border="1" cellspacing="0" cellpadding="4">
        <thead> 
        	<tr>  <th> <b> Numéro </th> <td> <?php echo $UnPrixLicence->num_prixlicence; ?> </td> </tr>
        	<tr>  <th> <b> Catégorie </th>  <td> <input type='text' size='40' name='Desig' value='<?php echo $UnPrixLicence->cat_prixlicence;?>'> </td> </tr> 
        	<tr>  <th> <b> Prix </th>  <td> <input type='text' size='10' name='Role' value='<?php echo $UnPrixLicence->prix_prixlicence;?>'> </td> </tr>     
        </thead>
    </table>
	<input type='hidden' name='Ref' value='<?php echo $UnPrixLicence->num_prixlicence;?>'>
	<div align='center'>
	<br/>
	   <input type='image' src='../asset/images/Enregistrer.png'>
	   <a href='<?=WEBROOT.'admin/gestionprixlicence'?>'><img border=0 src='../asset/images/Annuler.png'></a>
	</div> 
</form>
<?php
}
else
{

	// Mise à jour du contenu de la page dans la base de données 
	
   
	
		   $sql="UPDATE prixlicence SET cat_prixlicence=?, prix_prixlicence=? WHERE num_prixlicence=?"; 
		   $resultats=$connexion->prepare($sql); 
	  	   $resultats->execute(array( $_POST['Desig'] , $_POST['Role'] , $_POST['Ref'] ));
	  	   
		 
		   // Test du résultat de requête 
		   if ($resultats == true)
				header("Location: gestionprixlicence");
		   else
				echo "<script> alert('Erreur lors de la modification !'); </script>";	
  
		   $resultats->closeCursor();		

}
?>

		 