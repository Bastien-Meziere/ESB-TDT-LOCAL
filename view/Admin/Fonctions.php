﻿<?php


function BDDConnexionPDO()
{
$PARAM_hote='localhost';  $PARAM_port='';
$PARAM_nom_bd='esbtdt';  $PARAM_utilisateur='root'; 
$PARAM_mot_passe=''; 
try
{      $connexion = new PDO('mysql:host='.$PARAM_hote.'; dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe);
       $connexion->exec("SET CHARACTER SET utf8");
       $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
 catch(Exception $e)
{     echo 'Erreur : '.$e->getMessage().'<br />';
        echo 'N° : '.$e->getCode();
  die;
} 
return $connexion;
}  



/*function RechargerPage($NomPage)
{
  // Recharge la page en cours avec la page passée en paramètre et recharge le cadre principal
  echo "<SCRIPT LANGUAGE='JavaScript' TYPE='text/javascript'>";
  echo "document.location ='".$NomPage."';";
  echo "</SCRIPT>";
}
?>*/