<?php

use App\Controller\AlunoController;
use App\Controller\InicialController;

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($url) {
    case '/':
        InicialController::index();
        break;

    case '/alunos':
        AlunoController::listar();
        break;

    case '/alunos/cadastro':
        AlunoController::cadastro();
        
    break;

}
?>

    