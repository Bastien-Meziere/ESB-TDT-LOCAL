<?php class Media extends Controller{
	
function index(){

    $tables = Model::load("mediaa");
    $tableRes['variablequinze']=array("mediaa"=>$tables->find(Model::connexion(), array('inner'=>'natural join photomedia')));
    Model::deconnexion();

    $tableRes["variable"]=array('titre'=>'Accueil', 'description'=>'trop de blabla');
    $this-> set($tableRes);
    $this->render('index');

    }
}