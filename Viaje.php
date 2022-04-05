<?php   
class Viaje{
    //Registra informacion de los viajes de la empresa "Viaje Feliz"
private $codigo;

private $destino;

private $maxPasajeros;

private $totalPasajeros;


public function __construct($codigo, $destino,$maxPasajeros,$total){
    $this->codigo = $codigo;
    $this->destino = $destino;
    $this->maxPasajeros = $maxPasajeros;
    $this->totalPasajeros = $total;
}

public function getcodigo(){
    return $this->codigo;  
}

public function getdestino(){
    return $this->destino;
}

public function getmaxPasajeros(){
    return $this->maxPasajeros;
}

public function gettotalPasajeros(){
    return $this->totalPasajeros;
}


public function setcodigo($codigo){
    $this->codigo=$codigo;
}

public function setdestino($destino){
    $this->destino=$destino;
}

public function setmaxPasajeros($maxPasajeros){
    $this->maxPasajeros=$maxPasajeros;
}

public function setTotalPasajeros($totalPasajeros){
    $this->totalPasajeros=$totalPasajeros;
}


    /**
 * Crea nuevo pasajero en array asociativo.
 * @param string $nombre
 * @param string $apellido
 * @param int $documento
 * @return array
 */
function nuevoPasajero($nombre,$apellido,$documento){
    $nuevoPasajero = ["nombre" => $nombre, "apellido" => $apellido, "documento" => $documento];
    return $nuevoPasajero;

}    

/**
* Agrega pasajero al total de pasajeros.
* @param array $pasajeroAgregado
*/

function sumarPasajero($pasajeroAgregado){
 $coleccion = $this -> gettotalPasajeros();
 $coleccion[count($coleccion)] = $pasajeroAgregado;
 $this -> setTotalPasajeros($coleccion);
}

//Convierte el objeto en una String.
public function __toString(){
    return "Código de viaje: " . $this->getcodigo() . "\n" . 
            "Destino de viaje: " . $this->getdestino() . "\n" . 
            "Cantidad máxima de pasajeros: " . $this->getmaxPasajeros() . "\n\n";
            
            
        }















}