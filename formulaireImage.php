<html>
<head>
	<title> ES Bonchamp TDT </title>
</head>
<body>

<?php 
if (!isset($_POST['Libelle']))
{
?>

<form class="lamarge3 col-12 text-center" action="formulaireImage.php" method="POST" enctype="multipart/form-data">
Titre <input type='text' name="Libelle">
<br/>
Image <input class="bureau" type='file' name='monimage'>
<br/><br/>
<input type='submit' value='Envoyer le fichier'>
</form>

<?php 
}
else
{
	require_once('fonction.php');
    
    var_dump($_POST);  // Test

    var_dump($_FILES);  // Test

    // Nom du fichier avec la date de l'upload pour éviter doublons dans le répertoire
	$nouveauNom = $_POST['Libelle']."-".date('d-m-Y');  
    
    // Appel de la fonction de transfert du fichier fonctions.php qui renvoie le message à afficher
    // On précise le nom du champ du formulaire, le nouveau nom du fichier, et le chemin où placer le fichier
    echo TransfertImage("monimage", $nouveauNom, "asset/images/");

    // Il faut rajouter ici la sauvegarde du chemin et du nom du fichier dans la base de données
    // C'est à dire il faut un champ dans une table avec le LIBELLE de l'image et le chemin avec le nom du fichier
    // On stocke donc $_POST['Libelle'] et "public/images/".$nouveauNom
    // De cette façon, il sera possible d'afficher l'image avec <img src="........">

}
?>

</body>
</html>