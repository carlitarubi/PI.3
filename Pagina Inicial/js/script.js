

function login(bal){
    document.getElementById("zindex").classList.add("zindex");
}


function xcerrar(bal){
    document.getElementById("zindex").classList.remove("zindex");
}

function register(bal){
    document.getElementById("zindexr").classList.add("zindexr");
}

function xcerrarr(bal){
    document.getElementById("zindexr").classList.remove("zindexr");
}

function signinbt(bal){
    document.getElementById("zindexr").classList.remove("zindexr");
    document.getElementById("zindex").classList.add("zindex");
}

function signupbt(bal){
    document.getElementById("zindex").classList.remove("zindex");
    document.getElementById("zindexr").classList.add("zindexr");
}


$(window).scroll(function() {
    if ($("#menu").offset().top > 56) {
        $("#menu").addClass("bg-inverse");
        $("#ins1").addClass("vertalig2");
        $("#ins1").addClass("colorf1");
        $("#ins2").addClass("vertalig2");
        $("#regis").addClass("vertalig2");

        $("#inicio1").addClass("colorf1");
        $("#caracteristicas1").addClass("colorf1");
        $("#conciertos1").addClass("colorf1");
        $("#contacto1").addClass("colorf1");

        $("#inicio2").addClass("vertalig");
        $("#caracteristicas2").addClass("vertalig");
        $("#conciertos2").addClass("vertalig");
        $("#contacto2").addClass("vertalig");

        $("#logoneg").removeClass("logonegro");
        $("#logotrans").removeClass("logonegro");
        $("#logoblanc").addClass("logonegro");
    } else {
        $("#menu").removeClass("bg-inverse");
        $("#ins1").removeClass("colorf1");
        $("#ins1").removeClass("vertalig2");
        $("#ins2").removeClass("vertalig2");
        $("#regis").removeClass("vertalig2");

        $("#inicio1").removeClass("colorf1");
        $("#caracteristicas1").removeClass("colorf1");
        $("#conciertos1").removeClass("colorf1");
        $("#contacto1").removeClass("colorf1");

        $("#inicio2").removeClass("vertalig");
        $("#caracteristicas2").removeClass("vertalig");
        $("#conciertos2").removeClass("vertalig");
        $("#contacto2").removeClass("vertalig");

        $("#logoneg").addClass("logonegro");
        $("#logotrans").addClass("logonegro");
        $("#logoblanc").removeClass("logonegro");
    }
  });