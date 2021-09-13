<?php
require_once("Fonctions.php");
$connexion = BDDConnexionPDO();

if (!isset($_POST['Ref']))
{

// Affichage de la news dans un formulaire 
?>

<h1 class="lamarge txt-center"> Ajout d'une nouvelle slide </h1>

<form class="col-12 lamarge" method='POST' action='gestionslideajout'>
	<div class="container-fluid">
		<div class="row lamarge table-responsive">
			<table class="table table-striped table-hover" width="95%" cellspacing="0" cellpadding="4">
			
				<thead> <tr>  <th> <b> Numéro </th>  <td> <input type='text' size='40' name='Ref' required> </td> </tr>       
				<tr>  <th> <b> Contenu 1 </th>  <td> <input type='text' size='40' name='Desig' required> </td> </tr>
					<tr>  <th> <b> Contenu 2 </th>  <td> <input type='text' size='160' name='Desc'> </td> </tr>
					<tr>  <th> <b> Contenu 3 </th>  <td> <input type='text' size='160' name='Descc'> </td> </tr>
					<tr>  <th> <b> Contenu 4 </th>  <td> <input type='text' size='160' name='Desccc'> </td> </tr>
						<tr>  <th> <b> Numéro Photo </th>  <td> <input type='text' size='40' name='RefPhoto' required> </td> </tr>
									
									</tr>					
				</thead>
			</table>
		<div class="txt-center">
		<br/>
		<input type='image' src='../asset/images/Enregistrer.png'> 
		<a href='<?=WEBROOT.'admin/gestionslide'?>'><img src='../asset/images/Annuler.png'></a>
		</div>
		</div>
	</div>
</form>
<?php
}
else
{

// Mise à jour du contenu de la page dans la base de données 

		   $sql="INSERT INTO slide VALUES (? , ? , ? , ? , ? , ?)"; 
		   $resultats=$connexion->prepare($sql); 
	  	   $resultats->execute(array( $_POST['Ref'] , $_POST['Desig'] , $_POST['Desc'], $_POST['Descc'] , $_POST['Desccc'] ,  $_POST['RefPhoto'] ));
		   // Test du résultat de requête 
		   if ($resultats == true)
				header("Location: gestionslide");
		   else
				echo "<script> alert('Erreur lors de l\'ajout !'); </script>";	

$resultats->closeCursor();		
}
?>