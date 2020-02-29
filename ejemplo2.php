<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="ejemplo2.php" method="post">
        <label for="a"> valor de A: </label>
        <input type="text" id="n1" name="n1" placeholders="Inserta un dato" value=""/>
        <br>
        <label for="a"> valor de B: </label>
         <input type="number" id="n2" name="n2" placeholders="Inserta un dato" value=" "/>
         <input type="submit" value="Calcular"/>
        </form>
        <?php
        $n1 = $_POST['n1'];//Variable asignada a dato de entrada de teclado (formulario)
        $n2 = $_POST['n2'];
        if ($n1 > $n2){
            echo 'A mayor'; 
        }
        else if ($n2 > $n1){
            echo 'B mayor';
        }
        else {
            echo 'iguales';
        }
        ?>
    </body>
</html>
