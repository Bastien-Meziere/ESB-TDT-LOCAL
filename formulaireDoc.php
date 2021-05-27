<html>
<head>
	<title> ES Bonchamp TDT </title>
</head>
<body>

<?php 
if (!isset($_POST['Libelle']))
{  // Important dans la déclaration du form, il faut : enctype="multipart/form-data"
?>

<form class="lamarge3 col-12 text-center" action="formulaireDoc.php" method="POST" enctype="multipart/form-data"> 
Titre <input type='text' name="Libelle">
<br/>
Document <input class="bureau" type='file' name='mondocument'>
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
    echo TransfertDocument("mondocument", $nouveauNom, "asset/images/"); 

    // Il faut rajouter ici la sauvegarde du chemin et du nom du fichier dans la base de données
    // C'est à dire il faut un champ dans une table avec le LIBELLE du document et le chemin avec le nom du fichier
    // On stocke donc $_POST['Libelle'] et "public/images/".$nouveauNom
    // De cette façon, il sera possible d'afficher le lien vers le document avec <a href="........">

}
?>

</body>
</html>