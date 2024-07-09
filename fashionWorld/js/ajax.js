function eliminarPro(){
    var valor = document.getElementById('id_producto').value;
    param = {
        "idProEliminar":valor
        
    }
    $.ajax({
        data: param,
        url: '../admi/controlador.php',
        dataType: 'html',
        method: 'get',
        success:function(respuesta){//función de respuesta
            console.log(respuesta);
            // if(respuesta===0){
            //     // Swal.fire({
            //     //     icon: "error",
            //     //     title: "error",
            //     //     text: "no se encontró",
            //     //   }) = respuesta; 
            // }else{
            //     document.getElementById('productos').innerHTML = respuesta;
            // }
            
            
        },
        error: function(xhr,status,error){
            console.log(error);
        }


    })
}
  