<!-- https://youtu.be/-xDZwb-PY0M -->


<!-- comando para inicializar proyecto -->
tsc -init           <!-- (crea un archivo tsconfig.json) -->

<!-- comando para transpilar -->
tsc

<!-- comando para ejecutar el archivo js (transpilado) -->
node dist/index.js



<!-- version de js para transpilar de ts a js -->
"target": "es2016"        // 2016 (segura y soporta todos los navegadores)

<!-- ruta donde van los archivos ts -->
"rootDir": "./",

<!-- ruta donde suelta los archivos js (ya transpilados) -->
"outDir": "./dist",

<!-- comentarios -->
"removeComments": true,

<!-- si hay errores no transpilar los archivos -->
"noEmitOnError": false,

<!-- mapeo de archivos para vscode -->
"sourceMap": true

<!-- uso de any (siempre mantener en true)-->
"noImplicitAny": true, <!-- advierte sobre any implicito -->