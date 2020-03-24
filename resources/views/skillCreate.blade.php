<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>

    @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
             @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
            @endforeach
          </ul>
       </div>
    @endif

    <form class="form-group" action="{{route("skills.store")}}" method="POST">
        @csrf
        @method("POST")
        <input class ="form-control" type="text" name = "name" value="" placeholder="name">
        <input  class ="form-control" type="number" name = "lifePoints" value="" placeholder="life">
        <input  class ="form-control" type="text" name = "role" value="" placeholder="role">
        <input  class ="form-control" type="number" name = "attack" value="" placeholder=" val attack">
        <input  class ="form-control" type="number" name = "defense" value="" placeholder="val defense">
        <button class="btn btn-danger" type="submit">Crea</button>
    </form>
    {{-- @foreach ($skills as $skill)
        <ul>
        <li>{{$skill->name}}</li>
        <li>{{$skill->lifePoints}}</li>
        <li>{{$skill->role}}</li>
        <li>{{$skill->attack}}</li>
        <li>{{$skill->defense}}</li>
        </ul>
    @endforeach --}}
</body>
</html>