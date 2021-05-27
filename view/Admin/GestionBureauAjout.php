<?php
require_once("Fonctions.php");
$connexion = BDDConnexionPDO();

if (!isset($_POST['Ref']))
{
	



// Affichage de la news dans un formulaire 
?>
<h1 class="lamarge txt-center"> Ajout d'un membre du bureau </h1>

<form class="col-12 lamarge" method='POST' action='gestionbureauajout'>
        <table  width="95%" border="1" cellspacing="0" cellpadding="4">
          
            <thead> <tr>  <th> <b> Numéro </th>  <td> <input type='text' size='40' name='Ref' required> </td> </tr>       
             <tr>  <th> <b> Nom </th>  <td> <input type='text' size='40' name='Desig' required> </td> </tr>
             	<tr>  <th> <b> Rôle </th>  <td> <input type='text' size='40' name='Role' required> </td> </tr>
             	<tr>  <th> <b> Description </th>  <td> <input type='text' size='120' name='Desc' required> </td> </tr>
					<tr>  <th> <b> Numéro Photo </th>  <td> <input type='text' size='40' name='RefPhoto' required> </td> </tr>
								
                                </tr>					
            </thead>
        </table>
		<div align='center'>
		<br/>
		   <input type='image' src='../asset/images/Enregistrer.png'> 
		   <a href='<?=WEBROOT.'admin/gestionbureau'?>'><img border=0 src='../asset/images/Annuler.png'></a>
		</div> 
</form>
<?php
}
else
{

// Mise à jour du contenu de la page dans la base de données 
	
	   
	
		   $sql="INSERT INTO lebureau VALUES (? , ? , ? , ? , ?)"; 
		   $resultats=$connexion->prepare($sql); 
	  	   $resultats->execute(array( $_POST['Ref'] , $_POST['Desig'] , $_POST['Role'] , $_POST['Desc'] ,  $_POST['RefPhoto'] ));
		   // Test du résultat de requête 
		   if ($resultats == true)
				header("Location: gestionbureau");
		   else
				echo "<script> alert('Erreur lors de l\'ajout !'); </script>";	

$resultats->closeCursor();		
}
?>