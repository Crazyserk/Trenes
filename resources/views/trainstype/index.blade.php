<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tipo Trenes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style> 
body {
  background-color: #f5f5f5;
  color: #333;
}
h1, h2, h3, h4, h5, h6 {
  color: #000;
  font-family: 'Times New Roman', serif;
 font-size: 2.5rem;
 color: black;
 text-align: center;
}
a {
  color: #000;
}
.btn-primary {
  background-color: black;
  border-color: white;
  color: white;
  border-radius: 2cm;
}
.btn-primary:hover {
  background-color: #333;
  border-color: #333;
  border-radius: 2cm;
  
}
.btn-warning{
background-color: black;
color: white;
border-color: white;
border-radius: 2cm;
}
.btn-danger{
    background-color: black;
    border-color: white;
    color: white;
    border-radius: 2cm;
}
.btn-success {
  background-color: #333;
  border-color: #333;
}
.btn-success:hover {
  background-color: black;
  border-color: white;
  color: white;
  border-radius: 2cm;
}
.text-center {
  text-align: center;
}
</style>
<body>
    <div class="mt-2 mb-2 d-flex">
        <a href="{{ route('trains.index') }}">
            <button class="btn btn-success">Ir a trenes</button>
        </a>
        <a href="{{ route('trainstype.index') }}">
            <button class="btn btn-success">Ir a tipo de trenes</button>
        </a>
        <a href="{{ route('tickets.index') }}">
            <button class="btn btn-success">Ir a tickets</button>
        </a>
        <a href="{{ route('ticketstype.index') }}">
            <button class="btn btn-success">Ir a tipo de tickets</button>
        </a>
    </div>
    <h1 class="text-center">Página de los Tipos de Trenes</h1>
    <div class="container col-5">
        <table class="table table-primary table-hover">
            <thead class="table table-dark">
                <tr>
                    <th>ID</th>
                    <th>Tipos</th>
                    <th colspan="3"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trainstype as $traintype)
                <tr>
                    <td>{{ $traintype -> id }}</td>
                    <td>{{ $traintype -> type }}</td>
                    <td>
                        <form method="get" action="{{ route('trainstype.show', ['trainstype'=>$traintype->id])}}">
                            <input class="btn btn-primary" type="submit" value="Mostrar">
                        </form>
                    </td>
                    <td>
                        <form method="get" action="{{ route('trainstype.edit', ['trainstype'=>$traintype->id])}}">
                            <input class="btn btn-warning" type="submit" value="Editar">
                        </form>
                    </td>
                    <td>
                        <form method="post" action="{{ route('trainstype.destroy', ['trainstype'=>$traintype->id])}}">
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
            <a href="{{ route('trainstype.create') }}">
                <button class="btn btn-success">Crear tipo de tren</button>
            </a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
