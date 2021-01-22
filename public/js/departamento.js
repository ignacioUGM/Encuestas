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
          $("#departamentoTable tbody").prepend('<tr><td>'+ response.nombre_departamento +'</td><td>'+ response.descripcion_departamento +'<td></td></tr>')
    
            $("#guardar_departamento")[0].reset();
           $("#nuevo_departamento").modal('hide');
    
    
        }
    
       }
    
       
    
    
    }
    );
    
    
    }
    