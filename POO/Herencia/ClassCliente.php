<?php

    require_once ("ClassPersona.php");
    class Cliente extends Persona{

        protected $intCredito;

        function __construct(int $cc, string $nombre, int $edad) {
            parent::__construct($cc,$nombre,$edad);
        }

        public function setCredito(string $credito){
            $this->intCredito = $credito;
        }

        public function getCredito():int{
            return $this->intCredito;
        }

    }//End Class Cliente
?>