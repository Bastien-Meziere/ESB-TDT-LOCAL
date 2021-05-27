<?php class Mentionlegale extends Controller{
    function index(){
        $variable["test"]=array('titre'=>'Accueil', 'description'=>'trop de blabla');
        
        $this->render('index');
    }
        

}
?>