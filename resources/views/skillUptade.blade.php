<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="{{asset("css/app.css")}}">
    <title>Document</title>
</head>
<body>
    
        <h1>Update</h1>
<form class="form-group" action="{{route("skills.update", $skill)}}" method="POST">
        @csrf
        @method("PATCH")
     <input class ="form-control" type="text" name = "name" value="{{$skill->name}}" placeholder="name">
        <input  class ="form-control" type="number" name = "lifePoints" value="{{$skill->lifePoints}}" placeholder="life">
        <input  class ="form-control" type="text" name = "role" value="{{$skill->role}}" placeholder="role">
        <input  class ="form-control" type="number" name = "attack" value="{{$skill->attack}}" placeholder=" val attack">
        <input  class ="form-control" type="number" name = "defense" value="{{$skill->defense}}" placeholder="val defense">
        <button class="btn btn-danger" type="submit">Crea</button>
    </form>
</body>
</html>