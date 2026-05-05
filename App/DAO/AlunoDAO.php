<?php
namespace App\DAO;

use App\Model\Aluno;
use App\DAO\DAO;

class AlunoDAO extends DAO {
     public function __construct()
    {
        parent::__construct();
    }

    function save( Aluno $model ) : Aluno {

        //var_dump($model); echo "tt";;  exit;
        if($model->Id == null){
            return $this->insert($model);
        } else {
             return $this->update($model);
        }
    }

    function insert(Aluno $model) : Aluno{
        //var_dump($model); echo "tt";;  exit;
        //echo "INSERT"; exi  t;
        $sql = "INSERT INTO Aluno (Nome, Ra, Curso) VALUES (:nome, :ra, :curso)";
        //$nome='teste';
        //$ra=6;
        //$curso="saasda";
        $stmt = parent::$conexao->prepare($sql);
        $stmt->bindParam(":nome", $model->Nome);
        $stmt->bindParam(":ra", $model->Ra);
        $stmt->bindParam(":curso", $model->Curso);
        $stmt->execute();
        $model->Id = parent::$conexao->lastInsertId();
        //var_dump($model->Id);
        return $model;
    }

    function update(Aluno $model){
  //
  
  echo "UPDATE .";
//var_dump($model); echo "update" ; 
//exit;
        
        $sql = "UPDATE Aluno SET 
                Nome = :nome,
                Ra = :ra,
                Curso = :curso
        WHERE Id = :Id";

        $stmt = parent::$conexao->prepare($sql);
        $stmt->bindParam(":Id", $model->Id);
        $stmt->bindParam(":nome", $model->Nome);
        $stmt->bindParam(":ra", $model->Ra);
        $stmt->bindParam(":curso", $model->Curso);
        $stmt->execute();
        
        $model->Id == parent::$conexao->lastInsertId();
        return $model;
    }

    function selectById(int $id): Aluno {
        $sql = "SELECT * FROM Aluno WHERE Id = ?"; 
        $stmt = parent::$conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
        return $stmt->fetchObject("App\Model\Aluno");
    }

    function selectAll() : array {
        $sql = "SELECT * FROM Aluno"; 
        $stmt = parent::$conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(DAO::FETCH_CLASS, "App\Model\Aluno");
    }

    function delete($id) : bool {
        $sql = "DELETE FROM Aluno WHERE id=?";
        $stmt = parent::$conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        return $stmt->execute();
        
    }
}