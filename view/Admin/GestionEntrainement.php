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

<h1 class="lamarge txt-center"> Gestion des entraîneurs </h1>

<!-- Tableau des entraîneurs -->
<table border=1 class="col-12 margeproduit">
<tr>           
                    <th class="txt-center"> <b> Photo </th>
                    <th> <b> Numéro </th>
                    <th> <b> Nom </th>
                    <th> <b> Rôle </th>
                    <th> <b> Description </th>
                    <th> <b> Numéro Photo </th>
                    <th class="txt-center"> Modifier </th> 
                    <th class="txt-center"> Supprimer </th> 
 </tr>
    <?php
    
	while( $UnEntrainement = $lesEntrainement->fetch() ) 
	{ 
         echo "<tr> <td align='center'> <img src='../asset/images/".$UnEntrainement->id_photobureau."' width='40'> </td>";
         echo "<td>".$UnEntrainement->num_entrainement."</td>";
         echo "<td>".$UnEntrainement->nom_entrainement."</td>";
         echo "<td>".$UnEntrainement->role_entrainement."</td>";
         echo "<td>".$UnEntrainement->desc_entrainement."</td>";
         echo "<td>".$UnEntrainement->id_photobureau."</td>";
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

<p><a style='text-decoration:none;' href='<?=WEBROOT.'admin/gestionentrainementajout'?>'><img src='../asset/images/Ajouter.png'>&nbsp;Ajouter un entraîneur</a></p>

<!-- Tableau des photos de la salle -->
<table border=1 class="col-12 margeproduit">
<tr>           
                    <th> <b> Numéro Photo </th>
                    <th> <b> Nom Photo </th>
                    <th class="txt-center"> Supprimer </th> 
 </tr>
    <?php
    
    while( $UnEntrainement = $lesEntrainements->fetch() ) 
    { 
         echo "<td>".$UnEntrainement->id_photobureau."</td>";
         echo "<td>".$UnEntrainement->img_photobureau."</td>";

       // <a href='gestionproduitmodif?num=".$UnProduit->id_produit."'><img src='../asset/images/Modifier.png'></a></td>";
        echo "<td align='center'> <form action='gestionentrainementsuppimage' method='POST'>
        <input type='hidden' name='num' value='".$UnEntrainement->id_photobureau."'>
        <input type='image' src='../asset/images/Poubelle.png'>
        </form>
        </a></td> </tr>";
        
    } 
    ?>
</table>

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

