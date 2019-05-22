<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../public/assets/css/estilos.css">
    <link rel="stylesheet" href="../public/assets/css/usuariosADM.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php include 'navs/nav.php'; ?>



    <div class="content">

    <h2>Usuarios</h2>
    <br>
        <div id="usucaja">
          <div>
            <div class="botoncrear rosa pointer"><strong>+ Crear Usuario</strong></div>
          </div>
          <table>
            <tr>
              <th id="thUsu" class="datosUsu">Usuario</th>
              <th class="datosUsu">Teléfono</th>
              <th class="datosUsu">Email</th>
              <th class="datosUsu">Localización</th>
              <th class="datosUsu">Fecha Creación</th>
              <th class="datosUsu">Administrar</th>
            </tr>

            <tr>
             <td class="listaUsu separadorls">Paco</td>
             <td class="listaUsu">666666666</td>
             <td class="listaUsu">paco@sanz.com</td>
             <td class="listaUsu">Penépolis</td>
             <td class="listaUsu">20-06-1985</td>
             <td class="listaUsu"><i class="fas fa-edit pointer opacity"></i> &nbsp<i class="fas fa-trash pointer opacity"></i></td>
            </tr>

            <tr>
             <td class="listaUsu separadorls">Paco</td>
             <td class="listaUsu">666666666</td>
             <td class="listaUsu">paco@sanz.com</td>
             <td class="listaUsu">Penépolis</td>
             <td class="listaUsu">20-06-1985</td>
             <td class="listaUsu"></td>
            </tr>
            <tr>
             <td class="listaUsu separadorls">Paco</td>
             <td class="listaUsu">666666666</td>
             <td class="listaUsu">paco@sanz.com</td>
             <td class="listaUsu">Penépolis</td>
             <td class="listaUsu">20-06-1985</td>
             <td class="listaUsu"></td>
            </tr>

          </table>
        </div>
        <div class="fondocrearUsu">
          <div class="crearUsu">

            <form class="" action="index.html" method="post">

              <div class="formUsu">
                <label for="usuario"></label>
                <span class="formLabel">Usuario</span>
                <input type="text" name="usuario" value="">
              </div>

              <div class="formUsu">
                <label for="telf"></label>
                <span class="formLabel">Teléfono</span>
                <input type="number" name="telf" value="">
              </div>

              <div class="formUsu">
                <label for="email"></label>
                <span class="formLabel">Email</span>
                <input type="text" name="email" value="">
              </div>

              <div class="formUsu">
                <label for="localizacion"></label>
                <span class="formLabel">Localización</span>
                <input type="text" name="localizacion" value="">
              </div>

            </form>
          </div>
        </div>


    </div>


    <?php include 'navs/footer.php'; ?>

    <script src="../public/assets/js/codigo.js"></script>
</body>
</html>
