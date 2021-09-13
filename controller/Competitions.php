<?php class Competitions extends Controller{

function index(){

    $tables = Model::load("competition");
    $tableRes['variabletreize']=array("competition"=>$tables->find(Model::connexion(), array('inner'=>'natural join photocompet')));
    Model::deconnexion();

    $tableRes["variable"]=array('titre'=>'Accueil', 'description'=>'trop de blabla');
    $this-> set($tableRes);
    $this->render('index');

    }
}