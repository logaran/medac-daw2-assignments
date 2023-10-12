<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz de 36 números</title>
    <style>
        body {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        #matriz {
            width: 200px;
            height: 200px;
            background-color: aqua;
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            grid-template-rows: repeat(6, 1fr);
            font-size: 1.5em;
            text-align: center;
            vertical-align: middle;
        }

        span {
            box-shadow: 2px 1px 3px darkcyan;
        }
    </style>
</head>

<body>
    <!--
        Implementar un programa PHP que cree una matriz de 6x6, es decir, de 36 posiciones. Para rellenar los
huecos tienes que utilizar sentencias de tipo bucle, por ejemplo, puedes utilizar un foreach que recorre el
array central y dentro de cada una de estas posiciones utilizar otro que recorrerá los arrays individuales.
El contenido de cada posición será un número del 1 al 36, obteniendo una salida similar a la que sigue:
        01 02 03 04 05 06
        07 08 09 10 11 12
        13 14 15 16 17 18
        29 20 21 22 23 24
        25 26 27 28 29 30
        31 32 33 34 35 36
Diseña un programa completo utilizando PHP que imprima una matriz idéntica a la expuesta más arriba  
    -->

    <div id="matriz">
        <?php
        $matriz = array();
        $valor = 1;
        for ($fila = 0; $fila <= 5; $fila++) {
            for ($columna = 0; $columna <= 5; $columna++) {
                $matriz[$fila][$columna] = $valor;
                $valor++;
            }
        }

        foreach ($matriz as $fila) {
            foreach ($fila as $valor) {
                echo '<span>' . $valor . '</span>';
            }
        }
        ?>
    </div>

</body>

</html>