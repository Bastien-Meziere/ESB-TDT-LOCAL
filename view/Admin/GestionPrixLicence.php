<!-- Affichage des prix de licence dans un tableau -->
<?php
require_once("Fonctions.php");
$connexion = BDDConnexionPDO();

 //////////////// Rercherche des prix de licence /////////////////////////
	  
$lesPrixLicence=$connexion->query("SELECT * FROM prixlicence ORDER BY num_prixlicence"); 
$lesPrixLicence->setFetchMode(PDO::FETCH_OBJ); 
?>

<h1 class="m-top150 txt-center"> Gestion des prix de la licence (Page Licences) </h1>

<!-- Tableau des prix de la licence -->
<div class="container-fluid">
    <div class="row lamarge table-responsive">
        <table class="col-12 margeproduit table table-striped table-hover">
        <tr>           
                            <th class="txt-center"> <b> Numéro </th>
                            <th class="txt-center"> <b> Catégorie </th>
                            <th class="txt-center"> <b> Prix </th>
                            <th class="txt-center"> Modifier </th>
        </tr>
            <?php
            
            while( $UnPrixLicence = $lesPrixLicence->fetch() ) 
            { 
                echo "<td align='center'>".$UnPrixLicence->num_prixlicence."</td>";
                echo "<td align='center'>".$UnPrixLicence->cat_prixlicence."</td>";
                echo "<td align='center'>".$UnPrixLicence->prix_prixlicence." €</td>";
                echo "<td align='center'> <form action='gestionprixlicencemodif' method='POST'> 
                <input type='hidden' name='num' value='".$UnPrixLicence->num_prixlicence."'>
                <input type='image' src='../asset/images/Modifier.png'>
                </form>";

            } 
            ?>
        </table>
    </div>
</div>

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