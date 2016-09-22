// Recomiendo leer este archivo de abajo hacia arriba para comprenderlo mejor.

$(function(){

    $(document).on("keypress", "form", function(event) {
      return event.keyCode != 13;
    });


    $("#mensajeDisponibilidad").show();
    function siRespuesta(r){
        resp = r.res;
          // Mostrar la respuesta del servidor en el div con el id "respuesta"
        // 0 disponible, 1 no disponible
          if(resp === 1){
          mensaje = "El nombre de usuario no está disponible";
          $("#enviaform").hide();
          $("#mensajeDisponibilidad").css("color","red");
        } else {
          mensaje = "El nombre de usuario está disponible";
          $("#enviaform").show();
          $("#mensajeDisponibilidad").css("color","green");
               }
          $('#mensajeDisponibilidad').html(mensaje);
    }

    function siError(e){
        alert('Ocurrió un error al realizar la petición: '+e.statusText);
    }

    function peticion(e){

        // Obtener valores de los campos de texto
        var parametros = {
            username: $('#inputUser').val()
        };

        // Realizar la petición
    	var post = $.post(
                            "validacionNombreUsuario.php",    // Script que se ejecuta en el servidor
    	                      parametros,
    	                      siRespuesta,    // Función que se ejecuta cuando el servidor responde
    	                      'json'          // Tipo de respuesta del servidor
                              );

        /* Registrar evento de la petición (hay mas)
           (no es obligatorio implementarlo, pero es muy recomendable para detectar errores) */

    	post.error(siError);         // Si ocurrió un error al ejecutar la petición se ejecuta "siError"
    }

    $('#inputUser').focusout(peticion); // Registrar evento al boton "Calcular" con la funcion "peticion"
});
