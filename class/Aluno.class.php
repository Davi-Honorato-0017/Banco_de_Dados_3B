<?php

class Aluno extends CRUD{
    protected $table = "aluno";
    private int $id;
    private $nome;
    private $descricao;
    private $sexo;

    public function add(){
        $sql = "INSERT INTO $this->table (nome, descricao, sexo) VALUES(:nome, :descricao, :sexo)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nome", $this->nome, PDO::PARAM_STR);
        $stmt->bindParam(":descricao", $this->descricao, PDO::PARAM_STR);
        $stmt->bindParam(":sexo", $this->sexo, PDO::PARAM_STR);
        return $stmt->execute();
    }

    public function update(){
        $sql = "UPDATE $this->table SET nome = :nome, descricao = :descricao, sexo = :sexo WHERE idaluno = :id;";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id", $this->id, PDO::PARAM_INT);
        $stmt->bindParam(":nome", $this->nome, PDO::PARAM_STR);
        $stmt->bindParam(":descricao", $this->descricao, PDO::PARAM_STR);
        $stmt->bindParam(":sexo", $this->sexo, PDO::PARAM_STR);
        return $stmt->execute();    
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = (int)$id;
    }        
    
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }


    public function getSexo(){
        return $this->sexo;
    }

    public function setSexo($sexo){
        $this->sexo = $sexo;
    }

}