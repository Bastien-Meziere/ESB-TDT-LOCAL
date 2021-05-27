<?php class Salle extends Controller{

    function index(){
    	$tables = Model::load("lasalle");
       $tableRes['variabledix']=array("lasalle"=>$tables->find(Model::connexion(), array('inner'=>'natural join photosalle')));
        Model::deconnexion();
        
        $this-> set($tableRes);
        $this->render('index');
    }
        

}
?>