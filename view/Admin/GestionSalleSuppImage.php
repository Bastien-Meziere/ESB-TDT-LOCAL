<?php
require_once("Fonctions.php");
$connexion = BDDConnexionPDO();

if (!isset($_POST['Ref']))
{

  // Affichage de la news dans un formulaire 
	$lesSalle=$connexion->prepare("SELECT * FROM photosalle f WHERE id_photosalle= ? "); 
	$lesSalle->execute(array( $_POST['num'] ));
	$UnSalle=$lesSalle->fetch(PDO::FETCH_OBJ);

	//var_dump($_POST['num']);
	//var_dump($UnSalle);
	?>
<h1 class="lamarge txt-center"> Suppression d'une photo de la salle </h1>

<form method='POST' action='gestionsallesuppimage' class="col-12 lamarge">
    <table  width="95%" border="1" cellspacing="0" cellpadding="4">
        <thead> <tr>  <th> <b> Numéro Photo </th> <td> <?php echo $UnSalle->id_photosalle; ?> </td> </tr>
                <tr>  <th> <b> Nom Photo </th>  <td> <?php echo $UnSalle->img_photosalle;?> </td> </tr>                    	 

        </thead>
    </table>
	<input type='hidden' name='Ref' value='<?php echo $UnSalle->id_photosalle;?>'>
	<div align='center'>
	<br/>
	   <input type='image' src='../asset/images/Poubelle.png'> 
	   <a href='<?=WEBROOT.'admin/gestionsalle'?>'><img border=0 src='../asset/images/Annuler.png'></a>
	</div> 
</form>
<?php
}
else
{

	// Mise à jour du contenu de la page dans la base de données 
	
     
	
		   $sql="DELETE FROM photosalle WHERE id_photosalle=?"; 
		   $resultats=$connexion->prepare($sql); 
	  	   $resultats->execute(array($_POST['Ref'] ));
		 
		   // Test du résultat de requête 
		   if ($resultats == true)
				header("Location: gestionsalle");
		   else
				echo "<script> alert('Erreur lors de la suppression !'); </script>";	

		$resultats->closeCursor();		

}
?>

		 