<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajadores</title>
</head>
<body>
    <h1>Lista trabajadores</h1>
    <ul>
        @foreach ($trabajadores as $trabajador)
            <li><a href="/trabajadores/edit/{{ $trabajador->id }}">{{ $trabajador->nombre }} {{ $trabajador->apellidos }}</a></li>
        @endforeach
    </ul>
    <a href="/trabajadores/create">Formulario para añadir trabajador</a>
</body>
</html>