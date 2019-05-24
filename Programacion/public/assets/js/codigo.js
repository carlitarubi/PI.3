function abrirconciertos(bal){
    document.getElementById("conciertos").classList.remove("displaynone");
    document.getElementById("eventos").classList.add("displaynone");
    document.getElementById("flechita").innerHTML = '<i class="fas fa-chevron-down"></i>'
    document.getElementById("flechita1").innerHTML = '<i class="fas fa-angle-right"></i>'
}

function abrireventos(bal){
    document.getElementById("conciertos").classList.add("displaynone");
    document.getElementById("eventos").classList.remove("displaynone");
    document.getElementById("flechita1").innerHTML = '<i class="fas fa-chevron-down"></i>'
    document.getElementById("flechita").innerHTML = '<i class="fas fa-angle-right"></i>'
}


function abriradministrar(bal){
    document.getElementById("administrar").classList.remove("displaynone");
    document.getElementById("flechita2").innerHTML = '<i class="fas fa-chevron-down"></i>'
}


document.getElementById("flechita").innerHTML = '<i class="fas fa-angle-right"></i>'

function abrirRegistroUsuarios(value) {
document.getElementById("fondoRegistroUsuarios").classList.remove("displayNone");
document.getElementById("XregistroUsuarios").classList.remove("displayNone");
}

function cerrarRegistroUsuarios(value) {
document.getElementById("fondoRegistroUsuarios").classList.add("displayNone");
document.getElementById("XregistroUsuarios").classList.add("displayNone");
}

function abrirModificarUsuarios(value) {
document.getElementById("fondoModificarUsuarios").classList.remove("displayNone");
document.getElementById("modificarUsuarios").classList.remove("displayNone");
}

function cerrarModificarUsuarios(value) {
document.getElementById("fondoModificarUsuarios").classList.add("displayNone");
document.getElementById("modificarUsuarios").classList.add("displayNone");
}
