<?php

class Usuario extends CRUD{
    protected $table = "usuario";
    private int $id;
    private $username;
    private $email;
    private $senha;
    private $tipo_usuario;
    private $ativo;

    public function add(){
        $sql = "INSERT INTO $this->table (id,username, email, senha, tipo_usuario, ativo) VALUES(:username, :email, :senha, :tipo_usuario, :ativo)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id", $this->id, PDO::PARAM_STR);
        $stmt->bindParam(":username", $this->username, PDO::PARAM_STR);
        $stmt->bindParam(":email", $this->email, PDO::PARAM_STR);
        $stmt->bindParam(":senha", $this->senha, PDO::PARAM_STR);
        $stmt->bindParam(":tipo_usuario", $this->tipo_usuario, PDO::PARAM_STR);
        $stmt->bindParam(":ativo", $this->ativo, PDO::PARAM_BOOL);
        $stmt->execute();
        $this->id = $this->db->lastInsertId();
        return $this->id;
    }

    public function update(){
        $sql = "UPDATE $this->table SET id = :id, username = :username, email = :email, senha = :senha, tipo_usuario = :tipo_usuario, ativo = :ativo WHERE id = :id;";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id",$this->id, PDO::PARAM_INT);
        $stmt->bindParam(":username", $this->username, PDO::PARAM_STR);
        $stmt->bindParam(":email", $this->email, PDO::PARAM_STR);
        $stmt->bindParam(":senha", $this->senha, PDO::PARAM_STR);
        $stmt->bindParam(":tipo_usuario", $this->tipo_usuario, PDO::PARAM_STR);
        $stmt->bindParam(":ativo", $this->ativo, PDO::PARAM_BOOL);
        return $stmt->execute();
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = (int)$id;
    }        
    
    public function getUsername(){
        return $this->username;
    }
    public function setUsername($username){
        $this->username = $username;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }


    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function getTipoUsuario(){
        return $this->tipo_usuario;
    }

    public function setTipoUsuario($tipo_usuario){
        $this->tipo_usuario = $tipo_usuario;
    }

    public function getAtivo(){
        return $this->ativo;
    }

    public function setAtivo($ativo){
        $this->ativo = $ativo;
    }
    }

