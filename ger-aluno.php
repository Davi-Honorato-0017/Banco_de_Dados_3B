<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Dashboard | PersonalPRO</title>
</head>

<body>
  <?php
  require_once "_parts/_menu.php";
  $sexo = [
    "Masculino",
    "Feminino",
    "Outro"
  ];

  $id = null;
  if (filter_has_var(INPUT_GET, "id")) {
    spl_autoload_register(function ($class) {
      require_once "class/{$class}.class.php";
    });
    $edtalun = new Aluno();
    $id = intval(filter_input(INPUT_GET, "id"));
    $aluno = $edtalun->search('idaluno', $id);

  }
  ?>
  <main class="container" style="margin-top: 80px;">

    
    <div class="mt-5">
      <h4>Cadastro de alunos</h4>
    </div>
    <fieldset class="border p-3 mb-3">
      <legend class="w-auto px-2 h6">Dados de Acesso</legend>
      <div class="row">
        <div class="col-4 mt-2">
          <label for="exampleFormControlInput1" class="form-label">Email</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
          <label for="nome" class="form-label mt-2">Usuário</label>
          <input type="text" name="id" id="id" class="form-control" value="<?= $aluno->id ?? null; ?>">
        </div>
        <div class="col-2 ">
          <div class=>
            <label for="inputPassword6" class="col-form-label">Senha</label>
          </div>
          <div class=>
            <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
          </div>
          <div class="c">
            <label for="inputPassword6" class="col-form-label mt-1">Confirmar Senha</label>
          </div>
          <div class="col-auto">
            <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
          </div>
        </div>
      </div>
    </fieldset>
    <fieldset class="border p-3 mb-3">
      <legend class="w-auto px-2 h6">Dados do Aluno</legend>
      <div class="row">
        <div class="col-md-4">
          <label for="nome" class="form-label">Nome Completo</label>
          <input type="text" name="nome" id="nome" class="form-control" value="<?= $aluno->nome ?? null; ?>">
        </div>
        <div class="col-md-6 ">
          <label for="objetivo" class="form-label">Objetivo</label>
          <textarea name="objetivo" id="objetivo" class=" form-control"
            rows="8"><?= $aluno->objetivo ?? null; ?></textarea>
        </div>
        <div class="col-md-2">
          <label for="sexo" class="form-label">Sexo</label>
          <?php
          $sexo_sel = $aluno->sexo ?? null;
          ?>
          <select name="sexo" id="sexo" class="form-select">
            <option value="">Selecione...</option>
            <?php foreach ($sexo as $grupo): ?>
              <option value="<?= $grupo ?>" <?php if ($grupo == $sexo_sel)
                  echo 'selected' ?>>
                <?= $grupo ?>
              </option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="col-12 mt-2">
          <label for="cidade" class="form-label">Cidade</label>
          <input type="text" name="cidade" id="cidade" class="form-control" value="<?= $aluno->cidade ?? null; ?>">
        </div>
        <div class="col-12 mt-2">
          <label for="estado" class="form-label">Estado</label>
          <input type="text" name="estado" id="estado" class="form-control" value="<?= $aluno->estado ?? null; ?>">
        </div>
        <div class="col-2">
          <label for="dataNascimento" class="form-label">Data de nascimento</label>
          <input type="date" name="dataNascimento" id="dataNascimento" class="form-control"
            value="<?= $aluno->data_nascimento ?? null; ?>">
        </div>
        <div class="col-12 mt-2">
          <label for="logradouro" class="form-label">Logradouro</label>
          <input type="text" name="logradouro" id="logradouro" class="form-control"
            value="<?= $aluno->logradouro ?? null; ?>">

        </div>
        <div class="col-12 mt-2">
          <label for="bairro" class="form-label">Bairro</label>
          <input type="text" name="bairro" id="bairro" class="form-control" value="<?= $aluno->bairro ?? null; ?>">
        </div>
        <div class="col-2">
          <label for="celular" class="form-label">Celular</label>
          <input type="tel" name="celular" id="celular" class="form-control" value="<?= $aluno->celular ?? null; ?>">
        </div>
        <div class="col-md-3 mt-2">
          <label for="cep" class="form-label">CEP</label>
          <input type="text" name="cep" id="cep" class="form-control" value="<?= $aluno->cep ?? null; ?>">
        </div>
      </div>
      <div class="mt-3">
        <a href="alunos.php" class="btn btn-danger">Cancelar</a>
        <button type="submit" class="btn btn-success" name="btnGravar">Salvar</button>
      </div>
      </form>
      </div>
    </fieldset>

  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>