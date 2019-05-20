function abrirconciertos(bal){
    document.getElementById("conciertos").classList.remove("displaynone");
    document.getElementById("eventos").classList.add("displaynone");
    document.getElementById("flechita").innerHTML = '<i class="fas fa-chevron-down"></i>'
}

function abrireventos(bal){
    document.getElementById("conciertos").classList.add("displaynone");
    document.getElementById("eventos").classList.remove("displaynone");
}


function abriradministrar(bal){
    document.getElementById("administrar").classList.remove("displaynone");
}


document.getElementById("flechita").innerHTML = '<i class="fas fa-angle-right"></i>'