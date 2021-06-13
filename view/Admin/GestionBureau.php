<!-- Affichage des membres du bureau dans un tableau -->
<?php
require_once("Fonctions.php");
$connexion = BDDConnexionPDO();

 //////////////// Rercherche des membres du bureau /////////////////////////
	  
$lesBureau=$connexion->query("SELECT * FROM lebureau ORDER BY num_bureau, id_photobureau"); 
$lesBureau->setFetchMode(PDO::FETCH_OBJ);

$lesBureaus=$connexion->query("SELECT * FROM photobureau ORDER BY id_photobureau, img_photobureau"); 
$lesBureaus->setFetchMode(PDO::FETCH_OBJ); 
?>

<h1 class="lamarge txt-center"> Gestion des membres du bureau (Page bureau) </h1>

<!-- Tableau des membres du bureau -->
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
    
        while( $UnBureau = $lesBureau->fetch() ) 
        { 
            echo "<td align='center'>".$UnBureau->num_bureau."</td>";
            echo "<td align='center'>".$UnBureau->nom_bureau."</td>";
            echo "<td align='center'>".$UnBureau->role_bureau."</td>";
            echo "<td align='center'>".$UnBureau->desc_bureau."</td>";
            echo "<td align='center'>".$UnBureau->id_photobureau."</td>";
            echo "<td align='center'> <form action='gestionbureaumodif' method='POST'> 
            <input type='hidden' name='num' value='".$UnBureau->num_bureau."'>
            <input type='image' src='../asset/images/Modifier.png'>
            </form>";

        // <a href='gestionproduitmodif?num=".$UnProduit->id_produit."'><img src='../asset/images/Modifier.png'></a></td>";
            echo "<td align='center'> <form action='gestionbureausupp' method='POST'>
            <input type='hidden' name='num' value='".$UnBureau->num_bureau."'>
            <input type='image' src='../asset/images/Poubelle.png'>
            </form>
            </a></td> </tr>";
            
        } 
        ?>
        </table>
    </div>
</div>

<p><a style='text-decoration:none;' href='<?=WEBROOT.'admin/gestionbureauajout'?>'><img src='../asset/images/Ajouter.png'>&nbsp;Ajouter un membre du bureau</a></p>

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
    
        while( $UnBureau = $lesBureaus->fetch() ) 
        { 
            echo "<tr> <td align='center'> <img src='../asset/images/".$UnBureau->img_photobureau."' width='50'> </td>";
            echo "<td align='center'>".$UnBureau->id_photobureau."</td>";
            echo "<td align='center'>".$UnBureau->img_photobureau."</td>";

        // <a href='gestionproduitmodif?num=".$UnProduit->id_produit."'><img src='../asset/images/Modifier.png'></a></td>";
            echo "<td align='center'> <form action='gestionbureausuppimage' method='POST'>
            <input type='hidden' name='num' value='".$UnBureau->id_photobureau."'>
            <input type='image' src='../asset/images/Poubelle.png'>
            </form>
            </a></td> </tr>";
            
        } 
        ?>
        </table>
    </div>
</div>

<p><a style='text-decoration:none;' href='<?=WEBROOT.'admin/gestionbureauajoutimage'?>'><img src='../asset/images/Ajouter.png'>&nbsp;Ajouter une photo d'un membre de bureau</a></p>

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