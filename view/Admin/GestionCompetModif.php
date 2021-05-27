
<?php
require_once("Fonctions.php");
$connexion = BDDConnexionPDO();

if (!isset($_POST['Ref']))
{

	


  // Affichage de la news dans un formulaire 
	$lesCompet=$connexion->prepare("SELECT * FROM competition WHERE num_compet= ? "); 
	$lesCompet->execute(array( $_POST['num'] ));
	$UnCompet=$lesCompet->fetch(PDO::FETCH_OBJ);

	//var_dump($_POST['num']);
	//var_dump($UnBureau);
	?>
<h1 class="lamarge txt-center"> Modification d'une section de compétitions </h1>

<form method='POST' action='gestioncompetmodif' class="col-12 lamarge">
    <table  width="95%" border="1" cellspacing="0" cellpadding="4">
        <thead> 
        	<tr>  <th> <b> Numéro </th> <td> <?php echo $UnCompet->num_compet; ?> </td> </tr>
        	<tr>  <th> <b> Description </th>  <td> <input type='text' size='120' name='Desc' value='<?php echo $UnCompet->desc_compet;?>'> </td> </tr>      
        	<tr>  <th> <b> Document </th>  <td> <input type='text' size='5' name='Photo' value='<?php echo $UnCompet->id_photocompet;?>'> </td> </tr>      
        </thead>
    </table>
	<input type='hidden' name='Ref' value='<?php echo $UnCompet->num_compet;?>'>
	<div align='center'>
	<br/>
	   <input type='image' src='../asset/images/Enregistrer.png'>
	   <a href='<?=WEBROOT.'admin/gestioncompet'?>'><img border=0 src='../asset/images/Annuler.png'></a>
	</div> 
</form>
<?php
}
else
{

	// Mise à jour du contenu de la page dans la base de données 
	
   
	
		   $sql="UPDATE competition SET desc_compet=?, id_photocompet=? WHERE num_compet=?"; 
		   $resultats=$connexion->prepare($sql); 
	  	   $resultats->execute(array( $_POST['Desc'] , $_POST['Photo'] , $_POST['Ref'] ));
	  	   
		 
		   // Test du résultat de requête 
		   if ($resultats == true)
				header("Location: gestioncompet");
		   else
				echo "<script> alert('Erreur lors de la modification !'); </script>";	
  
		   $resultats->closeCursor();		

}
?>

		 