<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ticket</title>
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
    <h1 class="text-center"> Página Principal de los tickets </h1>
    <div class="text-center mt-2 mb-2">
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
    <table class="table table-primary table-hover">
        <thead class="table table-dark">
            <tr>
                <th>Fecha</th>
                <th>Precio</th>
                <th>Tren</th>
                <th>Tipo de tren</th>
                <th colspan="3"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tickets as $ticket)
            <tr>
                <td>{{ $ticket -> date }}</td>
                <td>{{ $ticket -> price }}</td>
                <td>{{ $ticket -> train_id }}</td>
                <td>{{ $ticket -> ticket_type_id }}</td>
                <td>
                    <form method="get" action="{{ route('tickets.show', ['ticket'=>$ticket->id])}}">
                        <input class="btn btn-primary" type="submit" value="Mostrar">
                    </form>
                </td>
                <td>
                    <form method="get" action="{{ route('tickets.edit', ['ticket'=>$ticket->id])}}">
                        <input class="btn btn-warning" type="submit" value="Editar">
                    </form>
                </td>
                <td>
                    <form method="post" action="{{ route('tickets.destroy', ['ticket'=>$ticket->id])}}">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input class="btn btn-danger" type="submit" value="Borrar">
                    </form>
                </td>
            </tr>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center mt-2 mb-2">
        <a href="{{ route('tickets.create') }}">
            <button class="btn btn-success">Crear tickets</button>
        </a>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
</body> 
</html> 