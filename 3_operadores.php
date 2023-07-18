<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8>
    <meta name="viewport" content="width=device-width, initial-scale
    <title>Operadores</title
</head>
<body>
    <h1>Operadores</h1>
    <?php
    //Operadores aritméticos

    $a = 5;
    $b = 3;
    $resultado = $a + $b;
     echo $resultado;  // muestra 8

    //Operadores de comparación
    $a = 5;
    $b = 3;
    $resultado = $a == $b;
    var_dump($resultado);  // muestra bool(false)

    //Operadores lógicos 

    $a = 5;
    $b = 3;
    $c = 7;
    $resultado = ($a < $b) && ($b < $c);
    var_dump($resultado);  // muestra bool(true)

    //Operadores de unión de cadenas

    $cadena1 = "Hola";
    $cadena2 = "mundo";
    $resultado = $cadena1 . " " . $cadena2;
    echo $resultado;  // muestra "Hola mundo"
    
    <h1>------------------------------------------------</h1>
    <h1>operadores aritmeticos</h1>
        <?php
    
        $num1 = 1;
        $num2 = 5;
    
        $suma = $num1 + $num2;
        $resta = $num1 - $num2;
        $multiplicacion = $num1 * $num2;
        $division = $num1 / $num2;
    
    
        echo "<p>Primer número: $num1</p>";
        echo "<p>Segundo número: $num2</p>";
        echo "<h2>Resultados:</h2>";
        echo "<p>Suma: $suma</p>";
        echo "<p>Resta: $resta</p>";
        echo "<p>Multiplicación: $multiplicacion</p>";
        echo "<p>División: $division</p>";
    
        ?>
    
    <h1>Operadores de Comparación</h1>
    
    <?php
    $num1 = 5;
    $num2 = 5;
    
    $igual = ($num1 == $num2);
    $distinto = ($num1 != $num2);
    $mayor = ($num1 > $num2);
    $menor = ($num1 < $num2);
    
    
        echo "<p>Primer número: $num1</p>";
        echo "<p>Segundo número: $num2</p>";
        echo "<h2>Resultados:</h2>";
        echo "<p>igual: " . ($igual ? 'verdadero' : 'falso') . "</p>";
        echo "<p>diferentes: " . ($distinto ? 'verdadero' : 'falso') . "</p>";
        echo "<p>mayor: " . ($mayor ? 'verdadero' : 'falso') . "</p>";
        echo "<p>menor: " . ($menor ? 'verdadero' : 'falso') . "</p>";
        ?>
    
    <h1>operadores logicos</h1>
    
    
    <h1>operadores de union de cadenas</h1>
    
    <?php
        $cadena_1 = "Hola";
        $cadena_2 = "mundo";
    
        $union = $cadena_1 . " " . $cadena_2;
    
        echo "<p>palabra 1: $cadena_1</p>";
        echo "<p>palabra 2: $cadena_2</p>";
        echo "<h2>Resultado de la unión:</h2>";
        echo "<p>union : $union</p>";
        ?>

    // para la union de cadenas se emplea el punto (.)
   $t = "Ejemplo";
   $w = 'ola';
   $x = "de";
   $y = "cadenas";
   $z = '';
   $resultado1 = $t;
   $resultado2 = $t.$z.$x.$z.$w.$z.$x.$z.$y;
   echo '<b><h1>';
   echo $resultado1;
   echo '<hr>';
   echo $resultado2;
   echo '</b></h1>';


 
    </body>
    </html>