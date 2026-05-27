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
    "Outro",
    "Faço"
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
    <div class="card">
      <form action="db-aluno.php" method="post" class="row p-4 g3 mt-3">
        <input type="hidden" name="id" value="<?= $aluno->idaluno; ?>">
        <div class="col-12 mb-3">
          <label for="nome" class="form-label">Nome</label>
          <input type="text" name="nome" id="nome" class="form-control" value="<?= $aluno->nome ?? null; ?>">
        </div>
        <div class="col-md-2 mb-3 ">
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
          <div class="col-12 mt-2">
            <label for="cidade" class="form-label">Cidade</label>
            <input type="text" name="cidade" id="cidade" class="form-control" value="<?= $aluno->cidade ?? null; ?>">
          </div>
          <div class="col-12 mt-2">
            <label for="estado" class="form-label">Estado</label>
            <input type="text" name="estado" id="estado" class="form-control" value="<?= $aluno->estado ?? null; ?>">
          </div>
        </div>
        <div class="col-2">
          <label for="dataNascimento" class="form-label">Data de nascimento</label>
          <input type="date" name="dataNascimento" id="dataNascimento" class="form-control"
            value="<?= $aluno->data_nascimento ?? null; ?>">
          <div class="col-12 mt-2">
            <label for="rua" class="form-label">Rua</label>
            <input type="text" name="rua" id="rua" class="form-control" value="<?= $aluno->rua ?? null; ?>">

          </div>
          <div class="col-12 mt-2">
            <label for="bairro" class="form-label">Bairro</label>
            <input type="text" name="bairro" id="bairro" class="form-control" value="<?= $aluno->bairro ?? null; ?>">
          </div>
        </div>
        <div class="col-2">
          <label for="telefone" class="form-label">Telefone</label>
          <input type="tel" name="telefone" id="telefone" class="form-control" value="<?= $aluno->telefone ?? null; ?>">
          <div class="col-12 mt-2">
            <label for="cep" class="form-label">CEP</label>
            <input type="text" name="cep" id="cep" class="form-control" value="<?= $aluno->cep ?? null; ?>">
          </div>
        </div>
        <div class="col-6 ">
          <label for="objetivo" class="form-label">Objetivo</label>
          <textarea name="objetivo" id="objetivo" class=" form-control"
            rows="8"><?= $aluno->objetivo ?? null; ?></textarea>
        </div>
        <div class="mt-3">
          <a href="alunos.php" class="btn btn-secondary">Cancelar</a>
          <button type="submit" class="btn btn-primary" name="btnGravar">Salvar</button>
        </div>
      </form>
    </div>

  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>