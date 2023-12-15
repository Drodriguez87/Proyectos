<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
    <?php
    //Cadenas
        $cadena = "Hola mundo";
        $anios12 = "12";
        $nombre = 'James';
        $apellido = "Bond";
    //Enteras
        $edad = 12;
        $deuda =-150000;
    //Decimales
        $ingreso = 1000.50;
    //Boleanas
        $casado = false;


        print "El nombre de completo es: \"$nombre $apellido\"";
        echo " y soy un espia al servicio de su majestad <br><br>";

        print $edad + $anios12;
        print "<br><br>";
        print $edad += 5;
        print "<br><br>";
        print $edad -= 7;

    $df = 22000000;
    $guadalajara = 4000000;
    $monterrey = 14000000;

    $ciudad = "df";
    print "<p>La poblacion de la ciudad $ciudad es de ${$ciudad} de habitantes</p>";
        
    $ciudad = "guadalajara";
    print "<p>La poblacion de la ciudad $ciudad es de ${$ciudad} de habitantes</p>";

    $ciudad = "monterrey";
    print "<p>La poblacion de la ciudad $ciudad es de ${$ciudad} de habitantes</p>";

    // unset ($deuda);
    // print $deuda;

    //Creamos una constante
    define ("TASA", 13.55);
    print "Tu deuda en dolares es de ".($deuda*TASA);
    ?>
</body>
</html>