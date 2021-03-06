<?php
    session_start();

class Connexion extends Controller
{
    function index(){

        $variable["test"]=array('titre'=>'Accueil', 'description'=>'trop de blabla');
        $this-> set($variable);
        $this->render('index');
    }
    
    function connect($personne=null){
        $login=null;
        $mdp=null;
 
        if(isset($_POST['login']) && isset($_POST['mdp'])){
            $login=$_POST['login'];
            $mdp=$_POST['mdp'];
        }
        
        $tables = Model::load("admin");        
        $tableRes['variable']=
        array("admin"=>$tables->find(Model::connexion(), 
            array('condition'=>"nom_admin='".$login."' and mdp_admin='".md5($mdp)."'")));

       
        
        if(count($tableRes['variable']['admin']) ==1 || (isset($_SESSION['admin']) && !empty($_SESSION['admin']))){
            $_SESSION['admin']=$tableRes['variable']['admin'];
            $this->render('admin');
        }else{
            $_SESSION['danger'] = 1;
            header('Location: http://esb-tdt-local.test/connexion');
        }
        
        //$this-> set($tableRes);
        
    }

    function logout($personne=null){

        session_destroy();
        header('Location: http://esb-tdt-local.test/connexion');
        exit;
    }

    function retour($personne=null){

        $this->render('admin');
    }
}