<?php
include "Viaje.php";
$totales=[["nombre" => "Samanta", "apellido" => "Gomez", "documento" => 34505202],
        ["nombre" => "Enzo", "apellido" => "Castro", "documento" => 31125810],
        ["nombre" => "Kiara", "apellido" => "Luzbelito", "documento" => 28101250],
        ["nombre" => "Oscar", "apellido" => "Bilardo", "documento" => 17310401]];

    //FUNCIONES

    /**
    * Define la cantidad maxima de pasajeros del viaje
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
            
    echo "Ingrese Codigo de Viaje: \n";
    $codigo=strtoupper(trim(fgets(STDIN)));
    echo "Ingrese Destino de Viaje: \n";
    $destino=strtoupper(trim(fgets(STDIN)));
    echo "El servicio es CAMA O SEMI?: \n";
    $tipoServicio=strtoupper(trim(fgets(STDIN)));
    $cantMaxPasajeros= cantidadMaxima($tipoServicio);
    $objViaje = new Viaje($codigo,$destino,$cantMaxPasajeros,$totales); 
        

    do {
        echo "Menú de opciones Sistema Viaje Feliz: \n";
		echo "   1)   Cargar Nuevo Pasajero \n";
        echo "   2)   Modificar Codigo Viaje \n";
		echo "   3)   Modificar Destino Viaje \n";
		echo "   4)   Modificar Datos Pasajeros \n";
        echo "   5)   Ver datos Viaje \n";
		echo "Elija una opción del menú: ";
		$opcion = trim(fgets(STDIN));
} while ($opcion < 1 || $opcion > 5);

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
        echo "Ingrese Codigo a Modificar: \n";
        $codigoModif = trim(fgets(STDIN));
        $objViaje -> setcodigo($codigoModif);

    }elseif($opcion==3){
        echo "Ingrese Destino a Modificar: \n";
        $destinoModif = trim(fgets(STDIN));
        $objViaje -> setdestino($destinoModif);
        
    }elseif($opcion==4){
        echo "Ingrese datos de Pasajero a Modificar: \n ";
        echo "Ingrese Nombre: \n";
            $nombre=strtoupper(trim(fgets(STDIN)));
        echo "Ingrese Apellido: \n";
            $apellido=strtoupper(trim(fgets(STDIN)));
        echo "Ingrese Documento: \n";
            $dni=strtoupper(trim(fgets(STDIN))); 
        $datosViejos = ["nombre" => $nombre, "apellido" => $apellido, "documento" => $dni];
        echo "Ingrese datos nuevos del Pasajero: \n ";
        echo "Ingrese Nombre: \n";
            $nombreNuevo=strtoupper(trim(fgets(STDIN)));
        echo "Ingrese Apellido: \n";
            $apellidoNuevo=strtoupper(trim(fgets(STDIN)));
        echo "Ingrese Documento: \n";
            $dniNuevo=strtoupper(trim(fgets(STDIN))); 
        $datosNuevos = ["nombre" => $nombreNuevo, "apellido" => $apellidoNuevo, "documento" => $dniNuevo];

        $objViaje -> pasajeroModificar($datosViejos,$datosNuevos);

    
    }elseif($opcion==5){
        echo $objViaje;
        echo "Pasajeros del Viaje: \n" .
        print_r($objViaje->gettotalPasajeros()); "\n";
    }


   



