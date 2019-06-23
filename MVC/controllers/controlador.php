<?php

        # Llamada a la pagina
    class MvcController{

        public function plantilla(){

            include "views/template.php";

        }

    


        # Iteracion del usuario
    public function enlacesPaginasController(){

        $enlacesController = $_GET["action"];
        echo $enlacesController;

        $respuesta = enlacesPaginas::enlacesPaginasModel($enlacesController);

            include  $respuesta;

    }

} 

?>