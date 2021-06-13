<!-- Affichage des membres du bureau dans un tableau -->
<?php
require_once("Fonctions.php");
$connexion = BDDConnexionPDO();

 //////////////// Rercherche des membres du bureau /////////////////////////
	  
$lesEvenement=$connexion->query("SELECT * FROM evenement ORDER BY num_evenement, id_photoevenement"); 
$lesEvenement->setFetchMode(PDO::FETCH_OBJ);

$lesEvenements=$connexion->query("SELECT * FROM photoevenement ORDER BY id_photoevenement, img_photoevenement"); 
$lesEvenements->setFetchMode(PDO::FETCH_OBJ); 
?>

<h1 class="lamarge txt-center"> Gestion des événements (Page Événements) </h1>

<!-- Tableau des membres des équipes -->
<div class="container-fluid">
    <div class="row lamarge table-responsive">
        <table class="col-12 margeproduit table table-striped table-hover">
        <tr>           
                            <th class="txt-center"> <b> Numéro </th>
                            <th class="txt-center"> <b> Description </th>
                            <th class="txt-center"> <b> Numéro Photo </th>
                            <th class="txt-center"> Modifier </th> 
                            <th class="txt-center"> Supprimer </th> 
        </tr>
            <?php
            
            while( $UnEvenement = $lesEvenement->fetch() ) 
            { 
                echo "<td align='center'>".$UnEvenement->num_evenement."</td>";
                echo "<td align='center'>".$UnEvenement->desc_evenement."</td>";
                echo "<td align='center'>".$UnEvenement->id_photoevenement."</td>";
                echo "<td align='center'> <form action='gestionevenementmodif' method='POST'> 
                <input type='hidden' name='num' value='".$UnEvenement->num_evenement."'>
                <input type='image' src='../asset/images/Modifier.png'>
                </form>";

            // <a href='gestionproduitmodif?num=".$UnProduit->id_produit."'><img src='../asset/images/Modifier.png'></a></td>";
                echo "<td align='center'> <form action='gestionevenementsupp' method='POST'>
                <input type='hidden' name='num' value='".$UnEvenement->num_evenement."'>
                <input type='image' src='../asset/images/Poubelle.png'>
                </form>
                </a></td> </tr>";
                
            } 
            ?>
        </table>
    </div>
</div>

<p><a style='text-decoration:none;' href='<?=WEBROOT.'admin/gestionevenementajout'?>'><img src='../asset/images/Ajouter.png'>&nbsp;Ajouter un événement</a></p>

<!-- Tableau des photos des équipes -->
<div class="container-fluid">
    <div class="row lamarge table-responsive">
        <table class="col-12 margeproduit table table-striped table-hover">
        <tr>           
                            <th class="txt-center"> <b> Photo </th>
                            <th class="txt-center"> <b> Numéro Photo </th>
                            <th class="txt-center"> <b> Nom Photo </th>
                            <th class="txt-center"> Supprimer </th> 
        </tr>
            <?php
            
            while( $UnEvenement = $lesEvenements->fetch() ) 
            { 
                echo "<tr> <td align='center'> <img src='../asset/images/".$UnEvenement->img_photoevenement."' width='50'> </td>";
                echo "<td align='center'>".$UnEvenement->id_photoevenement."</td>";
                echo "<td align='center'>".$UnEvenement->img_photoevenement."</td>";

            // <a href='gestionproduitmodif?num=".$UnProduit->id_produit."'><img src='../asset/images/Modifier.png'></a></td>";
                echo "<td align='center'> <form action='gestionevenementsuppimage' method='POST'>
                <input type='hidden' name='num' value='".$UnEvenement->id_photoevenement."'>
                <input type='image' src='../asset/images/Poubelle.png'>
                </form>
                </a></td> </tr>";
                
            } 
            ?>
        </table>
    </div>
</div>
<p><a style='text-decoration:none;' href='<?=WEBROOT.'admin/gestionevenementajoutimage'?>'><img src='../asset/images/Ajouter.png'>&nbsp;Ajouter une photo d'un événement</a></p>

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