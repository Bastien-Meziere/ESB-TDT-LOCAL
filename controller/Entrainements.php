<?php class Entrainements extends Controller{

function index(){

    $tables = Model::load("entrainement");
    $tableRes['variablequatre']=array("entrainement"=>$tables->find(Model::connexion(), array('inner'=>'natural join photobureau')));
    Model::deconnexion();

    $tableRes["variable"]=array('titre'=>'Accueil', 'description'=>'trop de blabla');
    $this-> set($tableRes);
    $this->render('index');

    }
}