<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $edad = 19;
        if ($edad>40){
            print "<p>Bienvenido a nuestra pagina, esperemos que no sea peligroso para tu salud</p>";
        } elseif ($edad>30) {
            print "<p>Sabemos que encontrara lo que lleva mucho tiempo buscando</p>";
        } elseif ($edad>18){
            print "<p>Estas en el momento de comprar nuestros productos</p>";
        } else {
            print "<p>Lo sentimos no puede tener acceso a esta pagina</p>";
        }
        print "<p>Tu edad es de $edad años</p>";
        ?>
</body>
</html>