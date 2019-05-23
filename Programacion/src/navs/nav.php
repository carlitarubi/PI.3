
<ul class="sidebar">
  <h1 class="navi"> <img class="redimensionar" src="logoblanco2.png" alt=""> </h1>

  <div class="Perfil">
    <img class="imagenRedonda inline" src="perfil.png"> <div class="inline"><span class="centrars"><strong>Usuario</strong></span></div>
  </div>

  <a class="nave" href="index.php"><li><i class="fas fa-home"></i> &nbsp Inicio</li></a>
  <li  onclick="abrirconciertos(this)" class="mova">
    <i class="fas fa-headphones"></i> &nbsp Conciertos <span id="flechita"><i class="fas fa-angle-right"></i></span>
    <ul id="conciertos" class="movaUL displaynone">
        <a class="nave" href="rock.php"><li>Rock</li></a>
        <a class="nave" href="metal.php"><li>Metal</li></a>
        <a class="nave" href="rap.php"><li>Rap</li></a>
    </ul>
  </li>
  <li onclick="abrireventos(this)" class="mova">
   <i class="fas fa-thumbtack"></i> &nbsp Eventos <span id="flechita1"><i class="fas fa-angle-right"></i></span>
    <ul id="eventos" class="movaUL displaynone">
        <a class="nave" href="quedadas.php"><li>Quedadas</li></a>
        <a class="nave" href="festivales.php"><li>Festivales</li></a>
    </ul>
  </li>
  <h5 class="navi">Admin</h5>
  <li onclick="abriradministrar(this)" class="mova">
   <i class="fas fa-cog"></i> &nbsp Administrar <span id="flechita2"><i class="fas fa-angle-right"></i></span>
    <ul id="administrar" class="movaUL displaynone">
    <li>
        <a class="nave textoblanco" href="conciertos.php">Conciertos</a>
     </li>
        <a class="nave textoblanco" href="eventos.php"><li>Eventos</li></a>
    </ul>
  </li>
  <a class="nave" href="usuarios.php"><li><i class="fas fa-user-friends"></i> &nbsp Usuarios</li></a>
</ul>

<input type="checkbox" id="sidebar-btn" class="sidebar-btn" checked/>
