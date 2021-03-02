
function usuarios(){
let id = $("#iduser").val();
let name = $("#name").val();
let lastname = $("#lastname").val();
let email = $("#email").val();
let password = $("#password").val();
let gender = $("#select_genero").val();
let type_user =$("#type_user").val();
let departamento_usuario = $("#select_departamento").val();
let _token = $("input[name=_token]").val();


const data = {      
   id:id,
   name:name,
   lastname:lastname,
   email:email,
   password:password,
   gender:gender,
   type_user:type_user,
   departamento_usuario:departamento_usuario,
   _token:_token
   
}

$.ajax(
{
   
	url:"add-users",
	method:"GET",
	data,
   success:function(response)
{
   console.log(data)
   
     if(response){
      console.log(response)
      $("#userTable tbody").prepend('<tr><td>'+ response.id +'</td><td>'+ response.name +'</td><td>'+ response.lastname +'</td><td>'+ response.email +'</td><td>'+ response.password +'</td><td>'+ response.gender +'</td><td>'+ response.type_user +'</td></tr>');
      $("#message").html(response.message);

	    $("#userForm")[0].reset();
      $("#userModal").modal('show');

    }

   }
}
);
}

// -----------------------------------------------------------------------------


function editUsuarios(id){

   $.get('edit-users/'+id,function(users){
    $("#id").val(users.id);
    $("#nameEdit").val(users.name);
    $("#lastnameEdit").val(users.lastname);
    $("#emailEdit").val(users.email);
    $("#editModal").modal('show');

  

   })
   }

   //---------------------------------------------------------------------------------------
   function updateUsuarios(){
      let id = $("#id").val();
      let name = $("#nameEdit").val();
      let lastname = $("#lastnameEdit").val();
      let email = $("#emailEdit").val();
      let _token = $("input[name=_token]").val();
   
   
   const data = {   
      id:id,   
      name:name,
      lastname:lastname,
      email:email,
      _token:_token
      
   }
   $.ajax({
         
         url:"update-users",
         method:"PUT",
         data,
         success:function(response){

            console.log(data)

            if(response){
               console.log(response)
         $('#sid' + response.id +'td:nth-child(1)').text(response.id);
         $('#sid' + response.id +' td:nth-child(2)').text(response.name);
         $('#sid' + response.id +' td:nth-child(3)').text(response.lastname);
         $('#sid' + response.id +' td:nth-child(4)').text(response.email);
         $("#message2").html(response.message);

         // $("#editForm")[1].reset();
         $("#editModal").modal('show');
       
         }
      }
   
   });

   }

// -----------------------------------------------------------------------------------------------

   function DeleteUsuario(id){

if (confirm('¿estas seguro que quieres eliminar a este usuario?')){
  
   $.ajax({

    url:'delete-users/'+id,
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


// ----------------------------------------------------------------------------------------------
 


function editContraseña(id){

   $.get('edit-contraseña/'+id,function(users){
    $("#id3").val(users.id);
    $("#editContraseña").val(users.password);

    $("#editModal").modal('show');

  

   })
   }




// ----------------------------------------------------------------------------------------------
   function CambiarContraseña(){
      let password = $("#Editpassword").val();
      let confpassword = $("#confpassword").val();
      let _token = $("input[name=_token]").val();
    
   const data = {   
      password:password,   
      confpassword:confpassword,
      _token:_token
   }


   $.ajax({

   url:"change-password",
   method:"PUT",
   data,
   

   success:function(response)
   {

      console.log(data)
      if(response){
         console.log(response)
         $('#sid' + response.id +'td:nth-child(1)').text(response.id);
         $('#sid' + response.id +' td:nth-child(2)').text(response.password);
      $("#message2").html(response.message);
      // $("#editcontraForm")[0].reset();
      $("#contraseñaModal").modal('show');

   }
   } 

});

   }



   function recuperarIdDepartamento($id_departamento){
   
    $.ajax({
     

      











    });









   }