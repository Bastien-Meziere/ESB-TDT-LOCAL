<?php class Bureau extends Controller{

    function index(){
    	$tables = Model::load("lebureau");
       $tableRes['variabletrois']=array("lebureau"=>$tables->find(Model::connexion(), array('inner'=>'natural join photobureau')));
        Model::deconnexion();
       
        $this-> set($tableRes);
        $this->render('index');
    }
        

}
?>