<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <title>Dashboard | PersonalPro</title>
</head>
<body>
    <?php require_once "_parts/_menu.php"?>
<main class="container">
<div class="mt-5 d-flex justify-content-between p-5">
    <h3>Grupos Musculares</h3>
    <a href="ger-gmusc.php" class="btn btn-success">Novo Grupo Muscular</a>
</div>

<table class="table p-3">
  <thead>
    <tr>
      <th>Nome</th>
      <th class="text-center">Ações</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Ombro</td>
      <td>
        <a href="#" class="btn btn-outline-success"><i class="bi bi-eye"></i></a>
        <a href="#" class="btn btn-outline-primary"><i class="bi bi-pencil-square"></i></a>
        <a href="#" class="btn btn-outline-danger"><i class="bi bi-trash"></i></a>
        </td>
    </tr>
  </tbody>
</table>
</main>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>