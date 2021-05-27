<?php
require_once("Fonctions.php");
$connexion = BDDConnexionPDO();

if (!isset($_POST['Ref']))
{
	



// Affichage de la news dans un formulaire 
?>
<h1 class="lamarge txt-center"> Ajout d'une photo d'un entraîneur </h1>

<form class="col-12 lamarge" method='POST' action='gestionentrainementajoutimage'>
        <table  width="95%" border="1" cellspacing="0" cellpadding="4">
          
            <thead> <tr>  <th> <b> Numéro </th>  <td> <input type='text' size='40' name='Ref' required> </td> </tr>       
					<tr>  <th> <b> Nom Photo </th>  <td> <input type='text' size='40' name='RefPhoto' required> </td> </tr>
								
                                </tr>					
            </thead>
        </table>
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
	
	   
	
		   $sql="INSERT INTO photobureau VALUES (? , ?)"; 
		   $resultats=$connexion->prepare($sql); 
	  	   $resultats->execute(array( $_POST['Ref'] ,  $_POST['RefPhoto'] ));
		   // Test du résultat de requête 
		   if ($resultats == true)
				header("Location: gestionentrainement");
		   else
				echo "<script> alert('Erreur lors de l\'ajout !'); </script>";	

$resultats->closeCursor();		
}
?>