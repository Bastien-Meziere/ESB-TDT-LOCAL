<!-- Affichage des entraîneurs dans un tableau -->
<?php
require_once("Fonctions.php");
$connexion = BDDConnexionPDO();

 //////////////// Rercherche des entraîneurs /////////////////////////
	  
$lesEntrainement=$connexion->query("SELECT * FROM entrainement ORDER BY num_entrainement, id_photobureau"); 
$lesEntrainement->setFetchMode(PDO::FETCH_OBJ);

$lesEntrainements=$connexion->query("SELECT * FROM photobureau ORDER BY id_photobureau, img_photobureau"); 
$lesEntrainements->setFetchMode(PDO::FETCH_OBJ); 
?>

<h1 class="lamarge txt-center"> Gestion des entraîneurs (Page Entraînements) </h1>

<!-- Tableau des entraîneurs -->
<div class="container-fluid">
    <div class="row lamarge table-responsive">
        <table class="col-12 margeproduit table table-striped table-hover">
        <tr>           
                            <th class="txt-center"> <b> Numéro </th>
                            <th class="txt-center"> <b> Nom </th>
                            <th class="txt-center"> <b> Rôle </th>
                            <th class="txt-center"> <b> Description </th>
                            <th class="txt-center"> <b> Numéro Photo </th>
                            <th class="txt-center"> Modifier </th> 
                            <th class="txt-center"> Supprimer </th> 
        </tr>
            <?php
            
            while( $UnEntrainement = $lesEntrainement->fetch() ) 
            { 
                echo "<td align='center'>".$UnEntrainement->num_entrainement."</td>";
                echo "<td align='center'>".$UnEntrainement->nom_entrainement."</td>";
                echo "<td align='center'>".$UnEntrainement->role_entrainement."</td>";
                echo "<td align='center'>".$UnEntrainement->desc_entrainement."</td>";
                echo "<td align='center'>".$UnEntrainement->id_photobureau."</td>";
                echo "<td align='center'> <form action='gestionentrainementmodif' method='POST'> 
                <input type='hidden' name='num' value='".$UnEntrainement->num_entrainement."'>
                <input type='image' src='../asset/images/Modifier.png'>
                </form>";

            // <a href='gestionproduitmodif?num=".$UnProduit->id_produit."'><img src='../asset/images/Modifier.png'></a></td>";
                echo "<td align='center'> <form action='gestionentrainementsupp' method='POST'>
                <input type='hidden' name='num' value='".$UnEntrainement->num_entrainement."'>
                <input type='image' src='../asset/images/Poubelle.png'>
                </form>
                </a></td> </tr>";
                
            } 
            ?>
        </table>
    </div>
</div>

<p><a style='text-decoration:none;' href='<?=WEBROOT.'admin/gestionentrainementajout'?>'><img src='../asset/images/Ajouter.png'>&nbsp;Ajouter un entraîneur</a></p>

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
            
            while( $UnEntrainement = $lesEntrainements->fetch() ) 
            { 
                echo "<tr> <td align='center'> <img src='../asset/images/".$UnEntrainement->img_photobureau."' width='50'> </td>";
                echo "<td align='center'>".$UnEntrainement->id_photobureau."</td>";
                echo "<td align='center'>".$UnEntrainement->img_photobureau."</td>";

            // <a href='gestionproduitmodif?num=".$UnProduit->id_produit."'><img src='../asset/images/Modifier.png'></a></td>";
                echo "<td align='center'> <form action='gestionentrainementsuppimage' method='POST'>
                <input type='hidden' name='num' value='".$UnEntrainement->id_photobureau."'>
                <input type='image' src='../asset/images/Poubelle.png'>
                </form>
                </a></td> </tr>";
                
            } 
            ?>
        </table>
    </div>
</div>

<p><a style='text-decoration:none;' href='<?=WEBROOT.'admin/gestionentrainementajoutimage'?>'><img src='../asset/images/Ajouter.png'>&nbsp;Ajouter une photo d'un entraîneur</a></p>

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