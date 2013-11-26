
function validarCampos()
{
        alert("Forma enviada.");
    
}

function accionBoton()
{
    $('#faltavotar').click(function(){
        validarCampos();
    });
    
}

$(document).ready(function() {
    accionBoton();
    
});
