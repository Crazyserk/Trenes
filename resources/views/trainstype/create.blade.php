<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Nuevo Tipo Tren</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
  body {
    background-color: #f5f5f5;
    color: #333;
  }

  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    color: #000;
  }

  a {
    color: #000;
  }

  .btn-primary,
  .btn-success {
    background-color: #000;
    border: 2px solid #fff;
    border-radius: 50px;
    color: #fff;
  }

  .btn-primary:hover,
  .btn-success:hover {
    background-color: #333;
    border-color: #fff;
  }

  input[type="text"] {
    border-radius: 50px;
    border: 2px solid #fff;
  }

  input[type="submit"] {
    background-color: black;
    color: white;
    border-color: white;
    border-radius: 50px;

  }
</style>

<body>
  <div class="mt-2 mb-2">
    <a href="{{ route('trainstype.index') }}">
      <button class="btn btn-success">Ir a tipo de trenes</button>
    </a>
  </div>
  <form method="post" action="{{ route('trainstype.store') }}">
    @csrf
    <label> Nombre del tren a crear : </label>
    <input type="text" name="type">
    <br><br>
    <input type="submit" value="Crear">
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>