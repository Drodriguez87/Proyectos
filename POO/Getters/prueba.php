<?php

    require_once ("ClassPrueba.php");

    $objDato1 = new Prueba("Heavy Duty","Bolsa",26578);
    $objDato2 = new Prueba("PEBD Pelet","Paquete",58732);

    echo $objDato1->getDatos();
    echo "<br><br>";

    echo $objDato2->getDatos();
    echo "<br><br>";

?>