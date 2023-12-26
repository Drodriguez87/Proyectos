<?php

    require_once("ClassOperacion.php");

    $objRaiz = new Calcular();

    echo $objRaiz->raizcuadrada(9);
    echo "<br>";
    echo $objRaiz->potencia(2,4);

    echo "<br>";
    echo $objRaiz->op_basica(100,5,"-");

?>