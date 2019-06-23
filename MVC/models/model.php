<?php

    class enlacesPaginas{

        public function enlacesPaginasModel($enlacesModel){

                 if( $enlacesModel == "nosotros" || 
                     $enlacesModel == "la_carta" ||
                     $enlacesModel == "la_barra" ||
                     $enlacesModel == "reservas" ||
                     $enlacesModel == "blog"     ||
                     $enlacesModel == "contacto"  ){
                    
                        $module ="views/modules/".$enlacesModel.".php";
                
                        return $module;
                    }

            
                
        }

    }

?>