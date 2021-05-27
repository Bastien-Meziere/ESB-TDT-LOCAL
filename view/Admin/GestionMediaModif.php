
<?php
require_once("Fonctions.php");
$connexion = BDDConnexionPDO();

if (!isset($_POST['Ref']))
{

	


  // Affichage de la news dans un formulaire 
	$lesMedia=$connexion->prepare("SELECT * FROM mediaa WHERE num_media= ? "); 
	$lesMedia->execute(array( $_POST['num'] ));
	$UnMedia=$lesMedia->fetch(PDO::FETCH_OBJ);

	//var_dump($_POST['num']);
	//var_dump($UnBureau);
	?>
<h1 class="lamarge txt-center"> Modification d'un média </h1>

<form method='POST' action='gestionmediamodif' class="col-12 lamarge">
    <table  width="95%" border="1" cellspacing="0" cellpadding="4">
        <thead> 
        	<tr>  <th> <b> Numéro </th> <td> <?php echo $UnMedia->num_media; ?> </td> </tr>
        	<tr>  <th> <b> Nom </th>  <td> <input type='text' size='40' name='Desig' value='<?php echo $UnMedia->nom_media;?>'> </td> </tr>     
        	<tr>  <th> <b> Numéro Photo </th>  <td> <input type='text' size='5' name='Photo' value='<?php echo $UnMedia->id_photomedia;?>'> </td> </tr>      
        </thead>
    </table>
	<input type='hidden' name='Ref' value='<?php echo $UnMedia->num_media;?>'>
	<div align='center'>
	<br/>
	   <input type='image' src='../asset/images/Enregistrer.png'>
	   <a href='<?=WEBROOT.'admin/gestionmedia'?>'><img border=0 src='../asset/images/Annuler.png'></a>
	</div> 
</form>
<?php
}
else
{

	// Mise à jour du contenu de la page dans la base de données 
	
   
	
		   $sql="UPDATE mediaa SET nom_media=?, id_photomedia=? WHERE num_media=?"; 
		   $resultats=$connexion->prepare($sql); 
	  	   $resultats->execute(array( $_POST['Desig'] , $_POST['Photo'] , $_POST['Ref'] ));
	  	   
		 
		   // Test du résultat de requête 
		   if ($resultats == true)
				header("Location: gestionmedia");
		   else
				echo "<script> alert('Erreur lors de la modification !'); </script>";	
  
		   $resultats->closeCursor();		

}
?>

		 