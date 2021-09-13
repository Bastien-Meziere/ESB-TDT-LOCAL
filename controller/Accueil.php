<?php class Accueil extends Controller{

function index(){

    $tables = Model::load("slide");
    $tableRes['variablequarante']=array("slide"=>$tables->find(Model::connexion(), array('inner'=>'natural join photoslide')));
    Model::deconnexion();

    $tables = Model::load("equipe");
    $tableRes['variableonze']=array("equipe"=>$tables->find(Model::connexion(), array('inner'=>'natural join photoequipe')));
    Model::deconnexion();

    $tableRes["test"]=array('titre'=>'Accueil', 'description'=>'Bienvenue sur le site web de ES Bonchamp Tdt !');
    $this-> set($tableRes);
    $this->render('index');

    }
}