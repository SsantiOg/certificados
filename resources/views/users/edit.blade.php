@extends('layouts.app')

@section('content')
<div class="headerIng">
    <div>
      <img src="/img/LogoUECCB.png" alt="Logo Uniempresarial y logo Cámara de comercio">
    </div>
  </div>
    <br><br>
    <div class=" col-form-label text-md-center text-blue ">
    <h1>A continuación, llena la siguiente información:</h1>
    <!--Formulario de registro-->
    </div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('people.update',$people->id)}}" method="POST">
                        <input type="hidden" name="id_users" value="{{Auth::user()->id}}">
                        @method('PUT')
                        @csrf
                        <div class="row mb-3">
                            <label for="type" class="col-md-4 col-form-label text-md-end">{{ __('Tipo de Documento') }}</label>
                            
                            <div class="col-md-6"> 
                            <select class="form-control" id="type" placeholder="Ingrese Tipo de Documento" name="type" value="{{$people->id_documents}}">  
                                <option value="" selected>Seleccione una opción</option>
                                <option value="2">Tarjeta de Identidad</option>
                                <option value="3">Cedula de Ciudadania</option>
                                <option value="4">Tarjeta de Extranjeria</option>
                                <option value="5">Cedula de Extranjeria</option>
                             </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="CC" class="col-md-4 col-form-label text-md-end">{{ __('Documento') }}</label>
                            
                            <div class="col-md-6">    
                                <input id="doc" type="number" class="form-control @error('') is-invalid @enderror" name="doc" value="{{ old('doc') }}" required autocomplete="doc" autofocus>
                            </div> 
                        </div> 
                        <div class="col-md-8 offset-md-4">
                            <div class="col-md-8 offset-md-2">
                                <button type="submit" class="btn btn-blue">
                                    {{ __('Enviar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
