
function CrearPreguntas() {
   let id_encuesta = $("#id_encuesta").val();
   let nombre_pregunta = $("#nombre_pregunta").val();
   let descripcion_pregunta = $("#descripcion_pregunta").val();
   let _token = $("input[name=_token]").val();

   const data = {
      id_encuesta: id_encuesta,
      nombre_pregunta: nombre_pregunta,
      descripcion_pregunta: descripcion_pregunta,
      _token: _token

   }

   $.ajax(
      {

         url: "add-pregunta",
         method: "GET",
         data,
         success: function (response) {
            console.log(data)

            if (response) {
               console.log(response)
               $("#preguntasTable tbody").append('<tr><td>' + response.nombre_pregunta + '</td><td>' + response.descripcion_pregunta + '</td></tr>')
               $("#guardar_pregunta")[0].reset();
               $("#nueva_pregunta").modal('show');
            }
            else (response)

            $("#message").html(response.message);

         }
      }
   );
}


function recuperaridencuesta(id) {
console.log('recuperaridencuesta')
   $.get('recuperar-pregunta/'+id,function(preguntas) {
      $("#id").val(preguntas.id);
      $("#nombreEdit").val(preguntas.nombre_pregunta);
      $("#descripcionEdit").val(preguntas.descripcion_pregunta);
      $("#edit_pregunta").modal('show');


   })

}



function updatePregunta(){
   let id = $("#id").val();
   let nombre_pregunta  = $("#nombreEdit").val();
   let descripcion_pregunta = $("#descripcionEdit").val();
   let _token = $("input[name=_token]").val();


const data = {   
   id:id,   
   nombre_pregunta:nombre_pregunta,
   descripcion_pregunta:descripcion_pregunta,
   _token:_token
   
}
$.ajax({
      
      url:"update-pregunta",
      method:"PUT",
      data,
      success:function(response){

         console.log(data)

         if(response){
            console.log(response)

      $('#sid' + response.id +' td:nth-child(1)').text(response.nombre_pregunta);
      $('#sid' + response.id +' td:nth-child(2)').text(response.descripcion_pregunta);
      
      $("#message").html(response.message);
      $("#editModal").modal('show');
    
      }
   }

});

}
function DeletePregunta(id){

   if (confirm('¿estas seguro que quieres eliminar esta pregunta?')){
     
      $.ajax({
   
       url:'delete-pregunta/'+id,
       method:"DELETE",
       data:{
   
          _token : $("input[name=_token]").val()
        
         },
             success:function(response)
             {
   
               
               $("#sid"+id).remove();
   
             } 
   
      });
   
   }
   
      }
   
