<?php

$miPais = $_POST["pais"];

setcookie("estado", $miPais, time()+ 3600);