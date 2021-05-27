<!-- Affichage des prix de licence dans un tableau -->
<?php
require_once("Fonctions.php");
$connexion = BDDConnexionPDO();

 //////////////// Rercherche des prix de licence /////////////////////////
	  
$lesPrixLicence=$connexion->query("SELECT * FROM prixlicence ORDER BY num_prixlicence"); 
$lesPrixLicence->setFetchMode(PDO::FETCH_OBJ); 

?>

<h1 class="m-top150 txt-center"> Gestion des prix de la licence </h1>

<!-- Tableau des prix de la licence -->
<table border=1 class="col-12 margeproduit">
<tr>           
                    <th> <b> Numéro </th>
                    <th> <b> Catégorie </th>
                    <th> <b> Prix </th>
                    <th class="txt-center"> Modifier </th> 
 </tr>
    <?php
    
	while( $UnPrixLicence = $lesPrixLicence->fetch() ) 
	{ 
         echo "<td>".$UnPrixLicence->num_prixlicence."</td>";
         echo "<td>".$UnPrixLicence->cat_prixlicence."</td>";
         echo "<td>".$UnPrixLicence->prix_prixlicence."</td>";
  		echo "<td align='center'> <form action='gestionprixlicencemodif' method='POST'> 
        <input type='hidden' name='num' value='".$UnPrixLicence->num_prixlicence."'>
        <input type='image' src='../asset/images/Modifier.png'>
        </form>";

	} 
	?>
</table>

<!-- Bouton de retour -->
<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <form>
                <button class="btn btn-primary lamargetrois" type="submit" formaction="<?=WEBROOT.'seconnecter/retour'?>">Retour</button>
            </form>
        </div>
    </div>
</div>
<!-- Fin Bouton de retour-->



