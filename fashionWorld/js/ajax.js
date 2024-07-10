// function eliminarPro(){
//     var valor = document.getElementById('id_producto').value;
//     param = {
//         "idProEliminar":valor
        
//     }
//     $.ajax({
//         data: param,
//         url: 'ctroAdmi.php',
//         dataType: 'html',
//         method: 'get',
//         success:function(respuesta){//función de respuesta
//             if(respuesta===0){
//                 Swal.fire({
//                     icon: "error",
//                     title: "error",
//                     text: "no se encontró",
//                   }) 
//             }else{
//                 document.getElementById('productos').innerHTML = respuesta;
//             }
            
            
//         },
//         error: function(xhr,status,error){
//             console.log(error);
//         }


//     })
// }
  

function eliminarPro(){param={idProEliminar:document.getElementById("id_producto").value},$.ajax({data:param,url:"ctroAdmi.php",dataType:"html",method:"get",success:function(e){0===e?Swal.fire({icon:"error",title:"error",text:"no se encontr\xf3"}):document.getElementById("productos").innerHTML=e},error:function(e,r,t){console.log(t)}})}
