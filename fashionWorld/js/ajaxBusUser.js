function buscadorUser(){
    var valor = document.getElementById('nombreUser').value;
    var param = {
        "id_buscar": valor
    }

    $.ajax({
        data: param,
        url: 'ctroPro.php',
        datatype: 'texto',
        method: 'get',
        success: function(respuesta){
           document.getElementById('mostrarUser').innerHTML = respuesta;
        },
        error: function(xhr,status,error){
            console.log(error);
        }
    
    
    })
}