function departamento(){

    let nombre_departamento = $("#nombre_departamento").val();
    let descripcion_departamento = $("#descripcion_departamento").val();
    let _token = $("input[name=_token]").val();
    
    const data = {      
        nombre_departamento:nombre_departamento,
       descripcion_departamento:descripcion_departamento,
       _token:_token
       
    }

    $.ajax(
    {
    
        url:"add-departamento",
        method:"GET",
        data,
       success:function(response)
    {
       console.log(data)
       
         if(response){
          console.log(response)
          $("#departamentoTable tbody").append('<tr><td>'+ response.nombre_departamento +'</td><td>'+ response.descripcion_departamento +'</td><td>'+ response.created_at +'</td></tr>')
            $("#guardar_departamento")[0].reset();
           $("#nuevo_departamento").modal('show');
        }
       else(response) 
         
      $("#message").html(response.message);


       }
    }
    );
    }


// ----------------------------------------------------------------------------------------------------

    function editaDepartamento(id){

      $.get('edit-departamento/'+id,function(departamento){
       $("#id_departamentos").val(departamento.id);
       $("#editNombreDepartamento").val(departamento.nombre_departamento);
       $("#editDescripcionDepartamento").val(departamento.descripcion_departamento);
       $("#editDepartamento").modal('show');
       
    
     
   
      })
      }
   
   // ------------------------------------------------------------------------------------------------------------------
    
   function updateDepartamento(){
      let id = $("#id_departamentos").val();
      let nombre_departamento = $("#editNombreDepartamento").val();
      let descripcion_departamento = $("#editDescripcionDepartamento").val();
      let _token = $("input[name=_token]").val();
   
   
   const data = {   
      id:id,   
      nombre_departamento:nombre_departamento,
      descripcion_departamento:descripcion_departamento,
      _token:_token
   }
   
   $.ajax(
      {
         
         url:"update-departamento",
         method:"PUT",
         data,
         success:function(response){

            console.log("data",data)
          
            if(response){
               console.log(response)
         $('#sid' + response.id +' td:nth-child(1)').text(response.nombre_departamento);
         $('#sid' + response.id +' td:nth-child(2)').text(response.descripcion_departamento);
         $("#editDepartamento").modal('show');
         $("#guardarEditDepartamento");
         }
      }
   })
   }

// ----------------------------------------------------------------------------------------------------------------------

   
   function DeleteDepartamento(id){

      if (confirm('¿estas seguro que quieres eliminar este departamento?')){
        
         $.ajax({
      
          url:'delete-departamento/'+id,
          method:"DELETE",
          data:{
      
             _token : $("input[name=_token]").val()
           
            },
                success:function(response)
                {
                   console.log(response)
                  $("#sid"+id).remove();

                } 
         });
      }
         }
      
      
    