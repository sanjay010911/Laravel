
<html>
<x-layout>

<form action="{{url('/regpost')}}" method="post">
  @csrf
 <div class='container'>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name :</label>
    <input type="text" class="form-control" name="name" aria-describedby="emailHelp">
    <span class="text-danger">
      @error('name')
                    {{$message}}

      @enderror
    </span>
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1"  class="form-label">Email address :</label>
    <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
    <span class="text-danger">
      @error('email')
                    {{$message}}

      @enderror
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="pass">
    <span class="text-danger">
      @error('password')
                    {{$message}}

      @enderror
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
</html>
</x-layout>