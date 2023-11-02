<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rosario</title>
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    <meta property="og:image" content="./logotipo-rosario.png">
</head>
<body>
<script src="cabecera.js"></script>

<?php   
    include '../funciones.php' ;

$diaSemana = date("w");

switch ($diaSemana) 
    {
        case 0:                         //Domingo
            $misterios="gloriosos";  
            break;
        case 1:                         // Lunes
            $misterios="gozosos";   
            break;
        case 2:                         //Martes
            $misterios="dolorosos";     
            break;
        case 3:                         //Miercoles
            $misterios="gloriosos";     
            break;
        case 4:                         //Jueves
            $misterios="luminosos";   
            break;
        case 5:                         //Viernes
            $misterios="dolorosos";
            break;
        case 6:                         //Sabado
            $misterios= "gozosos";     
            break;
    }

    switch ($misterios)
             {
                case "luminosos":
                    $primero=leerBibliaRetorno(46,3,16,17);     // El Bautismo en el Jordan
                    $segundo=leerBibliaRetorno(49,2,1,5);       // Las Bodas de Caná
                    $tercero=leerBibliaRetorno(47,1,15,15);     // El anuncio del Reino de Dios
                    $cuarto=leerBibliaRetorno(46,17,1,2);       // La Transfiguración
                    $quinto=leerBibliaRetorno(46,26,26,26);     // La institución de la Eucaristia
                    break;
                case "gloriosos":
                    $primero=leerBibliaRetorno(48,24,1,6);
                    $segundo=leerBibliaRetorno(47,16,19,19);
                    $tercero=leerBibliaRetorno(50,2,1,4);
                    $cuarto=leerBibliaRetorno(48,1,48,49);
                    $quinto=leerBibliaRetorno(72,12,1,1);
                    break;
                case "dolorosos":
                    $primero=leerBibliaRetorno(46,26,36,39);
                    $segundo=leerBibliaRetorno(46,27,26,26);
                    $tercero=leerBibliaRetorno(46,27,27,29);
                    $cuarto=leerBibliaRetorno(47,15,21,22);
                    $quinto=leerBibliaRetorno(48,23,33,46);
                    break;

                case "gozosos":
                    $primero=leerBibliaRetorno(48,1,26,27);
                    $segundo=leerBibliaRetorno(48,1,39,42);
                    $tercero=leerBibliaRetorno(48,2,1,7);
                    $cuarto=leerBibliaRetorno(48,2,21,24);
                    $quinto=leerBibliaRetorno(48,2,41,47);
                    break;
                }

echo("<H3>MISTERIOS ". strtoupper($misterios)."</H3>");

    echo('<hr>');
    for ($i=1;$i<=5;$i++) //Misterios
    {
        echo ('<hr><h4>'.$i.'º misterio</h4>');
        switch ($i):     
            case 1: 
                echo $primero;
                break;
            case 2: 
                echo $segundo;
                break;
            case 3: 
                echo $tercero;
                break;
            case 4:
                echo $cuarto;
                break;
            case 5:
                echo $quinto;
                break;
            endswitch;
    } //for Misterios
            ?>

<h3>Oraciones por las intenciones del Papa</h3>

<script src="oracionPapa.js"></script>

</body>
</html>
