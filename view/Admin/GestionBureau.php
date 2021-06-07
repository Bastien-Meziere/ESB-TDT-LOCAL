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

<h1 class="lamarge txt-center"> Gestion de la page Bureau </h1>

<!-- Tableau des membres du bureau -->
<table border=1 class="col-12 margeproduit">
<tr>           
                    <th> <b> Numéro </th>
                    <th> <b> Nom </th>
                    <th> <b> Rôle </th>
                    <th> <b> Description </th>
                    <th> <b> Numéro Photo </th>
                    <th class="txt-center"> Modifier </th> 
                    <th class="txt-center"> Supprimer </th> 
 </tr>
    <?php
    
	while( $UnBureau = $lesBureau->fetch() ) 
	{ 
        echo "<td>".$UnBureau->num_bureau."</td>";
        echo "<td>".$UnBureau->nom_bureau."</td>";
        echo "<td>".$UnBureau->role_bureau."</td>";
        echo "<td>".$UnBureau->desc_bureau."</td>";
        echo "<td>".$UnBureau->id_photobureau."</td>";
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

<p><a style='text-decoration:none;' href='<?=WEBROOT.'admin/gestionbureauajout'?>'><img src='../asset/images/Ajouter.png'>&nbsp;Ajouter un membre du bureau</a></p>

<!-- Tableau des photos de la salle -->
<table border=1 class="col-12 margeproduit">
<tr>           
                    <th class="txt-center"> <b> Photo </th>
                    <th> <b> Numéro Photo </th>
                    <th> <b> Nom Photo </th>
                    <th class="txt-center"> Supprimer </th> 
 </tr>
    <?php
    
    while( $UnBureau = $lesBureaus->fetch() ) 
    { 
        echo "<tr> <td align='center'> <img src='../asset/images/".$UnBureau->img_photobureau."' width='50'> </td>";
        echo "<td>".$UnBureau->id_photobureau."</td>";
        echo "<td>".$UnBureau->img_photobureau."</td>";

       // <a href='gestionproduitmodif?num=".$UnProduit->id_produit."'><img src='../asset/images/Modifier.png'></a></td>";
        echo "<td align='center'> <form action='gestionbureausuppimage' method='POST'>
        <input type='hidden' name='num' value='".$UnBureau->id_photobureau."'>
        <input type='image' src='../asset/images/Poubelle.png'>
        </form>
        </a></td> </tr>";
        
    } 
    ?>
</table>

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

