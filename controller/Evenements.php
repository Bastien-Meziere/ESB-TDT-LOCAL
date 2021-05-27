<?php class Evenements extends Controller{
    function index(){
        $variable["test"]=array('titre'=>'Accueil', 'description'=>'trop de blabla');

        $tables = Model::load("evenement");
       $tableRes['variablequatorze']=array("evenement"=>$tables->find(Model::connexion(), array('inner'=>'natural join photoevenement')));
        Model::deconnexion();
        
        $this-> set($tableRes);
        $this->render('index');
    }
        

}
?>