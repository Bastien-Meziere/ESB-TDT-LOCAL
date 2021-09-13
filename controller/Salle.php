<?php class Salle extends Controller{

function index(){

    $tables = Model::load("lasalle");
    $tableRes['variabledix']=array("lasalle"=>$tables->find(Model::connexion(), array('inner'=>'natural join photosalle')));
    Model::deconnexion();

    $tableRes["variable"]=array('titre'=>'Accueil', 'description'=>'trop de blabla');
    $this-> set($tableRes);
    $this->render('index');

    }
}