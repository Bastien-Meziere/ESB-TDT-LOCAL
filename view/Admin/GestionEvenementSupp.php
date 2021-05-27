<?php
require_once("Fonctions.php");
$connexion = BDDConnexionPDO();

if (!isset($_POST['Ref']))
{

  // Affichage de la news dans un formulaire 
	$lesEvenement=$connexion->prepare("SELECT * FROM evenement f WHERE num_evenement= ? "); 
	$lesEvenement->execute(array( $_POST['num'] ));
	$UnEvenement=$lesEvenement->fetch(PDO::FETCH_OBJ);

	//var_dump($_POST['num']);
	//var_dump($UnBureau);
	?>
<h1 class="lamarge txt-center"> Suppression d'un événement </h1>

<form method='POST' action='gestionevenementsupp' class="col-12 lamarge">
    <table  width="95%" border="1" cellspacing="0" cellpadding="4">
        <thead> <tr>  <th> <b> Numéro </th> <td> <?php echo $UnEvenement->num_evenement; ?> </td> </tr>
                <tr>  <th> <b> Description </th>  <td> <?php echo $UnEvenement->desc_evenement;?> </td> </tr>
				<tr>  <th> <b> Numéro Photo </th> <td> <?php echo $UnEvenement->id_photoevenement;?> </td> </tr>                     	 

        </thead>
    </table>
	<input type='hidden' name='Ref' value='<?php echo $UnEvenement->num_evenement;?>'>
	<div align='center'>
	<br/>
	   <input type='image' src='../asset/images/Poubelle.png'> 
	   <a href='<?=WEBROOT.'admin/gestionevenement'?>'><img border=0 src='../asset/images/Annuler.png'></a>
	</div> 
</form>
<?php
}
else
{

	// Mise à jour du contenu de la page dans la base de données 
	
     
	
		   $sql="DELETE FROM evenement WHERE num_evenement=?"; 
		   $resultats=$connexion->prepare($sql); 
	  	   $resultats->execute(array($_POST['Ref'] ));
		 
		   // Test du résultat de requête 
		   if ($resultats == true)
				header("Location: gestionevenement");
		   else
				echo "<script> alert('Erreur lors de la suppression !'); </script>";	

		$resultats->closeCursor();		

}
?>

		 