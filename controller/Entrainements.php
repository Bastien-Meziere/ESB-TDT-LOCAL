<?php class Entrainements extends Controller{

    function index(){

        $tables = Model::load("entrainement");
       $tableRes['variablequatre']=array("entrainement"=>$tables->find(Model::connexion(), array('inner'=>'natural join photobureau')));
        Model::deconnexion();

        $this-> set($tableRes);
        $this->render('index');
    }
        

}
?>