<?php
include "Viaje.php";
$totales=[];

    //FUNCIONES

    /**
    * Define la cantidad maxima de pasajeros del viaje segun servicio.
    * @param string $servicio
    * @return int
    */
    
    function cantidadMaxima($servicio){
        if($servicio=="CAMA"){
            $cantidadMax = 26;
        }elseif($servicio=="SEMI"){
            $cantidadMax = 37;
        }    
        return $cantidadMax;

    }







        
    
    //PROGRAMA TEST
            
     

    echo " CARGAR NUEVO VIAJE \n";
    echo "Ingrese Codigo de Viaje: \n";
    $codigo=strtoupper(trim(fgets(STDIN)));
    echo "Ingrese Destino de Viaje: \n";
    $destino=strtoupper(trim(fgets(STDIN)));
    echo "El servicio es CAMA O SEMI?: \n";
    $tipoServicio=strtoupper(trim(fgets(STDIN)));
    $cantMaxPasajeros= cantidadMaxima($tipoServicio);
    $objViaje = new Viaje($codigo,$destino,$cantMaxPasajeros,$totales);  
  

  
while ($opcion <> 6){
    do {
        echo "Menú de opciones Sistema Viaje Feliz: \n";
		echo "   1)   Cargar Nuevo Pasajero \n";
        echo "   2)   Modificar Codigo Viaje \n";
		echo "   3)   Modificar Destino Viaje \n";
        echo "   4)   Ver datos Viaje \n";
        echo "   5)   Ver datos Pasajeros del Viaje \n";
        echo "   6)   SALIR \n";
		echo "Elija una opción del menú: ";
		$opcion = trim(fgets(STDIN));
    } while ($opcion < 1 || $opcion > 7);

       

    if($opcion==1){
        echo "Ingrese Nombre de Pasajero: \n";
        $nombre=strtoupper(trim(fgets(STDIN)));
        echo "Ingrese Apellido de Pasajero: \n";
        $apellido=strtoupper(trim(fgets(STDIN)));
        echo "Ingrese Documento de Pasajero: \n";
        $dni=strtoupper(trim(fgets(STDIN)));
        $nuevoPasajero = $objViaje -> nuevoPasajero($nombre,$apellido,$dni);
        $objViaje -> sumarPasajero($nuevoPasajero);

    }elseif($opcion==2){
        echo "Ingrese Nuevo Codigo : \n";
        $codigoModif = trim(fgets(STDIN));
        $objViaje -> setcodigo($codigoModif);

    }elseif($opcion==3){
        echo "Ingrese Destino Nuevo : \n";
        $destinoModif = trim(fgets(STDIN));
        $objViaje -> setdestino($destinoModif);
        
    }elseif($opcion==4){
        echo $objViaje;
        

        

    
    }elseif($opcion==5){
        print_r($objViaje -> gettotalPasajeros());
        
        
    }
        

    


}
    

   



