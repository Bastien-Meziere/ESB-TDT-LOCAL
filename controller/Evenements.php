<?php class Evenements extends Controller{

function index(){

    $tables = Model::load("evenement");
    $tableRes['variablequatorze']=array("evenement"=>$tables->find(Model::connexion(), array('inner'=>'natural join photoevenement')));
    Model::deconnexion();

    $tableRes["variable"]=array('titre'=>'Accueil', 'description'=>'trop de blabla');
    $this-> set($tableRes);
    $this->render('index');

    }
}