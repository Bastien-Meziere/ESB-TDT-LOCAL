<?php class Erreur extends Controller{

function index(){

    $this-> set($tableRes);
    $this->render('index');

    }

function perdu(){

    $this->render('404');

    }
}