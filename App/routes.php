<?php

use App\Controller\AlunoController;

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($url) {
    case '/':
        echo "Pagina inicial"; 
        break;

    case '/alunos':
        AlunoController::listar();
        break;

    case '/alunos/cadastro':
        AlunoController::cadastro();
        
    break;

}
?>

    