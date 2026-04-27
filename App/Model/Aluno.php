<?php

namespace App\Model;

use App\DAO\AlunoDAO;

class Aluno {

   public $id, $nome, $ra, $curso;

    function save() : Aluno { 
        $aluno = new AlunoDAO($this);
        $aluno = $aluno->save($this);
        return $aluno;
    }

    function getById() : ?Aluno {
        return new Aluno;
    }

    function getAllRows() : array {
        $listALunos =  new AlunoDAO();
        return $listALunos->selectAll();
        
    }

    function delete($id) : bool {
        return false;
    }
}