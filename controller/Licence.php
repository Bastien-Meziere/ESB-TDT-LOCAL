<?php class Licence extends Controller{

function index(){

    $tableRes["test"]=array('titre'=>'Licence', 'description'=>'Bienvenue sur le site web de ES Bonchamp Tdt !');
    $this-> set($tableRes);
    $this->render('index');

    $tables = Model::load("licence");
    $tableRes['variablezeroo']=array("licence"=>$tables->find(Model::connexion(), array('inner'=>'natural join photolicence')));
    Model::deconnexion();

    }
}