<?php

class persona
{
    private $Documento_Pesona;
    private $Nombre_Persona;
    private $Apellido_Persona;
    private $contrasena;
    
   


    public function __GET($k){ return $this->$k; }
    public function __SET($k, $v){ return $this->$k = $v; }
}

?>
