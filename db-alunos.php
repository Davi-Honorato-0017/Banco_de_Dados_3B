<?php

spl_autoload_register(function ($class) {
    require_once "class/{$class}.class.php";
});

$aluno = new Aluno();

if (filter_has_var(INPUT_POST, "btnGravar")) {
    $aluno->setId(filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT));
    $aluno->setNome(filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING));
    $aluno->setSexo(filter_input(INPUT_POST, "sexo", FILTER_SANITIZE_STRING));
    $aluno->setDataNascimento(filter_input(INPUT_POST, "nascimento", FILTER_SANITIZE_STRING));
    $aluno->setTelefone(filter_input(INPUT_POST, "telefone", FILTER_SANITIZE_NUMBER_INT));  
    $aluno->setObjetivo(filter_input(INPUT_POST, "objetivo", FILTER_SANITIZE_STRING));
    $aluno->setCidade(filter_input(INPUT_POST, "cidade", FILTER_SANITIZE_STRING));
    $aluno->setEstado(filter_input(INPUT_POST, "estado", FILTER_SANITIZE_STRING));
    $aluno->setRua(filter_input(INPUT_POST, "rua", FILTER_SANITIZE_STRING));
    $aluno->setBairro(filter_input(INPUT_POST, "bairro", FILTER_SANITIZE_STRING));
    $aluno->setCep(filter_input(INPUT_POST, "cep", FILTER_SANITIZE_STRING));


    if ($aluno->getId() > 0) {
        if ($aluno->update()) {
            header("Location: alunos.php");
        }
            } else {

        

        if ($aluno->add()) {
            header("Location: alunos.php");
        }
    }
}elseif (filter_has_var(INPUT_POST, "btn-deletar")) {
    $id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);
    if ($aluno->delete('idaluno',$id)) {
        header("Location: alunos.php");
    }
}