<?php
require_once("librari/cars.php");

$id = $_GET["id"];

foreach ($cars as $nombre => $auto) {

    if ($nombre == $id) {
        /* echo '<h3>' . $nombre . ':' . '</h3>'; */
        $i = 0;
        foreach ($auto as $dato) {

            /* echo '<p>' . $dato . '</p>'; */
            if ($i == 0) {
                $nombreAuto = $dato;
            } else if ($i == 1) {
                $modeloAuto = $dato;
            } else if ($i == 2) {
                $kmAuto = $dato;
            } else if ($i == 3) {
                $fotoAuto = $dato;
            }
            else if ($i == 4) {
                $precioAuto = $dato;
            }
            else if ($i == 5) {
                $carroceriaAuto = $dato;
            }
            else if ($i == 6) {
                $localidadAuto = $dato;
            }
            $i++;
        }
    }
}
/* echo 'name: ' . $nombreAuto . ' año: ' . $modeloAuto . ' kms:  ' . $kmAuto . ' foto auto: ' . $fotoAuto; */
/* var_dump($cars); */
/*  echo $cars.modelo["Volkswagen Gol G8"];*/
/* echo "<p>Modelo del auto: " . $model . ', Precio: ' . $price . "</p>"; */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="main">
        <div id="imgSee">
            <?php

            echo '<img src='.$fotoAuto.' class="productSee">';
            

            ?>
        </div>
        <div id="presentSee">
            <?php

            echo '<h2 id="nameCar">' . $nombreAuto . '</h2>'.'<br>';
            echo 
                '<div class="sellSee">'.
                    '<div class="dataMain">'.
                        '<h3>Precio: </h3>'.'<h3 class="price">'.$precioAuto.'</h3>'.'<br>'.
                        '<h4>Año de fabricacion:'.'<br>' . $modeloAuto . '</h4>'.
                        '<h4>Kilometros:'.'<br>' . $kmAuto . '</h4>'.
                    '</div>'.
                    '<div class="subDataMain">'.
                        '<h4>Tipo de carroceria:'.'<br>' . $carroceriaAuto . '</h4>'.
                        '<h4>Ubicacion del auto:'.'<br>' . $localidadAuto . '</h4>'.
                    '</div>'.
                '</div>'.
                '<a href="#" class="buy">Comprar</a>';
            /* echo '<h3>Precio: </h3>'.'<h3 class="price">'.$precioAuto.'</h3>'.'<br>';
            echo '<h4>' . $modeloAuto . '</h4>';
            echo '<h4>' . $kmAuto . '</h4>'; */

            ?>
        </div>
    </div>
</body>

</html>