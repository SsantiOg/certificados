@extends('layouts.app')

@section('content')
    <body>
        <!--encabezado titulo-->
        <section class="sectionTitulo">

            <div class="divTitulo col-md-4 col-form-label text-md-end bg-red p-3 w-50 text-light">
                <h3>Genera tu certificado</h3>
            </div>
        </section> 
        <!--Boton regresar-->
        <div class="d-grid gap-2 d-md-flex justify-content-md-end m-5">
            <a href="{{asset('/admins')}}"><button class="btn btn-outline-danger" id=""><i class="fa-solid fa-arrow-left px-3 justify-content-center"></button></i></button></a>
        </div>

        <section class="container mt-5 w-50">
            <div class="card">
                <div class="card-header text-center">
                    <h4> El certificado contendrá su nombre y documento de identidad. En caso de requerir algún dato adicional, seleccione a continuación.</h4>
                </div>

                    <!-- contenido card -->
                    <div class="card-body">
                        <form method="post" action="Docente.php">

                            <div class="row mt-2">
                                <div class="form-check">
                                    <input class="form-check-input rounded-pill" type="checkbox" id="salario">
                                    <label class="form-check-label ms-4 fs-4" for="salario">Salario</label>
                                 </div>
                            </div>
                            <div class="row mt-2">
                                <div class="form-check">  
                                <input class="form-check-input rounded-pill" type="checkbox" id="tipoContrato">
                                <label class="form-check-label ms-4 fs-4" for="form-check-label">Tipo de Contrato</label>
                                </div> 

                                <div class="row mt-2">
                                    <div class="form-check">
                                    <input class="form-check-input rounded-pill" type="checkbox" id="fechaIngreso">
                                    <label class="form-check-label ms-4 fs-4" for="form-check-label">Fecha de Ingreso</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                
                                <div class="col-md-8 offset-md-5">
                                    <button class="btn btn-blue w-25" type="submit" id="btn-abrir-modal">Generar</button>
                                        <!--Confirmación de fecha de documento antes de descargar el certificado por seguridad-->
                                    <dialog id="modal" class="descargar">
                                        <h2>Para continuar, valida la fecha de expedición de tu documento.</h2>
                                        <form>
                                            <input type="date" class="date">
                                            <button class="continue1" type="submit" value="Generate PDF">Continuar</button>    
                                        </form>
                                            <button id="btn-cerrar-modal" class="mt-5"><a href="">Cerrar</a></button>
                                    </dialog>
                                </div>    
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </body>
@endsection