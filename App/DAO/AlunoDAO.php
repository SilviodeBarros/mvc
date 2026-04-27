<?php
namespace App\DAO;

use App\Model\Aluno;
use App\DAO\DAO;

class AlunoDAO extends DAO{
     public function __construct()
    {
        parent::__construct();
    }

    function save( Aluno $model ) : Aluno {
        if($model->id == null){
            return $this->insert($model);
            
        } else {
             return $this->update($model);

        }

        //return ($model->id == null) ? $this->update($model) : $this->update($model);
    }

    function insert(Aluno $model) : Aluno{
        var_dump($model);
        $sql = "INSERT INTO Aluno (Nome, RA, Curso) VALUES (:nome, :ra, :curso)";
        $nome='teste';
        $ra=6;
        $curso="saasda";
        $stmt = parent::$conexao->prepare($sql);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":ra", $ra);
        $stmt->bindParam(":curso", $curso);
        $stmt->execute();
        return $model;
    }

    function update(Aluno $model){

        return $model;
    }

    function selectById(int $id): ?Aluno {
        return new Aluno;
    }

    function selectAll(): array {
        return [];
    }

    function delete($id) : bool {
        return false;
    }
}