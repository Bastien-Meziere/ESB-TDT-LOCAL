<html>
<head>
    <?php $title = "ES Bonchamp Tdt - Ajouter une image"; ?>
</head>
<body>

<?php 
if (!isset($_POST['Libelle']))
{
?>

<h1 class="lamarge3 txt-center"> Ajout d'une image dans le répertoire du site </h1>
<h2 class="txt-center"> Format accepté : .png/.jpg/.jpeg/.gif </h2>

<form class="container lamarge3 col-12 text-center" action="formulaireimage" method="POST" enctype="multipart/form-data">
<label for="Titre">Titre de l'image</label>
<input type='text' name="Libelle">
<br/>
<label for="monimage">Image</label>
<input class="bureau" type='file' name='monimage'>
<br/><br/>
<input type='submit' value='Envoyer le fichier'>
</form>

<!-- Bouton de retour -->
<div class="container lamarge">
    <div class="row">
        <div class="col-12 text-center">
            <form>
                <button class="btn btn-primary lamargetrois" type="submit" formaction="<?=WEBROOT.'seconnecter/retour'?>">Retour</button>
            </form>
        </div>
    </div>
</div>
<!-- Fin Bouton de retour-->

<?php 
}
else
{
	require_once('fonction.php');
    
    var_dump($_POST);  // Test

    var_dump($_FILES);  // Test

    // Nom du fichier avec la date de l'upload pour éviter doublons dans le répertoire
	$nouveauNom = $_POST['Libelle'];  
    
    // Appel de la fonction de transfert du fichier fonctions.php qui renvoie le message à afficher
    // On précise le nom du champ du formulaire, le nouveau nom du fichier, et le chemin où placer le fichier
    echo TransfertImage("monimage", $nouveauNom, "asset/images/");

    //Redirection vers la page formulaireImage
    header('Location: http://localhost/ESB-TDT-LOCAL/admin/formulaireimage');

    // Il faut rajouter ici la sauvegarde du chemin et du nom du fichier dans la base de données
    // C'est à dire il faut un champ dans une table avec le LIBELLE de l'image et le chemin avec le nom du fichier
    // On stocke donc $_POST['Libelle'] et "public/images/".$nouveauNom
    // De cette façon, il sera possible d'afficher l'image avec <img src="........">

}
?>

</body>
</html>