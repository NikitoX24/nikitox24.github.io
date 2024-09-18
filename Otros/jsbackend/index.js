// configurar con expressJS el servidor de la app
const express = require("express");
const app = express();

app.set("port", 3000);
app.listen(3000);

// Llamar al componente de MySql
var mysql = require("mysql");

// establecer los parametros de la conexión
var conexion = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "db_mypag"
});

// conexion a la DB
conexion.connect();

// agregar nuevo registro
/* conexion.query("insert int test values('nico', 'xde', 25)", function(error, resultado) {
  if (error) throw error;
  console.log(resultado)
}); */


// consultar tabla
conexion.query("select * from usuarios", function(error, filas) {
  if (error) throw error;
  console.log(filas)
})





// Cerrar conexion (para no consumir)
conexion.end();