<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PW1: Ejemplo 1</title>
    </head>
    <body>
        <form action="ejemplo1.php" method="post">
         <input type="text" id="n1" name="n1" placeholders="Inserta un dato"/>
         <input type="number" id="n2" name="n2" placeholders="Inserta un dato"/>
         <input type="submit" value="Calcular"/>
        </form>
        <?php
        $num1 = $_POST['n1'];//Variable asignada a dato de entrada de teclado (formulario)
        $num2 = $_POST['n2'];
        $sum = $num1 + $num2;
        echo 'La suma es:' . $sum; //Imprimir suma 
        ?>
    </body>
</html>
