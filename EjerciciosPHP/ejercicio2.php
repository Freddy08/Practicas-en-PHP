<html>
    <head>
        <title>Ejercicio 1</title>
        <meta charset="utf-8"/>
    </head>
    <body>
        <h1>PROGRAMACION DE APLICACIONES WEB</h1>
        <h4>Mostrar en pantalla una tabla de 10 por 10 con los números del 1 al 100</h4>
        <?php
            echo "<table border=1>";
            $n=1;
            for($n1=1; $n1<=10; $n1++)
            {
                echo "<tr>";
                for($n2=1; $n2<=10; $n2++)
                {
                    echo "<td>", $n, "</td>";
                    $n=$n+1;
                }
                echo "</tr>";
            }
            echo "</table>";
        ?>
    <p>NOMBRE DEL ALUMNO:</p>
    <a href="index.php">Regresar al menu</a>
    </body>
</html>