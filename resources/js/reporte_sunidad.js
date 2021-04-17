function buscar_reporte(){
    var base_url   = document.getElementById('base_url').value;
    var gestion_id = document.getElementById('gestion_id').value;
    var unidad_id  = document.getElementById('unidad_id').value;
    var controlador = base_url+"reporte/buscar_sunidad";
    $.ajax({url: controlador,
            type:"POST",
            data:{gestion_id:gestion_id, unidad_id:unidad_id},
            success:function(respuesta){
                var datos= JSON.parse(respuesta);
                if (datos != null){
                    var nom_gestion = $("#gestion_id option:selected").text();
                    var nom_unidad  = $("#unidad_id option:selected").text();
                    var n = datos.length;
                    var total = Number(0);
                    html = "";
                    for (var i = 0; i < n ; i++){
                        total += Number(datos[i].solicitud_cantidad_becarios);
                        html += "<tr>";
                        html += "<td align='center' style='width:5px;'>"+(i+1)+"</td>";
                        html += "<td> "+datos[i].solicitud_unidad+" </td>";
                        html += "<td class='text-right'> "+datos[i].solicitud_cantidad_becarios+" </td>";
                        html += "</tr>";
                    }
                    html += "<tr>";
                    html += "<td colspan='2' class='text-right text-bold'> Total: </td>";
                    html += "<td class='text-right text-bold'> "+total+" </td>";
                    html += "</tr>";
                   $("#mostrarsolicitudes").html(html);
                   $("#lagestion").html("Gestion: <b>"+nom_gestion+"</b><br>");
                   $("#launidad").html("Unidad: <b>"+nom_unidad+"</b>");
                }else{
                    $("#mostrarsolicitudes").html("");
                    alert("No se encontraron Solicitudes");
                }
        }
    })
}
