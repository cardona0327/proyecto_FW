function alerta(){
    // console.log("bienvenida");
    var param = {
        'nombre': true
    }
    $.ajax({
        data: param,
        url: 'consulta.php',
        datatype: 'html',
        method: 'post',
        success: function(respuesta){
            // console.log(respuesta);
            document.getElementById('seleccion').innerHTML = respuesta;
        }, 
        error: function(xhr,status,error){
            console.log(error);
        }
    });

    // Swal.fire({
    //     position: "top-end",
    //     icon: "success",
    //     title: "Your work has been saved",
    //     showConfirmButton: false,
    //     timer: 1500
    //   });
}