function asignarU(){


  let usuario_departamento = $('#select_departamentoAsignar').val();



  const data = {
   
 usuario_departamento : usuario_departamento

  }
  

  $.ajax({

   url = 'preguntas',
   method = 'GET',
   data, 
   success:function(response){

if(response){

  $('#asignarUserTable').get();
  return view ('usuario_encuestas');





}



   } 







  });








}