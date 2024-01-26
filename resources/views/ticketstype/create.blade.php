<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo Tipo de ticket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
input[type="submit"] {
    background-color: #000;
    color: #fff;
    border-radius: 50px;
    border: 1px solid #fff;
    margin: 0 auto;
}
label {
    background-color: #000;
    color: #fff;
    border-radius: 50px;
    margin: 0 auto;
    text-align: center;
}

.btn-success {
    background-color: #000;
    color: #fff;
    border: 1px solid #fff;
    border-radius: 50px;
    margin: 0 auto;
}
</style>
<body>
    <form method="post" action="{{ route('ticketstype.store') }}">    
        @csrf
        <label>Nombre: </label>
        <input type="text" name="type">
        <br><br>
        <input type="submit" value="Crear">
    </form>
    <div class="mt-2 mb-2">
        <a href="{{ route('ticketstype.index') }}">
            <button class="btn btn-success">Ir a tipo de tickets</button>
        </a>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>