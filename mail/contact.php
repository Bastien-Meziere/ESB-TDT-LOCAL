<?php
	session_start();

	$_SESSION['success'] = 1;
	$prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];
	$tel = $_POST['tel'];
	$message = $_POST['message'];
    
    $sujet="Contact ES Bonchamp TDT";
    $mailDestinataire="bastienfr14@gmail.com";

	$from .= " 1.0\nContent-Type: text/html; charset=UTF-8\n";
	
	$messageMail = "
            <h1>Formulaire de contact ES Bonchamp TDT :</h1> <br>
            <br>
            Prénom :   ".$prenom."<br>
            Nom :   ".$nom."<br>
            Email :   ".$email."<br>
            Numéro de téléphone :   ".$tel."<br>
			Message :   ".$message."<br>
            
           ";
	mail($mailDestinataire, $sujet, $messageMail, $from);
	header('Location: https://www.esbonchamp-tdt.fr/contact');
?>
