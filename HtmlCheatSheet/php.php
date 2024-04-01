<?php

  // Variable
  $name = "John";
  echo $name;

  // Variable como variable
  $a = "hola";
  $hola = "hi";
  echo $$a; //hi

  // Constante
  define("MSG", "Hola Mundo");
  echo MSG;

  // Alcances de Variables
  $name = 'David';
  function getName() {
    global $name;
    echo $name;
  }
  getName(); // David

  //

  // Arrays
  $Personas = array("David" => "27");
  $Personas['David'] = '28';

  // Array Bidimensional
  $Personas = array(
    'online' => array('David', 'Amy'),
    'offline' => array('John', 'Rob', 'Jack'),
    'away' => array('Arthur', 'Daniel')
  );
  echo $Personas['online'][0]; // "David"
  echo $Personas['away'][1]; // "Daniel"

  // 