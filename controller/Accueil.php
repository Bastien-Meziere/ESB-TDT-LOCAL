<?php class Accueil extends Controller{

    function index(){
    	$tables = Model::load("resultatmatch");
       $tableRes['variable']=array("resultatmatch"=>$tables->find(Model::connexion()));
        Model::deconnexion();

        $tables = Model::load("prochainmatch");
       $tableRes['variabledeux']=array("prochainmatch"=>$tables->find(Model::connexion()));
        Model::deconnexion();

        $tables = Model::load("equipe");
       $tableRes['variableonze']=array("equipe"=>$tables->find(Model::connexion(), array('inner'=>'natural join photoequipe')));
        Model::deconnexion();

        $this-> set($tableRes);
        $this->render('index');
    }

  

}
?>
