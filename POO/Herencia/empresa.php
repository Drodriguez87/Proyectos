<?php

    require_once ("ClassEmpleado.php");
    require_once ("ClassCliente.php");

    $objEmpleado = new Empleado(1016005953,"David Rodriguez",36);
    $objEmpleado->setPuesto("Administrador");

    echo $objEmpleado->getDatosPersonales();
    echo "Puesto: ".$objEmpleado->getPuesto();

    $objCliente = new Cliente(5899641234,"Diana Murcia",24);
    $objCliente->setCredito(1000);

    echo $objCliente->getDatosPersonales();
    echo "Credito: ".$objCliente->getCredito();
?>