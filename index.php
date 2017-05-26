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
        <style>
    .centrado{
    position: relative;
    top: 200px;
    left: 580px;
    }
    
    #cuadro{
    border: 4px solid powderblue;
    font-size: 20px;
    height: 50px;
    width: 50px;
       }
    #boton{
    border: 3px solid mediumorchid;
    font-family:freestyle script;
    font-size: 20px;
    }
        </style>
    
        <form>
            <input type="text" id="cuadro" class="centrado" > <br>
            <input type="button" value="JUGAR" class="centrado" id="boton">
                
        
        </form>
        
        <?php
        
              
        include_once 'Tablero.php';        
        $miTablero=new Tablero();
        
        echo $miTablero->mostrarFichas();echo "<br>";
        echo $miTablero->inicializarFichas();
        echo $miTablero->mostrarFichas();
        
        ?>
    </body>
</html>
