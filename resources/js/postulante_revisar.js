function mostrar_requisitos(convocatoria_id){
    var base_url    = document.getElementById('base_url').value;
    var controlador = base_url+"convocatoria/get_requisitos";
    $.ajax({url: controlador,
            type:"POST",
            data:{convocatoria_id:convocatoria_id},
            success:function(respuesta){
                var datos= JSON.parse(respuesta);
                if (datos != null){
                    var n = datos.length;
                    html = "";
                    for (var i = 0; i < n ; i++){
                        html += "<tr>";
                        html += "<td align='center' style='width:5px;'>"+(i+1)+"</td>";
                        html += "<td> "+datos[i].requisito_nombre+" </td>";
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
