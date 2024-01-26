<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Tickets</title>
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
</style>


<body>
    <br>
    <div class="container">
        <br>
        <h2>Editar Tickets</h2><br>
        <form method="post" action="{{route('tickets.update', ['ticket'=>$ticket->id])}}">
            @csrf1
            {{ method_field('PUT') }}
            <label class="form-label">Fecha del ticket: </label>
            <input type="date" name="date" class="form-control" value="{{ $ticket -> date }}">
            <label class="form-label">Precios: </label>
            <input type="number" class="form-control" step="1" name="price" value="{{ $ticket -> price }}">
            <label class="form-label">Tren: </label>
            <input type="text" class="form-control" step="1" name="train_id" value="{{ $ticket -> train_id }}">
            <label class="form-label">Tipo ticket: </label>
            <input type="text" class="form-control" step="1" name="ticket_type_id" value="{{ $ticket -> ticket_type_id }}">
            <input class="btn btn-success" type="submit" value="Editar">
        </form>
        <br>
    </div>
    <div class="mt-2 mb-2">
        <a href="{{ route('tickets.index') }}">
            <button class="btn btn-success">Ir a tickets</button>
        </a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>