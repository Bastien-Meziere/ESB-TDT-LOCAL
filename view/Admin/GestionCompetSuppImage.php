<?php
require_once("Fonctions.php");
$connexion = BDDConnexionPDO();

if (!isset($_POST['Ref']))
{

  // Affichage de la news dans un formulaire 
	$lesCompet=$connexion->prepare("SELECT * FROM photocompet f WHERE id_photocompet= ? "); 
	$lesCompet->execute(array( $_POST['num'] ));
	$UnCompet=$lesCompet->fetch(PDO::FETCH_OBJ);

	//var_dump($_POST['num']);
	//var_dump($UnBureau);
	?>
<h1 class="lamarge txt-center"> Suppression d'un document de compétitions </h1>

<form method='POST' action='gestioncompetsuppimage' class="col-12 lamarge">
    <table  width="95%" border="1" cellspacing="0" cellpadding="4">
        <thead> <tr>  <th> <b> Numéro Document </th> <td> <?php echo $UnCompet->id_photocompet; ?> </td> </tr>
                <tr>  <th> <b> Nom Document </th>  <td> <?php echo $UnCompet->doc_photocompet;?> </td> </tr>                    	 

        </thead>
    </table>
	<input type='hidden' name='Ref' value='<?php echo $UnCompet->id_photocompet;?>'>
	<div align='center'>
	<br/>
	   <input type='image' src='../asset/images/Poubelle.png'> 
	   <a href='<?=WEBROOT.'admin/gestioncompet'?>'><img border=0 src='../asset/images/Annuler.png'></a>
	</div> 
</form>
<?php
}
else
{

	// Mise à jour du contenu de la page dans la base de données 
	
     
	
		   $sql="DELETE FROM photocompet WHERE id_photocompet=?"; 
		   $resultats=$connexion->prepare($sql); 
	  	   $resultats->execute(array($_POST['Ref'] ));
		 
		   // Test du résultat de requête 
		   if ($resultats == true)
				header("Location: gestioncompet");
		   else
				echo "<script> alert('Erreur lors de la suppression !'); </script>";	

		$resultats->closeCursor();		

}
?>

		 