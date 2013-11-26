
function validarCampos()
{
        alert("Seguro que el Alumno quiere votar?.");
    
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
