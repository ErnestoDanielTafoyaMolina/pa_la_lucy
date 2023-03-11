@extends('layout.layouts')

@section('titulo') 

@endsection

@section('contenido')
<form action="{{route('login')}}" method="POST">
    @csrf
    @if (session('mensaje'))
        <p style="color: red">{{session('mensaje')}}</p>        
    @endif
    
    <!-- Email input -->
    <div class="form-outline mb-4">
      <input type="email" name="email" id="form2Example1" class="form-control" />
      <label class="form-label" for="email">Email address</label>
    </div>
    @error('email')
    <p style="color:red;">{{$message}}</p>
    @enderror
    <!-- Password input -->
    <div class="form-outline mb-4">
      <input type="password" name="password" id="form2Example2" class="form-control" />
      <label class="form-label" for="password">Password</label>
    </div>
    @error('password')
    <p style="color:red;">{{$message}}</p>
    @enderror

     <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Login</button>

  </form>
@endsection

