<html lang="en">
<head>
    <x-layout>
        @auth
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{url('/instodo/'.session('id'))}}" method='POST'>
        @csrf
    <div class="container">
    <table border="4">
        <tr>
            <th>Si NO</th>
            <th>Task</th>
            <th>Action</th>
        </tr>
        @foreach($data as $d)
        <tr>
        <td>{{$d->id}}</td>
        <td>{{$d->title}}</td>
        <td><a href="{{url('/etodo/'.$d->id)}}">Edit</a>|<a href="{{url('/dtodo/'.$d->id)}}">Delete</a></td>
        </tr>
        @endforeach
    </table>
    </div>

    <br><br><br> <br><br><br>
    <div class="container">
    <table border="4">
        <tr>
            <td>enter task: </td>
            <td><input type="text" name="name">
        </tr>
        <tr>
            <td colspan='2'><input type="submit" name="submit" value="submit"></td>
        </tr>
    </table>
    </div>
    </form>
</body>
@endauth
</x-layout>
</html>
