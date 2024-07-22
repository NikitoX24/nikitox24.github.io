----------------------------------------------------------------------
---------       SQL (Lenguaje de Consulta Estructurada)      ---------
----------------------------------------------------------------------

-------------------------------------------
-- DLL (Lenguaje de Definicion de Datos) --
-------------------------------------------
CREATE USER nico @localhost IDENTIFIED BY "123456"; --  Crear Usuario:
CREATE DATABASE proyecto; --  Crear Base de Datos.
  DROP DATABASE IF EXISTS proyecto; -- borrar Base de Datos.  -- IF EXISTS (opcional)

show databases; -- Mostrar todas las Base de Datos.
USE proyecto; -- Usar la Base de Datos.(para crear tablas, etc)

-- Crear Tabla.
CREATE TABLE productos (
  id_producto INT NOT NULL AUTO_INCREMENT, -- nombre de la columna, que se identifica como INT, y se asigne autom-
  PRIMARY KEY (id_producto), --
  nombre VARCHAR(150),
  precio int
);
CREATE TABLE clientes (
  id_cliente INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (id_cliente),
  nombre VARCHAR(15),
  apellido VARCHAR(15),
  edad int,
  telefono int
);
CREATE TABLE pedidos (
  id_pedido INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (id_pedido),
  fecha DATE, 
  cantidad INT,
  id_cliente INT,
  id_producto INT,
  FOREIGN KEY (id_cliente) REFERENCES clientes(id_cliente),
  FOREIGN KEY (id_producto) REFERENCES productos(id_producto)
);

DROP TABLE tabla; -- borrar tabla.

ALTER TABLE mytabla RENAME myusuarios; -- renombrar tabla.
ALTER TABLE myusuarios CHANGE telefono celular INT(11); -- cambiar el nombre a una columna.
ALTER TABLE myusuarios ADD COLUMN (direccion VARCHAR(20)); -- agregar nueva columna.
ALTER TABLE myusuarios DROP COLUMN edad; -- borrar columna


-- Añadir Constrains para hacer checks
ALTER TABLE followers ADD CONSTRAINT check_follower_id CHECK (follower_id != following_id); -- cant follow self



---------------------------------------------
-- DML (Lenguaje de Manipulacion de Datos) --
---------------------------------------------

-- agregar un registro
INSERT INTO clientes (nombre, apellido, edad, telefono)
VALUES
("Alex", "Gonzales", "29", "1234567"),
("Nico", "Wolf", "22", "12121212");

-- importar archivo .csv
LOAD DATA LOCAL INFILE "C:/clientes.csv"
  INTO TABLE clientes
  FIELDS TERMINATED BY ";" LINES TERMINATED BY "\n"
  (nombre, apellido, edad, telefono);

-- exportar a .csv
SELECT * FROM clientes
  INTO OUTFILE "C:/mis-clientes.csv"
  FIELDS TERMINATED BY ";" LINES TERMINATED BY "\n\r";

-- Cambiar valor
UPDATE clientes SET telefono="5555555" WHERE id_cliente=1;
UPDATE clientes SET telefono="444444" WHERE id_cliente BETWEEN 5 AND 10; -- cambiar valor ENTRE dos numeros.

-- Borrar
DELETE FROM productos; -- BORRA TODO cuidado!
DELETE FROM productos WHERE id_producto=3; -- borrar solo uno.

-- Seleccionar
SELECT * FROM clientes; -- Mostrar todas.

SELECT nombre FROM clientes; -- Mostrar todos los nombres.

SELECT nombre, apellido FROM clientes WHERE id_cliente=4; -- mostrar nombre y apellido del id 4.

SELECT * FROM clientes WHERE nombre="John"; -- todos los usuarios con nombre John.
SELECT * FROM clientes WHERE nombre="John" AND apellido="Wick"; -- todos los usuarios con ese nombre y apellido.
SELECT * FROM clientes WHERE nombre="John" OR nombre="David"; -- todos los usuarios con esos nombres.

SELECT * FROM clientes WHERE id_cliente > 3; -- todos los registros despues del id 3.
SELECT * FROM clientes WHERE id_cliente != 4; -- todos los registros menos el id 4.
SELECT * FROM clientes LIMIT 10; -- solo los 10 primeros registros
SELECT * FROM clientes LIMIT 10 OFFSET 2; -- extrae los 10 registros ignorando los 2 prmeros

SELECT * FROM clientes WHERE nombre LIKE "d%"; -- todos los registros que empliezen por D.
SELECT * FROM clientes WHERE nombre LIKE "%n"; -- todos los registros que terminan con N.

SELECT * FROM clientes WHERE id_cliente IN (1,3,5,8); -- seleccionar varios regustris.

-- Ordenar
SELECT * FROM clientes WHERE id_cliente<20 ORDER BY nombre ASC; -- ordenar alfab. Ascendentemente. (ASD opcional)
SELECT * FROM clientes WHERE id_cliente<20 ORDER BY nombre DESC; -- ordenar alfab. Descendentemente.

-- Agregacion
SELECT COUNT(*) AS nombre FROM clientes WHERE nombre="David"; -- Contar cuantas personas se llaman David.
SELECT SUM(edad) AS edad FROM clientes WHERE nombre="John"; -- Sumar todas las edades de los q se llaman John.
SELECT MAX(edad) AS edad FROM clientes; -- Mostrar entre todas las edades cual es el maximo. (MAX-MIN)
SELECT AVG(edad) AS edad FROM clientes; -- Mostrar entre todas las edades la edad promedio.
SELECT precio+envio AS total FROM clientes; -- Mostrar una suma en una calumna nueva

-- Agrupar
SELECT nombre, COUNT(*) FROM clientes GROUP BY nombre; -- Mostrar Lista con todos los nombres repetidos.

-- Uniones

  -- INNER JOIN
SELECT * FROM clientes INNER JOIN pedidos ON clientes.id_cliente = pedidos.id_cliente; -- Lista completa de pers con sus pedidos.
SELECT nombre, id_producto FROM clientes INNER JOIN pedidos ON clientes.id_cliente = pedidos.id_cliente; -- Lista nombres de las pers con sus productos.

SELECT nombre, id_producto FROM clientes INNER JOIN pedidos ON clientes.id_cliente = pedidos.id_cliente WHERE cantidad>4; -- Lista nombres de las pers con sus productos menor a 4.

  -- LEFT JOIN
SELECT * FROM clientes LEFT JOIN pedidos ON clientes.id_cliente = pedidos.id_pedido; -- CLIENTES -> PEDIDOS.

  -- RIGHT JOIN
SELECT * FROM clientes RIGHT JOIN pedidos ON clientes.id_cliente = pedidos.id_pedido; -- PED -> CLTS. (hide no pedidos)