<?php
/*En el INDEX sera la portada de mi pagina y la iteracion client and server*/


/*Require: Establece que el codigo del archivo invocado es requerido, es decir,
 obligatorio para el funcionamiento del programa. Por ello, si el archivo 
 especificado en la funcion require() no se encuentra saltara un error "PHP 
 Fatal error" y el programa PHP se detendra.*/

/*La version de require_once() funcionan de la misma forma que sus respectivo,
 salvo que, al utilizar la version _once, se impide la carga del mismo archivo
 mas de una vez. */

 require_once "controllers/controlador.php";

     $mvc = new MvcController();
     $mvc -> plantilla();

?>