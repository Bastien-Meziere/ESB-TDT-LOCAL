<!-- Affichage des photos de la salle dans un tableau -->
<?php
require_once("Fonctions.php");
$connexion = BDDConnexionPDO();

 //////////////// Rercherche des photos de la salle /////////////////////////
	  
$lesSlide=$connexion->query("SELECT * FROM slide ORDER BY num_slide, id_photoslide"); 
$lesSlide->setFetchMode(PDO::FETCH_OBJ); 

$lesSlides=$connexion->query("SELECT * FROM photoslide ORDER BY id_photoslide, img_photoslide"); 
$lesSlides->setFetchMode(PDO::FETCH_OBJ);
?>

<h1 class="lamarge txt-center"> Gestion des slides (Page Accueil) </h1>

<!-- Tableau des photos de la salle -->
<div class="container-fluid">
    <div class="row lamarge table-responsive">
        <table class="col-12 margeproduit table table-striped table-hover">
        <tr>           
                            <th class="txt-center"> <b> Numéro </th>
                            <th class="txt-center"> <b> Contenu 1 </th>
                            <th class="txt-center"> <b> Contenu 2 </th>
                            <th class="txt-center"> <b> Contenu 3 </th>
                            <th class="txt-center"> <b> Contenu 4 </th>
                            <th class="txt-center"> <b> Numéro Photo </th>
                            <th class="txt-center"> Modifier </th> 
                            <th class="txt-center"> Supprimer </th> 
        </tr>
            <?php
            
            while( $UnSlide = $lesSlide->fetch() ) 
            { 
                echo "<td align='center'>".$UnSlide->num_slide."</td>";
                echo "<td align='center'>".$UnSlide->contenu1_slide."</td>";
                echo "<td align='center'>".$UnSlide->contenu2_slide."</td>";
                echo "<td align='center'>".$UnSlide->contenu3_slide."</td>";
                echo "<td align='center'>".$UnSlide->contenu4_slide."</td>";
                echo "<td align='center'>".$UnSlide->id_photoslide."</td>";
                echo "<td align='center'> <form action='gestionslidemodif' method='POST'> 
                <input type='hidden' name='num' value='".$UnSlide->num_slide."'>
                <input type='image' src='../asset/images/Modifier.png'>
                </form>";

            // <a href='gestionproduitmodif?num=".$UnProduit->id_produit."'><img src='../asset/images/Modifier.png'></a></td>";
                echo "<td align='center'> <form action='gestionslidesupp' method='POST'>
                <input type='hidden' name='num' value='".$UnSlide->num_slide."'>
                <input type='image' src='../asset/images/Poubelle.png'>
                </form>
                </a></td> </tr>";
                
            } 
            ?>
        </table>
    </div>
</div>

<p><a style='text-decoration:none;' href='<?=WEBROOT.'admin/gestionslideajout'?>'><img src='../asset/images/Ajouter.png'>&nbsp;Ajouter une nouvelle slide</a></p>

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
            
            while( $UnSlide = $lesSlides->fetch() ) 
            { 
                echo "<tr> <td align='center'> <img src='../asset/images/".$UnSlide->img_photoslide."' width='50'> </td>";
                echo "<td align='center'>".$UnSlide->id_photoslide."</td>";
                echo "<td align='center'>".$UnSlide->img_photoslide."</td>";

            // <a href='gestionproduitmodif?num=".$UnProduit->id_produit."'><img src='../asset/images/Modifier.png'></a></td>";
                echo "<td align='center'> <form action='gestionslidesuppimage' method='POST'>
                <input type='hidden' name='num' value='".$UnSlide->id_photoslide."'>
                <input type='image' src='../asset/images/Poubelle.png'>
                </form>
                </a></td> </tr>";
                
            } 
            ?>
        </table>
    </div>
</div>

<p><a style='text-decoration:none;' href='<?=WEBROOT.'admin/gestionslideajoutimage'?>'><img src='../asset/images/Ajouter.png'>&nbsp;Ajouter une photo de slide</a></p>

<!-- Bouton de retour -->
<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <form>
                <button class="btn btn-primary lamargetrois" type="submit" formaction="<?=WEBROOT.'connexion/retour'?>">Retour</button>
            </form>
        </div>
    </div>
</div>
<!-- Fin Bouton de retour-->