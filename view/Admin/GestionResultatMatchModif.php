
<?php
require_once("Fonctions.php");
$connexion = BDDConnexionPDO();

if (!isset($_POST['Ref']))
{

	


  // Affichage de la news dans un formulaire 
	$lesResultatMatch=$connexion->prepare("SELECT * FROM resultatmatch WHERE num_resultat= ? "); 
	$lesResultatMatch->execute(array( $_POST['num'] ));
	$UnResultatMatch=$lesResultatMatch->fetch(PDO::FETCH_OBJ);

	//var_dump($_POST['num']);
	//var_dump($UnProduit);
	?>
<h1 class="txt-center lamarge"> Modification d'un dernier résultat </h1>

<form method='POST' action='gestionresultatmatchmodif' class="col-12 lamarge">
    <table  width="95%" border="1" cellspacing="0" cellpadding="4">
        <thead> 
        	<tr>  <th> <b> Numéro </th> <td> <?php echo $UnResultatMatch->num_resultat; ?> </td> </tr>
        	<tr>  <th> <b> Désignation </th>  <td> <input type='text' size='40' name='Desig' value='<?php echo $UnResultatMatch->lib_resultat;?>'> </td> </tr>  
        	<tr>  <th> <b> Phrase 1 </th>  <td> <input type='text' size='80' name='Cont' value='<?php echo $UnResultatMatch->content_resultat;?>'> </td> </tr>
        	<tr>  <th> <b> Phrase 2 </th>  <td> <input type='text' size='80' name='Cont2' value='<?php echo $UnResultatMatch->content2_resultat;?>'> </td> </tr>    
         	<tr>  <th> <b> Date </th>  <td> <input type='text' size='40' name='Date' value='<?php echo $UnResultatMatch->date_resultat;?>'> </td> </tr>  
        </thead>
    </table>
	<input type='hidden' name='Ref' value='<?php echo $UnResultatMatch->num_resultat;?>'>
	<div align='center'>
	<br/>
	   <input type='image' src='../asset/images/Enregistrer.png'>
	   <a href='<?=WEBROOT.'admin/gestionresultatmatch'?>'><img border=0 src='../asset/images/Annuler.png'></a>
	</div> 
</form>
<?php
}
else
{

	// Mise à jour du contenu de la page dans la base de données 
	
   
	
		   $sql="UPDATE resultatmatch SET lib_resultat=?, content_resultat=?, content2_resultat=?, date_resultat=? WHERE num_resultat=?"; 
		   $resultats=$connexion->prepare($sql); 
	  	   $resultats->execute(array( $_POST['Desig'] , $_POST['Cont'] , $_POST['Cont2'] , $_POST['Date'] , $_POST['Ref'] ));
	  	    
		 
		   // Test du résultat de requête 
		   if ($resultats == true)
				header("Location: gestionresultatmatch");
		   else
				echo "<script> alert('Erreur lors de la modification !'); </script>";	
  
		   $resultats->closeCursor();		

}
?>

		 