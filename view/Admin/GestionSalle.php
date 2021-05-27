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

<h1 class="lamarge txt-center"> Gestion de la page Salle </h1>

<!-- Tableau des photos de la salle -->
<table border=1 class="col-12 margeproduit">
<tr>           
                    <th class="txt-center"> <b> Photo </th>
                    <th> <b> Numéro </th>
                    <th> <b> Titre </th>
                    <th> <b> Description </th>
                    <th class="txt-center"> Modifier </th> 
                    <th class="txt-center"> Supprimer </th> 
 </tr>
    <?php
    
	while( $UnSalle = $lesSalle->fetch() ) 
	{ 
         echo "<tr> <td align='center'> <img src='../asset/images/photodeprofil/".$UnSalle->id_photosalle."' width='40'> </td>";
         echo "<td>".$UnSalle->num_salle."</td>";
         echo "<td>".$UnSalle->titre_salle."</td>";
         echo "<td>".$UnSalle->desc_salle."</td>";
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

<p><a style='text-decoration:none;' href='<?=WEBROOT.'admin/gestionsalleajout'?>'><img src='../asset/images/Ajouter.png'>&nbsp;Ajouter une nouvelle section de la salle</a></p>

<!-- Tableau des photos de la salle -->
<table border=1 class="col-12 margeproduit">
<tr>           
                    <th> <b> Numéro Photo </th>
                    <th> <b> Nom Photo </th>
                    <th class="txt-center"> Supprimer </th> 
 </tr>
    <?php
    
    while( $UnSalle = $lesSalles->fetch() ) 
    { 
         echo "<td>".$UnSalle->id_photosalle."</td>";
         echo "<td>".$UnSalle->img_photosalle."</td>";

       // <a href='gestionproduitmodif?num=".$UnProduit->id_produit."'><img src='../asset/images/Modifier.png'></a></td>";
        echo "<td align='center'> <form action='gestionsallesuppimage' method='POST'>
        <input type='hidden' name='num' value='".$UnSalle->id_photosalle."'>
        <input type='image' src='../asset/images/Poubelle.png'>
        </form>
        </a></td> </tr>";
        
    } 
    ?>
</table>

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

