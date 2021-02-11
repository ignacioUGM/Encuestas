


function encuesta(){

let nombre_encuesta = $("#nombre_encuesta").val();
let tipo_encuesta = $('#tipo_encuesta').val();
let _token = $("input[name=_token]").val();

const data = {

    nombre_encuesta:nombre_encuesta,
    tipo_encuesta:tipo_encuesta,
    _token:_token,


} 


$.ajax(
    {

url:"add-encuesta",
method:"GET",
data,

success:function(response)
    {

        console.log(data)
       
        if(response){
         console.log('encuesta response',response)
         $("#view_encuesta").prepend("<div class='col-lg-2 col-md-2 col-sm-6 col-xs-12 thumb text-center ng-scope' ng - repeat='item in records'>"+"<a class='thumbnail' href='#'>"+"<img class='img-responsive' src='image/encuesta.png'>"+"</a>"+"<span class='thumb-name'>"+"<p>"+ response.tipo_encuesta +"</p>"+"</span>"+"<span class='thumb-code ng-binding'>"+"<p>"+ response.nombre_encuesta +"</p>"+"</span>"+"<span class='thumb-name'>"+"<p>"+ response.created_at +"</p>"+"</span>"+"</div>"); 
         $("#guardar_encuesta")[0].reset();
          $("#nueva_encuesta").modal('show');
       } else(response)     
         
        $("#message").html(response.message);

//<span>'+ response.nombre_encuesta +'</span><span>'+ response.created_at +'</span><span>'+ response.tipo_encuesta +'</span></div>
    }

}
);

}