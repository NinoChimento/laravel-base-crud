<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route("skills.store")}}" method="POST">
        @csrf
        @method("POST")
        <input type="text" name = "name" value="" placeholder="name">
        <input type="number" name = "lifePoints" value="" placeholder="life">
        <input type="text" name = "role" value="" placeholder="role">
        <input type="number" name = "attack" value="" placeholder=" val attack">
        <input type="number" name = "defense" value="" placeholder="val defense">
        <button type="submit">Crea</button>
    </form>
</body>
</html>