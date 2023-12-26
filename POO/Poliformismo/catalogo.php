<?php

    require_once("ClassMesa.php");

    $objCama = new Producto("Cama",10000);
    $arrInfoProducto = $objCama->getInfoProducto();

    print_r('<pre>');
    print_r($arrInfoProducto);
    print_r('</pre>');

    $objMueble = new Mueble("Cama",10000,"Philpman","Negro","Roble");
    $arrInfoMueble = $objMueble->getInfoProducto();

    print_r('<pre>');
    print_r($arrInfoMueble);
    print_r('</pre>');

    $objMesa = new Mesa("Cama",10000,"Philpman","Negro","Roble","Gigante");
    $objMesa->setForma("Redonda");
    $arrInfoMesa = $objMesa->getInfoProducto();

    print_r('<pre>');
    print_r($arrInfoMesa);
    print_r('</pre>');

?>