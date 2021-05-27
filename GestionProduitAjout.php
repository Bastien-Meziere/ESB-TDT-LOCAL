<?php
require_once("Fonctions.php");
$connexion = BDDConnexionPDO();

if (!isset($_POST['Ref']))
{
	



// Affichage de la news dans un formulaire 
?>
<form method='POST' action='GestionProduitAjout.php'>
        <table  width="95%" border="1" cellspacing="0" cellpadding="4">
           <caption>Ajout d'un produit </caption>
            <thead> <tr>  <th> <b> Numéro </th>  <td> <input type='text' size='40' name='Ref' required> </td> </tr>       
             <tr>  <th> <b> Désignation </th>  <td> <input type='text' size='40' name='Desig' required> </td> </tr>
             	<tr>  <th> <b> Description </th>  <td> <input type='text' size='40' name='Desc' required> </td> </tr>
                    <tr>  <th> <b> Prix </th>  <td> <input type='text' size='5' name='Prix' required> €</td> </tr>
					<tr>  <th> <b> Photo </th>  <td> <input type='text' size='40' name='Photo' required> </td> </tr>
								
                                </tr>					
            </thead>
        </table>
		<div align='center'>
		<br/>
		   <input type='image' src='asset/images/Enregistrer.png'> 
		   <a href='GestionProduit.php'><img border=0 src='asset/images/Annuler.png'></a>
		</div> 
</form>
<?php
}
else
{

// Mise à jour du contenu de la page dans la base de données 
	
	   
	
		   $sql="INSERT INTO produit VALUES (? , ? , ? , ? , ?)"; 
		   $resultats=$connexion->prepare($sql); 
	  	   $resultats->execute(array( $_POST['Ref'] , $_POST['Desig'], $_POST['Desc'], $_POST['Prix'], $_POST['Photo'] ));
		   // Test du résultat de requête 
		   if ($resultats == true)
				RechargerPage("GestionProduit.php");
		   else
				echo "<script> alert('Erreur lors de l\'ajout !'); </script>";	

$resultats->closeCursor();		
}
?>