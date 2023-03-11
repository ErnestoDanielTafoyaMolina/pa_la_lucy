@extends('layout.layouts')

@section('titulo') 
    Crear usuario
@endsection

@section('contenido')
<form action="/formulario" method="POST">
    @csrf
    <!-- 2 column grid layout with text inputs for the first and last names -->
    <div class="row mb-4">
      <div class="col">
        <div class="form-outline">
          <input type="text" name="name" id="form3Example1" class="form-control" />
          <label class="form-label" for="name">First name</label>
        </div>
      </div>
       @error('name')
        <p style="color:red;">{{$message}}</p>
        @enderror

      <div class="col">
        <div class="form-outline">
          <input type="text" name="username" id="form3Example2" class="form-control" />
          <label class="form-label" for="username">User name</label>
        </div>
      </div>
    </div>
    @error('username')
    <p style="color:red;">{{$message}}</p>
    @enderror
  
    <!-- Email input -->
    <div class="form-outline mb-4">
      <input type="email" name="email" id="form3Example3" class="form-control" />
      <label class="form-label" for="email">Email address</label>
    </div>
    @error('email')
    <p style="color:red;">{{$message}}</p>
    @enderror

  
    <!-- Password input -->
    <div class="form-outline mb-4">
      <input type="password" name="password" id="form3Example4" class="form-control" />
      <label class="form-label" for="password">Password</label>
    </div>
    @error('password')
    <p style="color:red;">{{$message}}</p>
    @enderror
  
    
  
    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">Registrarte</button>
  
    
  </form>
@endsection

