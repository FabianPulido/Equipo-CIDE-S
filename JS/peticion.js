$(obtener_regitros());

function obtener_regitros(sucursal){

    $.ajax({

        url : 'consulta.php',
        type : 'POST',
        dataType : 'html',
        data : { hackathon:sucursal},
    })

    .done(function (resultado){
        $("#tabla_resultado").php(resultado);
    })
}
$(document).on('keyup', '#busqueda', function(){

    var valorBusqueda=$(this).val();
    if(valorBusqueda!=""){
        obtener_regitros(valorBusqueda);
    }
    else{
        obtener_regitros();
    }
});