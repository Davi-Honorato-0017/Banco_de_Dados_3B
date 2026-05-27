<?php

class Aluno extends CRUD
{
    protected $table = "aluno";
    private int $id;
    private $nome;
    private $objetivo;
    private $sexo;
    private int $nascimento;
    private $celular;
    private $cidade;
    private $estado;
    private $longradouro;
    private $bairro;
    private $cep;


    public function add()
    {
        $sql = "INSERT INTO $this->table (nome, objetivo, sexo, nascimento, celular,longradouro, cidade, estado, bairro, cep) VALUES(:nome, :objetivo, :sexo, :nascimento, :celular, :longradouro, :cidade, :estado, :bairro, :cep);";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nome", $this->nome, PDO::PARAM_STR);
        $stmt->bindParam(":objetivo", $this->objetivo, PDO::PARAM_STR);
        $stmt->bindParam(":sexo", $this->sexo, PDO::PARAM_STR);
        $stmt->bindParam(":nascimento", $this->nascimento, PDO::PARAM_STR);
        $stmt->bindParam(":telefone", $this->telefone, PDO::PARAM_STR);
        $stmt->bindParam(":cidade", $this->cidade, PDO::PARAM_STR);
        $stmt->bindParam(":estado", $this->estado, PDO::PARAM_STR);
        $stmt->bindParam(":longradouro", $this->longradouro, PDO::PARAM_STR);
        $stmt->bindParam(":bairro", $this->bairro, PDO::PARAM_STR);
        $stmt->bindParam(":cep", $this->cep, PDO::PARAM_STR);
        return $stmt->execute();
    }

    public function update()
    {
        $sql = "UPDATE $this->table SET nome = :nome, objetivo = :objetivo, sexo = :sexo, nascimento = :nascimento, celular = :celular, longradouro = :longradouro, cidade = :cidade, estado = :estado, bairro = :bairro, cep = :cep WHERE idaluno = :id;";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id", $this->id, PDO::PARAM_INT);
        $stmt->bindParam(":nome", $this->nome, PDO::PARAM_STR);
        $stmt->bindParam(":objetivo", $this->objetivo, PDO::PARAM_STR);
        $stmt->bindParam(":sexo", $this->sexo, PDO::PARAM_STR);
        $stmt->bindParam(":nascimento", $this->nascimento, PDO::PARAM_STR);
        $stmt->bindParam(":telefone", $this->telefone, PDO::PARAM_STR);
        $stmt->bindParam(":cidade", $this->cidade, PDO::PARAM_STR);
        $stmt->bindParam(":estado", $this->estado, PDO::PARAM_STR);
        $stmt->bindParam(":longradouro", $this->longradouro, PDO::PARAM_STR);
        $stmt->bindParam(":bairro", $this->bairro, PDO::PARAM_STR);
        $stmt->bindParam(":cep", $this->cep, PDO::PARAM_STR);
        return $stmt->execute();
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = (int) $id;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getObjetivo()
    {
        return $this->objetivo;
    }
    public function setObjetivo($objetivo)
    {
        $this->objetivo = $objetivo;
    }
    public function getSexo()
    {
        return $this->sexo;
    }
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }
    public function getDataNascimento()
    {
        return $this->nascimento;
    }
    public function setDataNascimento($nascimento)
    {
        $this->nascimento = $nascimento;
    }
    public function getCelular()
    {
        return $this->celular;
    }
    public function setCelular($celular)
    {
        $this->celular = $celular;
    }
    public function getCidade()
    {
        return $this->cidade;
    }
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }
    public function getEstado()
    {
        return $this->estado;
    }
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }
    public function getLongradouro()
    {
        return $this->longradouro;
    }
    public function setLongradouro($longradouro)
    {
        $this->longradouro = $longradouro;
    }
    public function getBairro()
    {
        return $this->bairro;
    }
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }
    public function getCep()
    {
        return $this->cep;
    }
    public function setCep($cep)
    {
        $this->cep = $cep;
    }

}
