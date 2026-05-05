<?php

namespace App\Model;
use App\DAO\AlunoDAO;

class Aluno {

   public $Id, $Nome, $Ra, $Curso;

    function save() : Aluno { 
        //var_dump($this); exit;
        $aluno = new AlunoDAO($this);
        $aluno = $aluno->save($this);
        return $aluno;
    }

    function getById($id) : ?Aluno {
        $aluno = new AlunoDAO($this);
        $aluno = $aluno->selectById($id);
        return $aluno;
    }

    function getAllRows() : array {
        $listALunos =  new AlunoDAO();
        return $listALunos->selectAll();
    }

    function delete($id) : bool {
        $aluno = new AlunoDAO();
        return $aluno->delete($id);
    }
}