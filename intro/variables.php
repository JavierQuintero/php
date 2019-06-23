<?php

        #Variable tipo numerica

    $numero = 5;
    echo "<p>Este  es el valor de la 
    variable de tipo numerico: '$numero'</p>";

        #Variable tipo String

    $text = "Palabra";
    echo "<p>Este  es el valor de la 
    variable de tipo string: '$text'</p>";


        #Variable tipo Boolean

    $boolean = true;
    echo "<p>Este  es el valor de la 
    variable de tipo boolean: '$boolean'</p>";


        #Variable tipo Array

    $colores = array("amarillo", "verde", "azul");
    echo "<p>Este  es el valor de la 
    variable de tipo Array en el cual definimos 
    los colores para la mezcla</p>
          <p>Al mezclar los colores: 
             $colores[0]    y   $colores[2], 
        obtendremos el color    $colores[1]!.</p>";



          #Variable tipo Arreglos con propiedades
    $verduras = array(
        "verdura1"=>"lechuga",
        "verdura2"=>"cebolla"
    );
    echo 
    "<p>Este  es el valor de la 
        variable de tipo Array con propiedades:</p> 
        <ul>
            <li>$verduras[verdura1]</li>
        </ul>";


          #Variable tipo Objeto
     
          $frutas = (object)["fruta1"=>"Pera", 
                        "fruta2"=>"Manzana"];
     echo 
     "<p>Este  es el valor de la 
         variable de tipo Objeto: </p>
     
        <ul>
           <li>$frutas->fruta1</li>
           <li>$frutas->fruta2</li>
        <ul>";

?>