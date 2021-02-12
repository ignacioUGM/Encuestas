






function CrearPreguntas(){
    let nombre_pregunta = $("#nombre_pregunta").val();
    let descripcion_pregunta = $("#descripcion_pregunta").val();
    let _token = $("input[name=_token]").val();
    
    const data = {    
        nombre_pregunta:nombre_pregunta,
       descripcion_pregunta:descripcion_pregunta,
       _token:_token
       
    }

    $.ajax(
    {
    
        url:"add-pregunta",
        method:"GET",
        data,
       success:function(response)
    {
       console.log(data)
       
         if(response){
          console.log(response)
          $("#preguntasTable tbody").append('<tr><td>'+ response.nombre_pregunta +'</td><td>'+ response.descripcion_pregunta +'</td></tr>')
            $("#guardar_pregunta")[0].reset();
           $("#nueva_pregunta").modal('show');
        }
       else(response) 
         
      $("#message").html(response.message);

       }
    }
    );
    }


    function recuperaridencuesta(id_encuesta){

      $.get('recuperar-idencuesta/'+id_encuesta,function(preguntas){
         $("#recuperar").val(preguntas.id_encuesta);
   
   
   
   
      })
   
   }
