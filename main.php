<?php
include_once(__DIR__."/../vendor/autoload.php");

use App\model\Usuario;

if(!isset($_SESSION['uLogado'])){
    $_SESSION['uLogado'] = "";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if( $_POST['name'] == 'admin' && $_POST['pass'] == 'admin') {
        $uAdminPadrao = new Usuario(); //Linha não localizada
        $uAdminPadrao->setName('admin');
        $uAdminPadrao->setPass('admin');
        $_SESSION['uLogado'] = $uAdminPadrao->getName();
        echo 'Login realizado com sucesso';
    }else{
        echo 'Nome ou senha inválidos';
    }
}