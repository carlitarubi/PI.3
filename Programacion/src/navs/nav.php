<ul class="sidebar">
  <h1 class="navi">EVENFI</h1>

  <div class="Perfil">
    <img class="imagenRedonda inline" src="perfil.png"> <div class="inline"><span class="centrars"><strong>Usuario</strong></span></div> 
  </div>

  <li ><i class="fas fa-home"></i> &nbsp Inicio</li>
  <li  onclick="abrirconciertos(this)" class="mova">
    <i class="fas fa-headphones"></i> &nbsp Conciertos <span id="flechita"><i class="fas fa-angle-right"></i></span>
    <ul id="conciertos" class="movaUL displaynone">
        <li>Rock</li>
        <li>Metal</li>
        <li>Rap</li>
    </ul>
  </li>
  <li onclick="abrireventos(this)" class="mova">
   <i class="fas fa-thumbtack"></i> &nbsp Eventos <span id="flechita1"><i class="fas fa-angle-right"></i></span>
    <ul id="eventos" class="movaUL displaynone">
        <li>Quedadas</li>
        <li>Festivales</li>
    </ul>
  </li>
  <h5 class="navi">Admin</h5>
  <li onclick="abriradministrar(this)" class="mova">
   <i class="fas fa-cog"></i> &nbsp Administrar <span id="flechita2"><i class="fas fa-angle-right"></i></span>
    <ul id="administrar" class="movaUL displaynone">
        <li>Conciertos</li>
        <li>Eventos</li>
    </ul>
  </li>
  <li><i class="fas fa-user-friends"></i> &nbsp Usuarios</li>
</ul>

<input type="checkbox" id="sidebar-btn" class="sidebar-btn" checked/>



