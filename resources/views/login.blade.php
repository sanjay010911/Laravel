
<x-layout>
<html>
  <head>
  
</head>
<form action="{{url('/loginpost')}}" method="post">
  @csrf
  <div class="mb-3">
    @if(session('status'))
    <script>alert("{{session('status')}}");</script>
    @endif
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <span class="text-danger">
    @error('email')
      {{$message}}
    @enderror
    </span>
    
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
    <span class="text-danger">
    @error('password')
      {{$message}}
    @enderror
    </span>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </ul>
</div>
</html>
</x-layout>
