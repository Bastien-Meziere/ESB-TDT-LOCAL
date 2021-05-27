
<?php
require_once("Fonctions.php");
$connexion = BDDConnexionPDO();

if (!isset($_POST['Ref']))
{

	


  // Affichage de la news dans un formulaire 
	$lesEntrainement=$connexion->prepare("SELECT * FROM entrainement WHERE num_entrainement= ? "); 
	$lesEntrainement->execute(array( $_POST['num'] ));
	$UnEntrainement=$lesEntrainement->fetch(PDO::FETCH_OBJ);

	//var_dump($_POST['num']);
	//var_dump($UnEntrainement);
	?>
<h1 class="lamarge txt-center"> Modification d'un entraîneur </h1>

<form method='POST' action='gestionentrainementmodif' class="col-12 lamarge">
    <table  width="95%" border="1" cellspacing="0" cellpadding="4">
        <thead> 
        	<tr>  <th> <b> Numéro </th> <td> <?php echo $UnEntrainement->num_entrainement; ?> </td> </tr>
        	<tr>  <th> <b> Nom </th>  <td> <input type='text' size='40' name='Desig' value='<?php echo $UnEntrainement->nom_entrainement;?>'> </td> </tr> 
        	<tr>  <th> <b> Rôle </th>  <td> <input type='text' size='40' name='Role' value='<?php echo $UnEntrainement->role_entrainement;?>'> </td> </tr> 
        	<tr>  <th> <b> Description </th>  <td> <input type='text' size='160' name='Desc' value='<?php echo $UnEntrainement->desc_entrainement;?>'> </td> </tr>      
        	<tr>  <th> <b> Photo </th>  <td> <input type='text' size='5' name='Photo' value='<?php echo $UnEntrainement->id_photobureau;?>'> </td> </tr>      
        </thead>
    </table>
	<input type='hidden' name='Ref' value='<?php echo $UnEntrainement->num_entrainement;?>'>
	<div align='center'>
	<br/>
	   <input type='image' src='../asset/images/Enregistrer.png'>
	   <a href='<?=WEBROOT.'admin/gestionentrainement'?>'><img border=0 src='../asset/images/Annuler.png'></a>
	</div> 
</form>
<?php
}
else
{

	// Mise à jour du contenu de la page dans la base de données 
	
   
	
		   $sql="UPDATE entrainement SET nom_entrainement=?, role_entrainement=?, desc_entrainement=?, id_photobureau=? WHERE num_entrainement=?"; 
		   $resultats=$connexion->prepare($sql); 
	  	   $resultats->execute(array( $_POST['Desig'] , $_POST['Role'] , $_POST['Desc'] , $_POST['Photo'] , $_POST['Ref'] ));
	  	   
		 
		   // Test du résultat de requête 
		   if ($resultats == true)
				header("Location: gestionentrainement");
		   else
				echo "<script> alert('Erreur lors de la modification !'); </script>";	
  
		   $resultats->closeCursor();		

}
?>

		 