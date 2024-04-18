<x-layout>
@auth
    <form action="{{url('/update/'.$data->id)}}" method="post">
        @csrf
        <input type="text" name="name" value="{{$data->name}}">
        <input type="email" name="email" value="{{$data->email}}">
        <input type="submit">
    </form>
@endauth
</x-layout>