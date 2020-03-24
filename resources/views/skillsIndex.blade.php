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
    @if (session("delete"))
        <div class="alert alert-danger">
            Hai eliminato il personaggio:{{session("delete")->name}}
        </div>
    @endif
    <div class="text-center">
        <a class="btn btn-success " href="{{route("skills.create")}}">Aggiungi</a>
    </div>

    <div class="wrap-skills">
        @foreach ($skills as $skill)
             
           <div class="card m-2" >
           <img id = "image" class="card-img-top" src="{{$skill->img}}" alt="">
               <div class="card-body">
               <h2 class="card-title"> Name : {{$skill->name}}</h2>
               <h3> Role :  {{$skill->role}}</h3>
               <p class="card-text"> LIfe Pints :{{$skill->lifePoints}}</p>
               <p class="card-text"> Attack : {{$skill->attack}}</p>
               <p class="card-text"> Defense :{{$skill->defense}}</p>
               <div class="d-flex justify-content-around">
                   <a href="{{route("skills.edit",$skill)}}" class="btn btn-primary m-2">Uptade</a>
               <form action="{{route("skills.destroy",$skill)}}" method="POST">
                 @csrf
                 @method("DELETE")
                 <button  class="btn btn-danger m-2" type="submit">DELETE</button>
               </form>
               </div>
               
            </div>
            </div>
        @endforeach
        
    </div>
</body>
</html>
