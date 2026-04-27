<?php

namespace App\Controller;

use App\Model\Aluno;

class AlunoController {

    public static function cadastro(){
        
        $model = new Aluno();
        
        //$model->id = 8;
        $model->nome="Silvio";
        $model->ra="ee";
        $model->curso="dev";
        var_dump($model->save());
        //echo "teste";
    }

    public static function listar(){

        $model = new Aluno();
        $model->getAllRows();
    }
    
}