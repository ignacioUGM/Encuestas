/*
function prueba(){
     console.log('chupalo')
     function usuarios(){




        $("#userForm").submit(function (e){
        e.preventDefault();
        let name = $("#name").val();
        let lastname = $("#lastname").val();
        let email = $("#email").val();
        let password = $("#password").val();
        let _token = $("input[name=_token]").val();
        
        $.ajax({
        
            url:"{{route('users.add')}}",
            method:"POST",
            data:{
              
               name:name,
               lastname:lastname,
               email:email,
               password:password,
               _token:_token
        
        
            },
            success:function(response){
        
             if(response){
              console.log('kk')
              $("#userTable tbody").prepend('<tr><td>'+ response.name +'</td><td>'+ response.lastname +'</td><td>'+ response.email +'</td>'+ response.password +'<td></td></tr>')
        
            $("#userForm")[0].reset();
            $("#userModal").modal('hide');
        
        
             }
        
            }
        
        });
        
        });
        

}
*/


function usuarios(){



let name = $("#name").val();
let lastname = $("#lastname").val();
let email = $("#email").val();
let password = $("#password").val();
let _token = $("input[name=_token]").val();

const data = {      
   name:name,
   lastname:lastname,
   email:email,
   password:password,
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
      $("#userTable tbody").prepend('<tr><td>'+ response.name +'</td><td>'+ response.lastname +'</td><td>'+ response.email +'</td>'+ response.password +'<td></td></tr>')

	    $("#userForm")[0].reset();
	   $("#userModal").modal('hide');


    }
    

   }

   


}
);


}
