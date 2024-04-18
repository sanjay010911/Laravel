<html lang="en">
<x-layout>
    @auth
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hii... {{$status}}</h1>
    <br><br>
    <a href="{{url('/showtodo/'.session('id'))}}">show todo list</a>
    
        
</body>

</html>
@endauth
</x-layout>
