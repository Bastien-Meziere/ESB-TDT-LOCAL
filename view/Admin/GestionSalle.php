<!-- Affichage des photos de la salle dans un tableau -->
<?php
require_once("Fonctions.php");
$connexion = BDDConnexionPDO();

 //////////////// Rercherche des photos de la salle /////////////////////////
	  
$lesSalle=$connexion->query("SELECT * FROM lasalle ORDER BY num_salle, id_photosalle"); 
$lesSalle->setFetchMode(PDO::FETCH_OBJ); 

$lesSalles=$connexion->query("SELECT * FROM photosalle ORDER BY id_photosalle, img_photosalle"); 
$lesSalles->setFetchMode(PDO::FETCH_OBJ);
?>

<h1 class="lamarge txt-center"> Gestion des photos de la salle (Page Salle) </h1>

<!-- Tableau des photos de la salle -->
<div class="container-fluid">
    <div class="row lamarge table-responsive">
        <table class="col-12 margeproduit table table-striped table-hover">
        <tr>           
                            <th class="txt-center"> <b> Numéro </th>
                            <th class="txt-center"> <b> Titre </th>
                            <th class="txt-center"> <b> Description </th>
                            <th class="txt-center"> <b> Numéro Photo </th>
                            <th class="txt-center"> Modifier </th> 
                            <th class="txt-center"> Supprimer </th> 
        </tr>
            <?php
            
            while( $UnSalle = $lesSalle->fetch() ) 
            { 
                echo "<td align='center'>".$UnSalle->num_salle."</td>";
                echo "<td align='center'>".$UnSalle->titre_salle."</td>";
                echo "<td align='center'>".$UnSalle->desc_salle."</td>";
                echo "<td align='center'>".$UnSalle->id_photosalle."</td>";
                echo "<td align='center'> <form action='gestionsallemodif' method='POST'> 
                <input type='hidden' name='num' value='".$UnSalle->num_salle."'>
                <input type='image' src='../asset/images/Modifier.png'>
                </form>";

            // <a href='gestionproduitmodif?num=".$UnProduit->id_produit."'><img src='../asset/images/Modifier.png'></a></td>";
                echo "<td align='center'> <form action='gestionsallesupp' method='POST'>
                <input type='hidden' name='num' value='".$UnSalle->num_salle."'>
                <input type='image' src='../asset/images/Poubelle.png'>
                </form>
                </a></td> </tr>";
                
            } 
            ?>
        </table>
    </div>
</div>

<p><a style='text-decoration:none;' href='<?=WEBROOT.'admin/gestionsalleajout'?>'><img src='../asset/images/Ajouter.png'>&nbsp;Ajouter une nouvelle section de la salle</a></p>

<!-- Tableau des photos de la salle -->
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
            
            while( $UnSalle = $lesSalles->fetch() ) 
            { 
                echo "<tr> <td align='center'> <img src='../asset/images/".$UnSalle->img_photosalle."' width='50'> </td>";
                echo "<td align='center'>".$UnSalle->id_photosalle."</td>";
                echo "<td align='center'>".$UnSalle->img_photosalle."</td>";

            // <a href='gestionproduitmodif?num=".$UnProduit->id_produit."'><img src='../asset/images/Modifier.png'></a></td>";
                echo "<td align='center'> <form action='gestionsallesuppimage' method='POST'>
                <input type='hidden' name='num' value='".$UnSalle->id_photosalle."'>
                <input type='image' src='../asset/images/Poubelle.png'>
                </form>
                </a></td> </tr>";
                
            } 
            ?>
        </table>
    </div>
</div>

<p><a style='text-decoration:none;' href='<?=WEBROOT.'admin/gestionsalleajoutimage'?>'><img src='../asset/images/Ajouter.png'>&nbsp;Ajouter une photo de la salle</a></p>

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