<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Codigos</title>
</head>
<body>
    <form method="POST" action="{{'/admin.codes'}}">
        @csrf
        <label for="">Codigo </label><input type="text" name="code">
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
