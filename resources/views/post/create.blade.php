@extends('layout.layouts')

@section('contenido')
<div class="row">
    <div class="col-4 p-5 text-center m-2 rounded-2">
        
        <form action="{{route ('imagenes')}}" id="dropzone" method="POST" 
        enctype="multipart/form-data" class="dropzone w-100 h-100 rounded border-1 d-flex">
        @csrf
        </form>
    </div>

    <div class="col-7 p-5 text-center m-2 rounded-2 border">
        <h2 class="mb-3">Crea tu nuevo post</h2>
        <div class="form-outline m-3">
            <input type="text" id="typeText" class="form-control" name="titulo" />
            <label class="form-label" for="typeText">Titulo</label>
          </div>
        <div class="form-outline m-3">
            <textarea class="form-control" name="mensaje" id="textAreaExample" rows="4"></textarea>
            <label class="form-label" for="textAreaExample">Mensaje</label>
        </div>
        <a class="btn btn-primary" href="" role="button">Call to action</a>
    </div>
</div>
@endsection
