<?php

    require_once("ClassMueble.php");

    class Mesa extends Mueble{

        public $strForma = "";
        protected $strTamaño;
        public $strStatus = "Activo";

        public function __construct(string $descripcion, float $precio, string $marca, string $color, string $material, string $tamaño) {
            parent::__construct($descripcion, $precio, $marca, $color, $material);

            $this->strTamaño = $tamaño;

        }
        public function setForma(string $forma){
            $this->strForma = $forma;
        }

        public function getInfoProducto(){

            $arrProducto = array('producto' => $this->strDescripcion,
                                'precio' => $this->fltPrecio,
                                'stock_minimo' => $this->intStockMinimo,
                                'estado' => $this->strStatus,
                                'color' => $this->strColor,
                                'Material' => $this->strMaterial,
                                'Tamaño' => $this->strTamaño,
                                'Forma' => $this->strForma,
                                );
            return $arrProducto;
        }
    }
?>