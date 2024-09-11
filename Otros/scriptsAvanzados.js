//  Manejo de Error en Callback
function sumar(num1, num2, callback){
  setTimeout(function(){
    if(typeof num1 != "number" || typeof num2 != "number"){
        return callback(new Error(" Argumento no válido"));
    }
    callback(null, num1 + num2);
  }, 1000);
}

sumar("p", 50, function(error, resultado){
if(error){
  console.log(error);
}else{
  console.log(resultado);
}
})



