<html>
    <head>
        <title>Ejercicio 1</title>
        <meta charset="utf-8"/>
    </head>
    <body>
        <h1>PROGRAMACION DE APLICACIONES WEB</h1>
        <h4>Mostrar en pantalla cual es el mayor de dos números</h4>
        <?php
            $n1=54;
            $n2=10;
            if($n1>$n2)
            {
                echo "El primer número (".$n1.") es mayor que el segundo (".$n2.")";
            }else if($n1==$n2)
            {
                echo "El primer número (".$n1.") es igual que el segundo (".$n2.")";
            }else
            {
                echo "El primer número (".$n1.") es menor que el segundo (".$n2.")";
            }
        ?>
    <p>NOMBRE DEL ALUMNO:</p>
    <a href="index.php">Regresar al menu</a>
    </body>
</html>