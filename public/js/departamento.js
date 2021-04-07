function departamento(){
    let id = $('#id').val();
    let nombre_departamento = $("#nombre_departamento").val();
    let descripcion_departamento = $("#descripcion_departamento").val();
    let _token = $("input[name=_token]").val();
    
    const data = {    
       id:id,  
        nombre_departamento:nombre_departamento,
       descripcion_departamento:descripcion_departamento,
       _token:_token
       
    }

    $.ajax(
    {
    
        url:"add-departamento",
        method:"GET",
        data,
       success:function(response){
       console.log(data)
       
         if(response){
          console.log(response)

          if (typeof response.id !== 'undefined') {

            $("#departamentoTable tbody").append('<tr><td>'+ response.nombre_departamento +'</td><td>'+ response.descripcion_departamento +'</td><td>'+ response.created_at +'</td><td>'+ "<button type='button' class='btn btn-success btn-sm'  data-toggle='modal' data-target='#editDepartamento' onclick='editaDepartamento("+response.id+")'><i class='glyphicon glyphicon-edit'> </i></button>"+
            "  <button type='button' class='btn btn-danger btn-sm'  data-toggle='modal' data-target='' onclick='DeleteDepartamento("+response.id+")'> <i class='glyphicon glyphicon-trash'> </i></button> </td></tr>")
              $("#guardar_departamento")[0].reset();
             $("#nuevo_departamento").modal('show');
          }

          
      $("#message").html(response.message);

           }
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
                success: function(response)
                {
                   console.log('delete', response)

                   $("#departamentoTable tbody").html('')
                   
                   response.map(function (element, index) {
      
                   $("#departamentoTable tbody").append('<tr><td hidden>'+ element.id +'</td><td>'+ element.nombre_departamento +'</td><td>'+ element.descripcion_departamento +'</td><td>'+ element.created_at +'</td><td>'+ "<button type='button' class='btn btn-success btn-sm'  data-toggle='modal' data-target='#editDepartamento' onclick='editaDepartamento("+element.id+")'><i class='glyphicon glyphicon-edit'> </i></button>"+
                   "<button type='button' class='btn btn-danger btn-sm'  data-toggle='modal' data-target='' onclick='DeleteDepartamento("+element.id+")'> <i class='glyphicon glyphicon-trash'> </i></button> </td></tr>")
                  
                    $("#guardar_departamento")[0].reset();
                    $("#nuevo_departamento").modal('show');

                  });

                    $("#sid" +id).remove();

                   departamento()

                } 

               
         });
      }
}
      
      
    