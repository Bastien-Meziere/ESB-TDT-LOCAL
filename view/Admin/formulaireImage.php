<?php
  session_start();
?>
<html>
<head>
    <?php $title = "ES Bonchamp Tdt - Ajouter une image"; ?>
</head>
<body>

<h1 class="lamarge3 txt-center"> Ajout d'une image dans le répertoire du site </h1>
<h2 class="txt-center"> Format accepté : .png/.jpg/.jpeg/.gif </h2>
<div class="container">
    <?php if(array_key_exists('success', $_SESSION)): ?>
        <div class="alert succes margetop100">
            Upload réussi !
        </div>
    <?php endif; ?>
</div>
<form class="container margetop100 col-12 text-center" action="afficherImage" method="POST" enctype="multipart/form-data">
<label for="Titre">Titre de l'image</label>
<input type='text' name="Libelle">
<br/>
<label for="monimage">Image</label>
<input class="bureau" type='file' name='monimage'>
<br/><br/>
<input type='submit' value='Envoyer le fichier'>
</form>

<!-- Bouton de retour -->
<div class="container margetop100">
    <div class="row">
        <div class="col-12 text-center">
            <form>
                <button class="btn btn-primary lamargetrois" type="submit" formaction="<?=WEBROOT.'seconnecter/retour'?>">Retour</button>
            </form>
        </div>
    </div>
</div>
<!-- Fin Bouton de retour-->

</body>
</html>
<?php
  unset($_SESSION['success']);
?>