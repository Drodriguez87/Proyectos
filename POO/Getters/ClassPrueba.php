<?php

    class Prueba{
        
        public $intOrdenProduccion;
        public $strReferencia;
        public $strEmpaque;
        static $intConsecutivo = 0;

        function __construct(string $referencia, string $empaque, int $ordenProduccion) {
            $this->intOrdenProduccion = $ordenProduccion;
            $this->strReferencia = $referencia;
            $this->strEmpaque = $empaque;
            self::$intConsecutivo++;
            
        }

        public function getDatos(){
            echo "Datos del Inventario<br>";
            echo "OP: ".$this->intOrdenProduccion."<br>";
            echo "Referencia: ".$this->strReferencia."<br>";
            echo "Empaque ".$this->strEmpaque."<br>";
            echo "Consecutivo: ".self::$intConsecutivo."<br>";
        }
    }

?>