@extends('layouts.app')

@section('content')

    <div class=" col-form-label text-md-center text-blue ">
    <h1>A continuación, complete la siguiente información:</h1>
    <!--Formulario de registro-->
    </div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-5">
                <div class="card-body">
                    <form action="{{route('people.update',$people->id)}}" method="POST">
                        <input type="hidden" name="id_users" value="{{Auth::user()->id}}">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <label for="type" class="col-md-4 col-form-label text-md-end">{{ __('Tipo de Documento') }}</label>
                        <div class="col-md-6"> 
                        <select class="form-control" id="type" type="type" class="form-control @error('type') is-invalid @enderror" name="type" value=""  autocomplete="type" autofocus>  
                            @foreach ($documents as $document)
                            <option value="{{$document->id}}">
                              {{$document->type}}
                            </option>
                        @endforeach
                         </select>
                         @foreach ($errors->get('type') as $error)
                         <strong class="text-danger">{{ $error }}</strong>
                     @endforeach
                        </div>
                    </div>
                        <div class="row mb-3">
                            <label for="CC" class="col-md-4 col-form-label text-md-end">{{ __('Número de documento') }}</label>
                            
                            <div class="col-md-6">    
                                <input id="doc" type="number" onkeydown="return event.keyCode !== 69"  class="form-control @error('') is-invalid @enderror" name="doc" value="" autocomplete="doc">
                                @foreach ($errors->get('doc') as $error)
                                <strong class="text-danger">{{ $error }}</strong>
                            @endforeach
                            <p class="fs-7 text-secondary">El número de documento debe contener mínimo 4 caracteres y máximo 15 caracteres</p>
                            </div> 
                        </div> 
                        <div class="row mb-3">
                            <label for="date" class="col-md-4 col-form-label text-md-end">{{ __('Fecha de Expedición') }}</label>
                            
                            <div class="col-md-6">    
                                <input id="date" type="date" class="form-control @error('') is-invalid @enderror" name="date" value="" autocomplete="date">
                                @foreach ($errors->get('date') as $error)
                                <strong class="text-danger">{{ $error }}</strong>
                            @endforeach
                            <p class="fs-7 text-secondary">La fecha de expedición no puede superar a la fecha actual</p>
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