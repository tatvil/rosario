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
<h3>CRUZ</h3>

<?php   
    include 'misterios.php' ;
    include '../rezos.php' ;  
?>

<p>+ En el nombre del Padre, del Hijo y del Espíritu Santo AMEN</p>


<p>- Dios mío ven en mi auxilio</p>
<p>- Señor, date prisa en socorrerme</p>

<?php
rezar("credo");
rezar("padreNuestro");
rezar("aveMaria");

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

echo("<H3>MISTERIOS ". strtoupper($misterios)."</H3>");

    echo('<hr>');
    for($i = 1; $i <= 5; $i++) 
    {
        echo ('<hr><h4>'.$i.'º misterio: ');
        misterios($misterios,$i);
        echo('<hr>');
        rezar("padreNuestro");
        rezar("aveMaria");
        echo ("<p>x10</p>");
        echo('<hr>');
        rezar("gloria");
        rezar("invocacion");
        echo (' <p>OH Jesús mío, perdónanos, libranos del fuego del infierno, lleva al Cielo a todas las almas, especialmente las más necesitadas.</p>');
    };

    echo ("<h3>CENTRAL</h3>");
    rezar("gloria");
    rezar("invocacion");
?>

<p>OH Jesús mío, perdónanos, libranos del fuego del infierno, lleva al Cielo a todas las almas, especialmente las más necesitadas.</p>

<?php rezar("laSalve"); ?>


<h3>Oración</h3>
<p>Te rogamos nos concedas, Señor Dios nuestro, gozar de continua salud de alma y cuerpo, por la gloriosa intercesión de la bienaventurada siempre Virgen María, vernos libres de las tristezas de la vida presente y disfrutar de las alegrías eternas. Por Cristo nuestro Señor.</p>
<p>AMEN</p>


<h3>Oraciones por las intenciones del Papa</h3>

<script src="oracionPapa.js"></script>


<?php
    rezar("padreNuestro");
    rezar("aveMaria");
    rezar("gloria");
?>
<p>+ En el nombre del Padre, del Hijo y del Espíritu Santo </p><p>AMEN</p>

<h2>FIN</h2>

</body>
</html>
