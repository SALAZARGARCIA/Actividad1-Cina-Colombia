<?php

class boleta
{
    private $Numero_Boleta;
    private $Cliente_Documento_Cliente;
    private $Cartelera_Nombre_Pelicula;
    private $Sala_Numero_Sala;
    private $Letra_Asiento;
    private $Numero_Columna_Asiento;
   


    public function __GET($k){ return $this->$k; }
    public function __SET($k, $v){ return $this->$k = $v; }
}

?>
