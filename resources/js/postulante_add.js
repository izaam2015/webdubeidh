function registrarnuevoestudiante(){
    var controlador = "";
    var base_url  = document.getElementById('base_url').value;
    var estudiante_nombre = document.getElementById('estudiante_nombre').value;
    var estudiante_apellidos = document.getElementById('estudiante_apellidos').value;
    var estudiante_ci = document.getElementById('estudiante_ci').value;
    var estudiante_codsis = document.getElementById('estudiante_codsis').value;
    var estudiante_email = document.getElementById('estudiante_email').value;
    var estudiante_carrera = document.getElementById('estudiante_carrera').value;
    var estudiante_celular = document.getElementById('estudiante_celular').value;
    var estudiante_telefono = document.getElementById('estudiante_telefono').value;
    if(estudiante_nombre =="" || estudiante_apellidos == ""){
        alert("Nombres y Apellidos no deben estar en blanco");
    }else{
        controlador = base_url+'postulante/nuevoestudiante/';
        $('#modalestudiante').modal('hide');
        $.ajax({url: controlador,
                type:"POST",
                data:{estudiante_nombre:estudiante_nombre, estudiante_apellidos:estudiante_apellidos,
                     estudiante_ci:estudiante_ci, estudiante_codsis:estudiante_codsis,
                     estudiante_email:estudiante_email, estudiante_carrera:estudiante_carrera,
                     estudiante_celular:estudiante_celular, estudiante_telefono:estudiante_telefono
                },
                success:function(respuesta){
                    var registros =  JSON.parse(respuesta);
                    if (registros != null){
                        html = "";
                        html += "<option value='"+registros["estudiante_id"]+"' selected >";
                        html += registros["estudiante_apellidos"]+" "+registros["estudiante_nombre"];
                        html += "</option>";
                        $("#estudiante_id").append(html);
                }
            },
            error:function(respuesta){
               html = "";
               $("#estudiante_id").html(html);
            }

        });
    }
}
