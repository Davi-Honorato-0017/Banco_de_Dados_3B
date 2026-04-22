<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <title>Dashboard | PersonalPro</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">PersonalPRO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">PersonalPRO</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Grupo Muscular</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Exercício</a>
          </li>
          
        </ul>
      </div>
    </div>
  </div>
</nav>
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