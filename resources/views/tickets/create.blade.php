<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Ticket</title>
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
    <form method="post" action="{{ route('tickets.store') }}">
        @csrf
        <label>Fecha de ticket: </label>
        <input type="date" name="date">
        <label>Precio de ticket: </label>
        <input type="number" step="1" name="price">
        <label>Tipo de tren: </label>
        <select name="train_id">
            <option value="1">ARK1</option>
            <option value="2">ARK2</option>
            <option value="3">ARK3</option>
        </select>
        <label> Tipo de ticket: </label>
        <select name="ticket_type_id">
            <option value="1">Billete Sencillo</option>
            <option value="2">Abono mensual</option>
            <option value="3">Abono trimestral</option>
        </select>
        <br><br>
        <input type="submit" value="Crear">
    </form>
    <div class="mt-2 mb-2">
        <a href="{{ route('tickets.index') }}">
            <button class="btn btn-success">Ir a tickets</button>
        </a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>