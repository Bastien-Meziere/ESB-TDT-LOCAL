<?php class Boutique extends Controller{
    
function index(){

    $tables = Model::load("produit");
    $tableRes['variable']=array("produit"=>$tables->find(Model::connexion(), array('inner'=>'natural join illustration')));
    Model::deconnexion();

    $tableRes["variablee"]=array('titre'=>'Boutique', 'description'=>'trop de blabla');
    $this-> set($tableRes);
    $this->render('index');
        
    }    
}