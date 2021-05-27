<?php class Boutique extends Controller{
    
    function index(){
        $tables = Model::load("produit");
        $tableRes['variable']=array("produit"=>$tables->find(Model::connexion(), array('inner'=>'natural join illustration')));
        Model::deconnexion();
       
        $this-> set($tableRes);
        $this->render('index');
        
    }
    
    function detail($i){
        $tables = Model::load("produit");
        $id=(int)$i;
        var_dump($id);
        $tableRes['variable']=array("produit"=>$tables->find(Model::connexion(), array('condition'=>"id_produit=$id", 'inner'=>'natural join auteur natural join illustration')), "param"=>$i);
        Model::deconnexion();
        $this-> set($tableRes);
        $this->render('detail');
    }
        
}
?>