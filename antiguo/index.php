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
<p><a href="index-solo-misterios.php">Solo misterios</a></p>
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

    switch ($misterios)
             {
                case "luminosos":
                    echo (tituloLuminosos($numeroMisterio).'</h4>');
                    echo (textoLuminosos($numeroMisterio));
                    break;
                case "gloriosos":
                    echo (tituloGloriosos($numeroMisterio).'</h4>');
                    echo (textoGloriosos($numeroMisterio));
                        break;
                case "dolorosos":
                    $titulosMisterios=array('La oracion en el Huerto','La Flagelación','La coronación de espinas','Jesús con la cruz a cuestas hasta el calvario','La Crucifixión');
                    $textoMisterios=array(
                        'La oración en el Huerto, agonía de Jesús en Getsemaní (Agonia in Hortu) <blockquote>«Entonces Jesús fue con ellos a un huerto, llamado Getsemaní, y dijo a sus discípulos: "Sentaos aquí mientras voy a orar". Y tomando consigo a Pedro y a los dos hijos de Zebedeo, comenzó a sentir tristeza y angustia. Entonces les dijo: "Mi alma está triste hasta el punto de morir; quedaos aquí y velad conmigo". Y adelantándose un poco, cayó rostro en tierra, y suplicaba así: "Padre mío, si es posible, que pase de mí esta copa, pero no sea como yo quiero, sino como quieras tú"» (Mateo 26, 36-39).</blockquote><p>«Este combate y esta victoria sólo son posibles con la oración. Por medio de su oración, Jesús es vencedor del Tentador, desde el principio y en el último combate de su agonía»',

                        'La flagelación de Jesús atado a la columna (Flagellatio) </p><blockquote>«Pilato entonces tomó a Jesús y mandó azotarle. Los soldados trenzaron una corona de espinas, se la pusieron en la cabeza y le vistieron un manto de púrpura; y, acercándose a él, le decían: "Salve, Rey de los judíos". Y le daban bofetadas» (Juan 19,1-3).</blockquote><p>«Los padecimientos de Jesús han tomado una forma histórica concreta por el hecho de haber sido "reprobado por los ancianos, los sumos sacerdotes y los escribas" (Marcos 8, 31), que lo "entregaron a los gentiles, para burlarse de él, azotarle y crucificarle" (Mateo, 20, 19)» (CIC, 572).',

                        'La coronación de espinas (Coronatio Spinis)</p><blockquote>«Entonces los soldados del procurador llevaron consigo a Jesús al pretorio y reunieron alrededor de él a toda la cohorte. Lo desnudaron y le echaron encima un manto púrpura y, trenzando una corona de espinas, se la pusieron sobre la cabeza, y en su mano derecha una caña, y doblando la rodilla delante de él, le hacían burla diciendo: "Salve, Rey de los judíos"». (Mateo 27, 27-29)</blockquote> <p>«El amor hasta el extremo es el que confiere su valor de redención y de reparación, de expiación y de satisfacción al sacrificio de Cristo. Nos ha conocido y amado a todos en la ofrenda de su vida» (CIC, 616).',
                        
                        '<p>Jesús con la cruz a cuestas camino del Calvario (Baiulatio Crucis) </p><blockquote>«Y obligaron a uno que pasaba, a Simón de Cirene, que volvía del campo, el padre de Alejandro y de Rufo, a que llevara su cruz. Lo condujeron al lugar del Gólgota, que quiere decir de la "Calavera"» (Marcos 15, 21-22).</blockquote>',
                        
                        '<p>La crucifixión y muerte de Jesús </p><blockquote>«Llegados al lugar llamado "el Calvario", lo crucificaron allí a él y a los dos malhechores, uno a la derecha y otro a la izquierda. Jesús decía: "Padre, perdónales, porque no saben lo que hacen" El velo del Santuario se rasgó por medio y Jesús, dando un fuerte grito dijo: "Padre, en tus manos pongo mi espíritu" y, dicho esto, expiró» (Lucas 23, 33-46).</blockquote>');
                    break;

                case "gozosos":
                    $titulosMisterios=array('La anunciación', 'La Visita','El Nacimiento del hijo de Dios','La presentación en el Templo','El niño Jesus perdido y hallado en el templo');
                    $textoMisterios=array(
                        
                    );
                    break;
                    }

echo("<H3>MISTERIOS ". strtoupper($misterios)."</H3>");

    echo('<hr>');
    foreach ($titulosMisterios as $i => $titulo) 
    {
        $numMisterio=$i+1;
        echo ('<hr><h4>'.$numMisterio.'º misterio: '.$titulo.'</h4>');
        echo ('<p>'.$textoMisterios[$i].'</p>');
        rezar("padreNuestro");
        rezar("aveMaria");
        echo ("<p>x10</p>");
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
