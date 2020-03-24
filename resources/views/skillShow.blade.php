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
    <div class="wrap-skills">
        {{-- @foreach ($skills as $skill) --}}
             
           <div class="card" >
               <img class="card-img-top" src="" alt="">
               <div class="card-body">
               <h2 class="card-title"> Name : {{$skill->name}}</h2>
               <h3> Role :  {{$skill->role}}</h3>
               <p class="card-text"> LIfe Pints :{{$skill->lifePoints}}</p>
               <p class="card-text"> Attack : {{$skill->attack}}</p>
               <p class="card-text"> Defense :{{$skill->defense}}</p>
               <a href="{{route("skills.index")}}" class="btn btn-primary">Home</a>
               <button id="{{$skill->id}}" disabled=""></button>
               </div>
            </div>
        {{-- @endforeach --}}
</body>
</html>