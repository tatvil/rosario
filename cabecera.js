var d = new Date();
var weekday = new Array(7);

weekday[0] = "DOMINGO";   //Domingo
weekday[1] = "LUNES";     //Lunes
weekday[2] = "MARTES";   //Martes
weekday[3] = "MIERCOLES";   //Miercoles
weekday[4] = "JUEVES";   //Jueves
weekday[5] = "VIERNES";   //Viernes
weekday[6] = "SABADO";     //Sabado

var n = weekday[d.getDay()];

var misterios = new Array(7);

misterios[0] = "GLORIOSOS";   //Domingo
misterios[1] = "GOZOSOS";     //Lunes
misterios[2] = "DOLOROSOS";   //Martes
misterios[3] = "GLORIOSOS";   //Miercoles
misterios[4] = "LUMINOSOS";   //Jueves
misterios[5] = "DOLOROSOS";   //Viernes
misterios[6] = "GOZOSOS";     //Sabado

document.write("<h1>SANTO ROSARIO</h1>");
document.write("<h2>"+n +" (MISTERIOS "+misterios[d.getDay()]+")</H2>");
