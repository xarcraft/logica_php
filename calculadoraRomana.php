<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Romana</title>
    <style>
        :root {
            color-scheme: ligth dark;
        }

        body {
            display: grid;
            place-content: center;
        }

        .instruccion {
            text-align: center;
            text-justify: auto;
        }

        .query {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Calculadora Romana</h1>
    <h3>El siguiente proyecto tiene como finalidad convertir un numero entero en su equivalente de numero romano</h3>
    <div class="instruccion">
        <h5>Modo de uso:</h5>
        <p>- primero ingrese un numero entero menor o igual a 3999</p>
        <p>- luego presione el boton convertir para hacer la debida conversión</p>
    </div>
    <form name="form" method="post" class="query">
        <input type="number" name="consulta" id="consulta">
        <input type="submit" name="enviar" value="Convertir">
    </form>
    <?php
    if (isset($_POST['enviar'])) {
        $resultado = [];
        $consulta = $_POST['consulta'];
        $data = $consulta;

        while ($consulta > 0) {
            if ($consulta >= 4000) {
                echo "lo siento este software solo puede calcular los numeros hasta el 3999";
                $consulta = 0;
            }
            if ($consulta >= 1000) {
                $resultado[] = 'M';
                $consulta -= 1000;
            } else if ($consulta >= 900) {
                $resultado[] = 'CM';
                $consulta -= 900;
            } else if ($consulta >= 500) {
                $resultado[] = 'D';
                $consulta -= 500;
            } else if ($consulta >= 400) {
                $resultado[] = 'CD';
                $consulta -= 400;
            } else if ($consulta >= 100) {
                $resultado[] = 'C';
                $consulta -= 100;
            } else if ($consulta >= 90) {
                $resultado[] = 'XC';
                $consulta -= 90;
            } else if ($consulta >= 50) {
                $resultado[] = 'L';
                $consulta -= 50;
            } else if ($consulta >= 40) {
                $resultado[] = 'XL';
                $consulta -= 40;
            } else if ($consulta >= 10) {
                $resultado[] = 'X';
                $consulta -= 10;
            } else if ($consulta === 9) {
                $resultado[] = 'IX';
                $consulta -= 9;
            } else if ($consulta >= 5) {
                $resultado[] = 'V';
                $consulta -= 5;
            } else if ($consulta === 4) {
                $resultado[] = 'IV';
                $consulta -= 4;
            } else if ($consulta >= 1) {
                $resultado[] = 'I';
                $consulta -= 1;
            }
        }
        if (count($resultado) >= 1) {
            echo "El numero $data equivale al numero romano ";
            foreach ($resultado as $variable) {
                echo "$variable";
            }
        }
    }
    ?>

    <br><br>
    <strong>Nota: la calculadora solo representa los numeros hasta el 3999 debido a que no existe un caracter similar al 5000 romano que es la letra "V" con un guion en la parte superior.</strong>
</body>

</html>