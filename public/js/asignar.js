function asignarU(){


  let id = $('#select_departamentoAsignar').val();



  const data = {
   
   id:id

  }
  

  $.ajax({

   url = 'usuarios2',
   method = 'GET',
   data, 
   success:function(response){




   }



  })








}