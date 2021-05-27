<!-- Affichage des membres du bureau dans un tableau -->
<?php
require_once("Fonctions.php");
$connexion = BDDConnexionPDO();

 //////////////// Rercherche des membres du bureau /////////////////////////
	  
$lesMedia=$connexion->query("SELECT * FROM mediaa ORDER BY num_media, id_photomedia"); 
$lesMedia->setFetchMode(PDO::FETCH_OBJ);

$lesMedias=$connexion->query("SELECT * FROM photomedia ORDER BY id_photomedia, img_photomedia"); 
$lesMedias->setFetchMode(PDO::FETCH_OBJ); 

?>

<h1 class="lamarge txt-center"> Gestion de la page Média </h1>

<!-- Tableau des membres du bureau -->
<table border=1 class="col-12 margeproduit">
<tr>           
                    <th> <b> Numéro </th>
                    <th> <b> Nom </th>
                    <th> <b> Numéro Photo </th>
                    <th class="txt-center"> Modifier </th> 
                    <th class="txt-center"> Supprimer </th> 
 </tr>
    <?php
    
	while( $UnMedia = $lesMedia->fetch() ) 
	{ 
         echo "<td>".$UnMedia->num_media."</td>";
         echo "<td>".$UnMedia->nom_media."</td>";
         echo "<td>".$UnMedia->id_photomedia."</td>";
  		echo "<td align='center'> <form action='gestionmediamodif' method='POST'> 
        <input type='hidden' name='num' value='".$UnMedia->num_media."'>
        <input type='image' src='../asset/images/Modifier.png'>
        </form>";

       // <a href='gestionproduitmodif?num=".$UnProduit->id_produit."'><img src='../asset/images/Modifier.png'></a></td>";
		echo "<td align='center'> <form action='gestionmediasupp' method='POST'>
        <input type='hidden' name='num' value='".$UnMedia->num_media."'>
        <input type='image' src='../asset/images/Poubelle.png'>
        </form>
        </a></td> </tr>";
        
	} 
	?>
</table>

<p><a style='text-decoration:none;' href='<?=WEBROOT.'admin/gestionmediaajout'?>'><img src='../asset/images/Ajouter.png'>&nbsp;Ajouter un média</a></p>

<!-- Tableau des photos de la salle -->
<table border=1 class="col-12 margeproduit">
<tr>           
                    <th> <b> Numéro Photo </th>
                    <th> <b> Nom Photo </th>
                    <th class="txt-center"> Supprimer </th> 
 </tr>
    <?php
    
    while( $UnMedia = $lesMedias->fetch() ) 
    { 
         echo "<td>".$UnMedia->id_photomedia."</td>";
         echo "<td>".$UnMedia->img_photomedia."</td>";

       // <a href='gestionproduitmodif?num=".$UnProduit->id_produit."'><img src='../asset/images/Modifier.png'></a></td>";
        echo "<td align='center'> <form action='gestionmediasuppimage' method='POST'>
        <input type='hidden' name='num' value='".$UnMedia->id_photomedia."'>
        <input type='image' src='../asset/images/Poubelle.png'>
        </form>
        </a></td> </tr>";
        
    } 
    ?>
</table>

<p><a style='text-decoration:none;' href='<?=WEBROOT.'admin/gestionmediaajoutimage'?>'><img src='../asset/images/Ajouter.png'>&nbsp;Ajouter une photo d'un média</a></p>

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

