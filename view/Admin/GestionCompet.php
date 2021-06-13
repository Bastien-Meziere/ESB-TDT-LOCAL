<!-- Affichage des membres du bureau dans un tableau -->
<?php
require_once("Fonctions.php");
$connexion = BDDConnexionPDO();

 //////////////// Rercherche des membres du bureau /////////////////////////
	  
$lesCompet=$connexion->query("SELECT * FROM competition ORDER BY num_compet, id_photocompet"); 
$lesCompet->setFetchMode(PDO::FETCH_OBJ);

$lesCompets=$connexion->query("SELECT * FROM photocompet ORDER BY id_photocompet, doc_photocompet"); 
$lesCompets->setFetchMode(PDO::FETCH_OBJ); 
?>

<h1 class="lamarge txt-center"> Gestion des saisons de Compétitions et du document de Compétitions (Page Compétitions) </h1>

<!-- Tableau des competitions -->
<div class="container-fluid">
    <div class="row lamarge table-responsive">
        <table class="col-12 margeproduit table table-striped table-hover">
        <tr>           
                            <th class="txt-center"> <b> Numéro </th>
                            <th class="txt-center"> <b> Description </th>
                            <th class="txt-center"> <b> Numéro Document </th>
                            <th class="txt-center"> Modifier </th> 
                            <th class="txt-center"> Supprimer </th> 
        </tr>
            <?php
            
            while( $UnCompet = $lesCompet->fetch() ) 
            { 
                echo "<td align='center'>".$UnCompet->num_compet."</td>";
                echo "<td align='center'>".$UnCompet->desc_compet."</td>";
                echo "<td align='center'>".$UnCompet->id_photocompet."</td>";
                echo "<td align='center'> <form action='gestioncompetmodif' method='POST'> 
                <input type='hidden' name='num' value='".$UnCompet->num_compet."'>
                <input type='image' src='../asset/images/Modifier.png'>
                </form>";

            // <a href='gestionproduitmodif?num=".$UnProduit->id_produit."'><img src='../asset/images/Modifier.png'></a></td>";
                echo "<td align='center'> <form action='gestioncompetsupp' method='POST'>
                <input type='hidden' name='num' value='".$UnCompet->num_compet."'>
                <input type='image' src='../asset/images/Poubelle.png'>
                </form>
                </a></td> </tr>";
                
            } 
            ?>
        </table>
    </div>
</div>

<p><a style='text-decoration:none;' href='<?=WEBROOT.'admin/gestioncompetajout'?>'><img src='../asset/images/Ajouter.png'>&nbsp;Ajouter une nouvelle section compétition</a></p>

<!-- Tableau des photos de la salle -->
<div class="container-fluid">
    <div class="row lamarge table-responsive">
        <table class="col-12 margeproduit table table-striped table-hover">
        <tr>           
                            <th class="txt-center"> <b> Numéro Document </th>
                            <th class="txt-center"> <b> Nom Document </th>
                            <th class="txt-center"> Supprimer </th> 
        </tr>
            <?php
            
            while( $UnCompet = $lesCompets->fetch() ) 
            { 
                echo "<td align='center'>".$UnCompet->id_photocompet."</td>";
                echo "<td align='center'>".$UnCompet->doc_photocompet."</td>";

            // <a href='gestionproduitmodif?num=".$UnProduit->id_produit."'><img src='../asset/images/Modifier.png'></a></td>";
                echo "<td align='center'> <form action='gestioncompetsuppimage' method='POST'>
                <input type='hidden' name='num' value='".$UnCompet->id_photocompet."'>
                <input type='image' src='../asset/images/Poubelle.png'>
                </form>
                </a></td> </tr>";
                
            } 
            ?>
        </table>
    </div>
</div>

<p><a style='text-decoration:none;' href='<?=WEBROOT.'admin/gestioncompetajoutimage'?>'><img src='../asset/images/Ajouter.png'>&nbsp;Ajouter un document de compétitions</a></p>

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