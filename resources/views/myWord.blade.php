<?php
header('Content-Type: text/html; charset=utf-8');
header('Content-Type: application/vnd.msword');
header('Content-Disposition: attachment; filename="Certificado.doc"');
header('Cache-Control: private, max-age=0, must-revalidate');
?>
<!DOCTYPE html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<html>
<head>
    <title>Certificado Laboral</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="{{ asset('/css/pdf.css') }}" rel="stylesheet">
</head>
<body>
    <img src="{{ asset('/img/header.png') }}" alt="" class="img1">
    <!--"Header"-->
    <div class="container">
    <p class="title"> <b> LA FUNDACIÓN UNIVERSITARIA EMPRESARIAL DE LA CÁMARA DE COMERCIO DE BOGOTÁ
    -UNIEMPRESARIAL-</b>
    </div>
    {{-- <br> --}}
    <p class="title">  Personería Jurídica, Resolución 598 del 2 de abril de 2001 del Ministerio de Educación Nacional - Registro ICFES 2738</p>
  </p>
    <h3 class="titleCertificado">CERTIFICA</h3>

    @switch($user->id_roles)
        @case('2')
            <p class="textContent "> Que el señor/a <b>{{ $name }}</b> identificado/a con <b> {{ $people->documents->type }} </b> No. <b>{{ $people->doc }}</b>, está vinculado/a con la Fundación Universitaria Empresarial de la Cámara de Comercio de Bogotá Uniempresarial con NIT 830.084.876-6, desempeñando el cargo de <b>{{ $people->onus }}</b>. 

            @if ($contract != '0')
                Mediante un contrato a <b>{{ $contract }}</b>.
            @endif
            @if ($date_i != '0')
            @if ($people->date_f != null)
            Desde el <b>{{ $date_i }}</b> hasta el <b>{{$people->date_f}}</b>. 
            @else
            Desde el <b>{{ $date_i }}</b>. 
            @endif
            @endif
            @if ($pay_per_hour != '0')
                Con un pago por hora de (letras y números) <b>{{ $pay_per_hour }}</b>. 
            @endif
            @if ($salary != '0')
                Actualmente, devenga un salario de (letras y números) <b>{{ $salary }}</b>.
            @endif
            </p>   
    
    @break
    @case('3')
    <p class="textContent "> Que el señor(a) <b>{{ $name }}</b> identificado(a) con <b> {{ $people->documents->type }} </b> No.<b>{{ $people->doc }}</b>, está vinculado(a) con la Fundación Universitaria Empresarial de la Cámara de Comercio de Bogotá Uniempresarial con NIT 830.084.876-6, desempeña el cargo de <b>{{ $people->onus }}</b>.
    @if ($contract != '0')
                Mediante un contrato a <b>{{ $contract }}</b>.
            @endif
            @if ($date_i != '0')
            @if ($people->date_f != null)
            Desde el <b>{{ $date_i }}</b> hasta el <b>{{$people->date_f}}</b>. 
            @else
            Desde el <b>{{ $date_i }}</b>. 
            @endif
            @endif
            @if ($pay_per_hour != '0')
                Con un pago por hora de (letras y números) <b>{{ $pay_per_hour }}</b>. 
            @endif
            @if ($salary != '0')
                Actualmente, devenga un salario de (letras y números) <b>{{ $salary }}</b>.
            @endif
    </p>
        @break

    @case('4')
    <p class="textContent "> Que el señor/a <b>{{ $name }}</b> identificado/a con <b> {{ $people->documents->type }} </b> No. <b>{{ $people->doc }}</b>, está vinculado/a con la Fundación Universitaria Empresarial de la Cámara de Comercio de Bogotá Uniempresarial con NIT 830.084.876-6, desempeñando el cargo de <b>{{ $people->onus }}</b>. 

        @if ($contract != '0')
            Mediante un contrato a <b>{{ $contract }}</b>.
        @endif
        @if ($date_i != '0')
        @if ($people->date_f != null)
        Desde el <b>{{ $date_i }}</b> hasta el <b>{{$people->date_f}}</b>. 
        @else
        Desde el <b>{{ $date_i }}</b>. 
        @endif
        @endif
        @if ($pay_per_hour != '0')
            Con un pago por hora de (letras y números) <b>{{ $pay_per_hour }}</b>. 
        @endif
        @if ($salary != '0')
            Actualmente, devenga un salario de (letras y números) <b>{{ $salary }}</b>.
        @endif
        </p>   

        @break

    @case('5')
    <p class="textContent ">Que el señor(a) <b>{{ $name }}</b>, identificado(a) con <b> {{ $people->documents->type }}</b> No. <b>{{ $people->doc }}</b>, esta vinculado(a) con la Fundación Universitaria Empresarial de la Cámara de Comercio de Bogotá Uniempresarial con NIT 830.084.876-6,  hasta el {{ $date_f }} en el área de {{ $area }}.

    @if ($contract != '0')
                Mediante un contrato a <b>{{ $contract }}</b>.
            @endif
            @if ($date_i != '0')
            @if ($people->date_f != null)
            Desde el <b>{{ $date_i }}</b> hasta el <b>{{$people->date_f}}</b>. 
            @else
            Desde el <b>{{ $date_i }}</b>. 
            @endif
            @endif
            @if ($pay_per_hour != '0')
                Con un pago por hora de (letras y números) <b>{{ $pay_per_hour }}</b>. 
            @endif
            @if ($salary != '0')
                Actualmente, devenga un apoyo de sostenimiento de (letras y números) <b>{{ $salary }}</b>.
            @endif
    </p>
    @break

    @case('6')
    <p class="textContent "> Que el señor/a <b>{{ $name }}</b> identificado/a con <b> {{ $people->documents->type }} </b> No. <b>{{ $people->doc }}</b>, está vinculado/a con la Fundación Universitaria Empresarial de la Cámara de Comercio de Bogotá Uniempresarial con NIT 830.084.876-6, desempeñando el cargo de <b>{{ $people->onus }}</b>. 

    @if ($contract != '0')
        Mediante un contrato a <b>{{ $contract }}</b>.
    @endif
    @if ($date_i != '0')
    @if ($people->date_f != null)
    Desde el <b>{{ $date_i }}</b> hasta el <b>{{$people->date_f}}</b>. 
    @else
    Desde el <b>{{ $date_i }}</b>. 
    @endif
    @endif
    @if ($pay_per_hour != '0')
        Con un pago por hora de (letras y números) <b>{{ $pay_per_hour }}</b>. 
    @endif
    @if ($salary != '0')
        Actualmente, devenga un salario de (letras y números) <b>{{ $salary }}</b>.
    @endif
    </p>   

@break

    @default
@endswitch
<!--"Footer"-->
<p class="textContent">El presente certificado se expide a solicitud del interesado a los ({{ $day }}) días del mes de ({{ $month }}) de {{ $year }}.</p><br>
        
<p class="bodyText">Atentamente,</p><br>
<div class="info">
    <p class="foot">LUZ YAZMÍN LIZARAZO JIMÉNEZ</strong></p>
<p class="foot">Directora de Talento Humano</p>
<p class="foot1"><b>Proyecto:</b> Nicol Valencia – Profesional de Nómina y Contratación<br>
<b>202311031-348</b></p>
</div>

</section class="margen">
    <img src="{{ asset('img/footerpdf.png') }}" alt="" class="img2 fixed-bottom">
</body>
</html>