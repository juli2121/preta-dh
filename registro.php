<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="estilos/style.css">
    <title>Preta Shop - Registro</title>
  </head>
  <body>

    <!-- LOGIN -->
    <div class="borde-titulo">
      <div class="contenedor-titulo margen-izq">
        <h2 class="titulo">INGRESA</h2>
      </div>
    </div>

    <!-- formulario de login -->
    <div class="padding-eje-y">
      <form class="margen-izq" action="" method="post">

        <label for="email">
          Correo Electrónico
        </label> <br>
          <input class="input-blanco" type="email" id="email" name="email">

        <span class="separador"></span>

        <label for="pass">
          Contraseña <br>
        </label>
          <input class="input-blanco" type="password" id="pass" name="pass">

        <span class="separador-xs"></span>

        <br><label for="recordarme"></label>
          <input type="checkbox" name="recordarme" value=""> Recordarme

        <span class="separador-s"></span>

        <p class="boton">
          <button class="boton-gris" type="button" name="button">INGRESAR</button>
        </p>
      </form>
      <p class="boton">
        <a id="enlace-olvide" href="#">olvidé mi contraseña y/o correo electrónico</a>
      </p>
    </div>



    <!-- REGISTRO -->
    <div class="contenedor">
      <div class="contenedor-titulo margen-izq">
        <h2 class="titulo">REGISTRATE</h2>
      </div>
    </div>
  </body>
</html>
