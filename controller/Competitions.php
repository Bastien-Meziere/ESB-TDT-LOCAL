<?php class Competitions extends Controller{
    function index(){
        $variable["test"]=array('titre'=>'Accueil', 'description'=>'trop de blabla');

        $tables = Model::load("competition");
       $tableRes['variabletreize']=array("competition"=>$tables->find(Model::connexion(), array('inner'=>'natural join photocompet')));
        Model::deconnexion();

        $this-> set($tableRes);
        $this->render('index');
    }
        

}
?>