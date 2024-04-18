
    <html lang="en">
    <head>
    
    <x-layout>
   
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    
    <form action="{{url('/etodo/update/'.$data->id)}}" method="post">
        @csrf
        <input type="text" name="name" value="{{$data->title}}">
        <input type="submit">
    </form>
   
</x-layout>

    </body>
    </html>
