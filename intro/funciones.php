<?php
    #Funciones sin parametros

    function saludo(){
            #Codigo a ejecutar
        echo "<h3>Hola</h3>";

    }
        #Llamado de la funcion 
    saludo();

    
    #Funciones con parametros

    function despedida($adios){

        echo $adios;

}
    despedida("<h3>Chao!!!!</h3>");

  

      #Funciones con retorno

    function retorno($retornar){
            
        return $retornar;

    }

        echo retorno("retornar");




?>