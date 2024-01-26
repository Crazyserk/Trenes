<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver Trenes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style> 
body {
  background-color: #f5f5f5;
  color: #333;
}
h1, h2, h3, h4, h5, h6 {
  color: #000;
}
a {
  color: #000;
}
.btn-primary {
  background-color: #000;
  border-color: #000;
}
.btn-primary:hover {
  background-color: #333;
  border-color: #333;
}
.btn-success {
  background-color: #333;
  border-color: #333;
}
.btn-success:hover {
  background-color: #000;
  border-color: #000;
}
.text-center {
  text-align: center;
}

</style>
<body>
    <br>
    <div class="container">
        <div class="mt-2 mb-2">
            <a href="{{ route('trains.index') }}">
                <button class="btn btn-success">Ir a trenes</button>
            </a>
        </div>
        <h2>Ver Trenes</h2>
        <table class="table table-primary table-hover">
            <thead class="table table-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Pasajeros</th>
                    <th>Año</th>
                    <th>Tipo de tren</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $train -> name }}</td>
                    <td>{{ $train -> passengers }}</td>
                    <td>{{ $train -> year }}</td>
                    <td>{{ $train -> train_type_id }}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>