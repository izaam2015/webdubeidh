function formulario_requisitos(postulante_id){
    var base_url    = document.getElementById('base_url').value;
    var controlador = base_url+"postulante/get_formulariorequisitos";
    $.ajax({url: controlador,
            type:"POST",
            data:{postulante_id:postulante_id},
            success:function(respuesta){
                var datos= JSON.parse(respuesta);
                if (datos != null){
                    var n = datos.length;
                    html = "";
                    for (var i = 0; i < n ; i++){
                        html += "<tr>";
                        html += "<td align='center' style='width:5px;'>"+(i+1)+"</td>";
                        html += "<td> "+datos[i].requisito_nombre+" </td>";
                        html += "<td class='text-center'> ";
                        if(datos[i].estado_id == 7){
                            esteestado = "CUMPLE";
                        }else{
                            esteestado = "NO CUMPLE";
                        }
                        html += esteestado+" </td>";
                        html += "</tr>";
                    }
                   $("#tablaresultados").html(html);
                   $('#modalrequisito').modal('show');
                }else{
                    alert("Esta convocatoria no tiene Requisitos");
                }
        }
    })
}
