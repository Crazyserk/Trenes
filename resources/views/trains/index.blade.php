<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Trenes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
  .nav-buttons {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 1rem;
  }

  .nav-buttons a {
    text-decoration: none;
  }

  .nav-buttons button {
    padding: 0.5rem 1rem;
    border-color: white;
    border-radius: 5px;
    background-color: #000;
    color: #fff;
    font-weight: bold;
  }

  .nav-buttons button:hover {
    background-color: #333;
  }

  table {
    margin-top: 20px;
  }

  table th {
    position: relative;
  }

  table th button {
    position: absolute;
    top: 0;
    left: 0;

    width: 100%;
    height: 100%;
  }

  .btn-warning {
    color: white;
    background-color: black;
    border-color: white;
  }
  .btn-primary{
    color: white;
    background-color: black;
    border-color: white;
  }

  .btn-danger {
    color: white;
    border-color: white;
    background-color: black;
  }
  .btn-success{
    color: white;
    border-color: white;
    background-color: black;
  }
  h1 {
  font-family: 'Times New Roman', serif;
  font-size: 2.5rem;
  color: black;
  text-align: center;
}
</style>

<body>
  <div class="nav-buttons">
    <a href="{{ route('trains.index') }}">
      <button>Ir a trenes</button>
    </a>
    <a href="{{ route('trainstype.index') }}">
      <button>Ir a tipo de trenes</button>
    </a>
    <a href="{{ route('tickets.index') }}">
      <button>Ir a tickets</button>
    </a>
    <a href="{{ route('ticketstype.index') }}">
      <button>Ir a tipo de tickets</button>
    </a>
  </div>

  <h1>Página de los Trenes</h1>

  <table class="table table-primary table-hover">
    <thead class="table table-dark">
      <tr>
        <th>Nombre</th>
        <th>Pasajeros</th>
        <th>Año</th>
        <th>Tipo de tren</th>
        <th colspan="3"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($train as $tren)
      <tr>
        <td>{{ $tren->name }}</td>
        <td>{{ $tren->passengers }}</td>
        <td>{{ $tren->year }}</td>
        <td>{{ $tren->train_type->type }}</td>
        <td>
          <form method="get" action="{{ route('trains.show', ['train' => $tren->id]) }}">
            <input class="btn btn-primary" type="submit" value="Mostrar">
          </form>
        </td>
        <td>
          <form method="get" action="{{ route('trains.edit', ['train' => $tren->id]) }}">
            <input class="btn btn-warning" type="submit" value="Editar">
          </form>
        </td>
        <td>
          <form method="post" action="{{ route('trains.destroy', ['train' => $tren->id]) }}">
            @csrf
            {{ method_field('DELETE') }}
            <input class="btn btn-danger" type="submit" value="Borrar">
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <div class="mt-2 mb-2">
    <a href="{{ route('trains.create') }}">
      <button class="btn btn-success">Crear tren</button>
    </a>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>