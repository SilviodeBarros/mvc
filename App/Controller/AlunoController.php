<?php

namespace App\Controller;
use App\Model\Aluno;

class AlunoController {

    public static function cadastro(){
        //echo "teste"; exit;

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $model = new Aluno();
                
            $model->Nome = $_POST['nome']; 
            $model->Ra = $_POST['ra'];
            $model->Curso = $_POST['curso'];
           // var_dump($model); exit;
            var_dump($model->save());
            echo $model->Id;
        } else {
                include VIEWS . '/Aluno/form_aluno.php' ; exit;
        }
    }

    public static function listar(){
        $model = new Aluno();
        $listaAlunos = $model->getAllRows();
        include VIEWS . '/Aluno/lista_aluno.php';
    }
    
}