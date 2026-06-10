<?php

spl_autoload_register(function ($class) {
    require_once "class/{$class}.class.php";
});

$usuario = new Usuario();
$aluno = new Aluno();

if (filter_has_var(INPUT_POST, "btnGravar")) {
    $usuario->setId(filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT));
    $usuario->setUsername(filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING));
    $usuario->setEmail(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL));
    $senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_STRING);
    $usuario->setSenha(password_hash($senha, PASSWORD_DEFAULT));
    $usuario->setTipoUsuario("aluno");
    $usuario->setAtivo(1);

    $aluno->setId(filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT));
    $aluno->setEmail(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL));
    $aluno->setUsuario(filter_input(INPUT_POST, "usuario", FILTER_SANITIZE_NUMBER_INT));
    $aluno->setNome(filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING));
    $aluno->setSexo(filter_input(INPUT_POST, "sexo", FILTER_SANITIZE_STRING));
    $aluno->setDataNascimento(filter_input(INPUT_POST, "nascimento", FILTER_SANITIZE_STRING));
    $aluno->setCelular(filter_input(INPUT_POST, "celular", FILTER_SANITIZE_NUMBER_INT));
    $aluno->setObjetivo(filter_input(INPUT_POST, "objetivo", FILTER_SANITIZE_STRING));
    $aluno->setCidade(filter_input(INPUT_POST, "cidade", FILTER_SANITIZE_STRING));
    $aluno->setEstado(filter_input(INPUT_POST, "estado", FILTER_SANITIZE_STRING));
    $aluno->setLogradouro(filter_input(INPUT_POST, "logradouro", FILTER_SANITIZE_STRING));
    $aluno->setBairro(filter_input(INPUT_POST, "bairro", FILTER_SANITIZE_STRING));
    $aluno->setCep(filter_input(INPUT_POST, "cep", FILTER_SANITIZE_STRING));


    if ($aluno->getId() > 0) {
        if ($aluno->update()) {
            header("Location: alunos.php");
        }
    } else {
        $usuario->iniciarTransacao();
        try {
            $usuario->add();
            $aluno->setFkUsuario($usuario->getId());
            if($aluno->add()){
                $usuario->confirmaTransacao();
                header("Location: alunos.php?status=sucesso");
                exit;
            }
        } catch (Exception $e) {
            $usuario->cancelaTransacao();
            header("Location: alunos.php?status=erro");
            exit;
        }

    }
} elseif (filter_has_var(INPUT_POST, "btn-deletar")) {
    $id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);
    if ($aluno->delete('idaluno', $id)) {
        header("Location: alunos.php");
    }
}