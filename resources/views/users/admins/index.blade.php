@extends('layouts.app')
@section('title')
  Inicio
@endsection
@section('content')
    <!--encabezado titulo-->
    <section class="sectionTitulo2">
      <div class="divTitulo2">
        <div class="col-md-4 col-form-label text-md-end bg-red p-4 w-25 text-light">
          <h2>Bienvenido al </h2>
        </div>
        <div class="col-md-4 col-form-label text-md-end bg-blue p-4 my-3 w-50 text-light">
          <h2>Perfil administrador</h2>
        </div>
      </div>
      </section>
        <!--Menú perfil administrador-->
        <!--Botón menú-->
        <div class="container mt-5">  
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <div class="card ms-5">
              <a href="{{route('histories')}}">
                <img src="{{asset('img/Certificado.jpg')}}" class="card-img-top imgAdmin" alt="Certificado">
              </a>
              <div class="card-body bg-red">
                <h5 class="card-title text-light text-center">Historial certificados</h5>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="card ms-5">
              <a href="{{route('users.index')}}">
                <img src="{{asset('img/Usuarios.jpg')}}" class="card-img-top imgAdmin " alt="Usuarios">
              </a>              
              <div class="card-body bg-red">
                <h5 class="card-title text-light text-center">Control usuarios</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="container w-50">
          <div class="card mt-5">
            <a href="{{route('certificates', Auth::user()->id)}}">
              <img src="{{asset('img/GenerarCerti.jpg')}}" class="card-img-top imgAdmin" alt="Generando certificado">
            </a>
            <div class="card-body bg-red">
              <h5 class="card-title text-light text-center">Generar certificado</h5>
            </div>
          </div>
        </div>
      </div>

@endsection