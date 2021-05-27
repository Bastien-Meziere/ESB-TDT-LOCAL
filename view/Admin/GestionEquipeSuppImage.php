<?php
require_once("Fonctions.php");
$connexion = BDDConnexionPDO();

if (!isset($_POST['Ref']))
{

  // Affichage de la news dans un formulaire 
	$lesEquipe=$connexion->prepare("SELECT * FROM photoequipe f WHERE id_photoequipe= ? "); 
	$lesEquipe->execute(array( $_POST['num'] ));
	$UnEquipe=$lesEquipe->fetch(PDO::FETCH_OBJ);

	//var_dump($_POST['num']);
	//var_dump($UnBureau);
	?>
<h1 class="lamarge txt-center"> Suppression d'une photo d'équipe </h1>

<form method='POST' action='gestionequipesuppimage' class="col-12 lamarge">
    <table  width="95%" border="1" cellspacing="0" cellpadding="4">
        <thead> <tr>  <th> <b> Numéro Photo </th> <td> <?php echo $UnEquipe->id_photoequipe; ?> </td> </tr>
                <tr>  <th> <b> Nom Photo </th>  <td> <?php echo $UnEquipe->img_photoequipe;?> </td> </tr>                    	 

        </thead>
    </table>
	<input type='hidden' name='Ref' value='<?php echo $UnEquipe->id_photoequipe;?>'>
	<div align='center'>
	<br/>
	   <input type='image' src='../asset/images/Poubelle.png'> 
	   <a href='<?=WEBROOT.'admin/gestionequipe'?>'><img border=0 src='../asset/images/Annuler.png'></a>
	</div> 
</form>
<?php
}
else
{

	// Mise à jour du contenu de la page dans la base de données 
	
     
	
		   $sql="DELETE FROM photoequipe WHERE id_photoequipe=?"; 
		   $resultats=$connexion->prepare($sql); 
	  	   $resultats->execute(array($_POST['Ref'] ));
		 
		   // Test du résultat de requête 
		   if ($resultats == true)
				header("Location: gestionequipe");
		   else
				echo "<script> alert('Erreur lors de la suppression !'); </script>";	

		$resultats->closeCursor();		

}
?>

		 