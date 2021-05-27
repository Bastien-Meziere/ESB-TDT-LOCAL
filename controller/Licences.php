<?php class Licences extends Controller{

    function index(){
        $tables = Model::load("prixlicence");
        $tableRes['variablecinq']=array("prixlicence"=>$tables->find(Model::connexion()));
        Model::deconnexion();

        $this-> set($tableRes);
        $this->render('index');
    }
        

}
?>