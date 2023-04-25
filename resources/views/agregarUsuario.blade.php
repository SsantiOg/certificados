<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../syles/styles.css">
  <title>Registrar nuevo usuario</title>
  <link rel="icon" href="../img/logoicono.png">
</head>
<header>
   <!--encabezado redes sociales-->
  <div class="header1">
    <div class="divHeader">
      <a onclick="redirigir01()"><i class="fa-brands fa-whatsapp"></i></a>
      <a onclick="redirigir02()"><i class="fa-brands fa-instagram"></i></a>
      <a onclick="redirigir03()"><i class="fa-brands fa-facebook-f"></i></a>
      <a onclick="redirigir04()"><i class="fa-brands fa-twitter"></i></a>
    </div>
    <a class="mail" onclick="redirigir05()"><i class="fa-solid fa-envelope"></i> Mail corporativo</a>
  </div>
  <!--encabezado-->
  <div class="header2">
    <div>
      <img src="../img/LogoUECCB.png" alt="Logo Uniempresarial y logo Cámara de comercio">
    </div>
    <a onclick="redirigir07()" href="./CContrasenaAd.html"><i class="fa-solid fa-pen-to-square"></i> Cambiar
      Contraseña</a>
    <a onclick="redirigir06()"><i class="fa-solid fa-user"></i> Cerrar Sesión</a>
  </div>
</header>
<main>
  <!--formulario para registrar nuevo usuario-->
  <section class="registro2">
    <br><br>
    <h1>Registrar nuevo usuario</h1>
    <form id="form" class="registro" action="php/based.php" method="post">
      <label> Nombres</label>
      <br>
      <input id="nombres" type="text" placeholder="Nombres" autofocus autocomplete="on" required name="nombre"><br>
      <label> Apellidos</label>
      <br>
      <input id="apellidos" type="text" placeholder="Apellidos" autocomplete="on" required name="apel"><br>
      <label>Correo institucional</label>
      <br>
      <input id="iMail" type="email" placeholder="Correo electrónico Institucional" autocomplete="on" required
        name="mail"><br>
      <label>Documento de identidad</label><br>
      <div class="documentoIden">
        <select id="tipoDocumento" name="t_doc">
          <option selected value="Cedula">C.C</option>
        </select>
        <input oninput="if(CC.value.lengbth > CC.maxLength) CC.value = CC.value.slice(0, CC.maxLength);" id="iCC"
          type="number" min="7" placeholder="Documento de identidad" required autocomplete="on" name="doc">
      </div> <br>
      <div class="contras">
        <div class="contras1">
          <label>Contraseña</label><br>
          <input maxlength="15"
            oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
            id="ipass" type="password" placeholder="Contraseña" required name="con">
          <br>
        </div>
        <div class="contras2">
          <label>Confirmar contraseña</label><br>
          <input maxlength="15"
            oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
            id="ipassC" type="password" placeholder="Confirmar contraseña" required name="con2">
          <br>
        </div>
        <p class="contra"> La contraseña debe contener 8 carácteres y máximo 15. Debe incluir mayúsculas, minúsculas y
          números.</p>
      </div>
      <br>
      <div class="rolContrato">
        <div class="rol">
          <label> Rol </label><br>
          <select required id="iRol" class="iRol" name="rol">
            <option value="" selected>Seleccione una opción</option>
            <option value="Aprendiz">Aprendiz</option>
            <option value="Profesor Cátedra">Profesor Cátedra</option>
            <option value="Administrativo">Administrativo</option>
            <option value="ProfesorP">Profesor Planta</option>
            <option value="Tallerista">Tallerista</option>
          </select>
        </div>
        <div class="Contrato">
          <label> Tipo de Contrato </label><br>
          <select required id="iContrato" name="t_contrato">
            <option value="" selected>Seleccione una opción</option>
            <option value="Tiempo Completo">Tiempo completo</option>
            <option value="Medio Tiempo">Medio tiempo</option>
          </select>
        </div>
      </div>
      <div class="salarioHora">
        <div class="salario">
          <input type="checkbox" id="checkSalario">
          <label for="checkSalario">Salario</label><br>
          <input type="number" id="salario" name="t_pago">
        </div>
        <div class="pagoHora">
          <input type="checkbox" id="checkPago">
          <label for="checkPago">Pago por hora</label><br>
          <input type="number" id="pago_hora" name="salario">
        </div>
      </div>
      <section class="sectionBotones2">
        <button class="botonVolver" onclick="redirigir09()">Volver</button>
        <button class="botonGuardar" type="submit">Guardar</button>
      </section>
    </form>
  </section>
</main>
  <!--footer-->
<footer>
  <div class="footer1">
    <img src="../img/LogoFooter.png" alt="Logo uniempresarial y cámara de comercio">
    <p>Institución de educación superior sujeta a la inspección y vigilancia del Ministerio de Educación / SNIES 2738
    </p>
  </div>
  <div class="footer2">
    <p>Todos los derechos reservados © 2020 -2022 Fundación Universitaria de la Cámara de Comercio de Bogotá
      Uniempresarial | Términos, politicas y Condiciones de Servicio Resolución 598 del Ministerio de Educación.
      Registro Icfes 2738.</p>
  </div>
</footer>
<script src="https://kit.fontawesome.com/0bf8ac12b9.js" crossorigin="anonymous"></script> <!--Link conexión íconos-->
<!--<script src="../Scripts/ValidateAggU.js"></script>-->
<script src="../Scripts/Redirigir.js"></script>
</body>

</html>