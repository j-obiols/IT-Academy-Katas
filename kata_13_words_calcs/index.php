<?php

  include "funciones.php";

  /*
  * Crea un programa que analice texto y obtenga:
  * - Número total de palabras.
  * - Longitud media de las palabras.
  * - Número de oraciones del texto (cada vez que aparecen un punto).
  * - Encuentre la palabra más larga.
  *
  */
   
  //Definimos un array con textos de prueba:

  $textos = array(

    "TEXTO 1" => "-Caramba, caramba!",

    "TEXTO 2" => "Òbviament, aquest text està traduït de l'anglès...",

    "TEXTO 3" => "123",

    "TEXTO 4" => 25934,

    "TEXTO 5" => "Platero es pequeño, peludo, suave; tan blando por fuera, que se diría todo de
    algodón, que no lleva huesos. Sólo los espejos de azabache de sus ojos son duros
    cual dos escarabajos de cristal negro.",

    "TEXTO 6" => "Muchos años después, frente al pelotón de fusilamiento, el coronel Aureliano Buendía
    había de recordar aquella tarde remota en que su padre lo llevó a conocer el hielo. Macondo era entonces una aldea de 20 casas de barro
    y cañabrava construidas a la orilla de un río de aguas diáfanas que se precipitaban por un lecho de piedras pulidas, blancas y enormes como huevos prehistóricos.
    El mundo era tan reciente, que muchas cosas carecían de nombre, y para mencionarlas había que señalarlas con el dedo."

  );

  //Aplicamos la función a los textos de prueba:

  foreach($textos as $clave => $valor) {
    echo $clave."<br><br>";
    echo $textos[$clave]."<br><br>";
    echo analisisTexto($textos[$clave])."<br><br>";
  }
  

?>