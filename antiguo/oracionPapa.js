var i=0;
var oracionPapa2021 =[
    {
        mes: 'Enero',
        titulo :'La fraternidad humana',
        texto: 'Para el mes de enero, en perfecta continuidad con el año en curso, la primera oración está dedicada al tema de educar para la fraternidad, para que todas las personas que sufren discriminación y persecución religiosa encuentren en las sociedades en las que viven el reconocimiento de sus derechos y la dignidad que proviene de ser hermanos y hermanas.'
    },
    {
        mes : 'Febrero',
        titulo :'Las mujeres religiosas y consagradas',
        texto: 'Un mes – febrero – dedicado a las mujeres religiosas y consagradas, para agradecer por su misión y valentía, para que sigan encontrando nuevas respuestas frente a los desafíos de nuestro tiempo'},
    {
        mes : 'Marzo',
        titulo :'Desafíos como los que plantea la bioética',
        texto: 'Desafíos como los que plantea la bioética, al que se confía el mes de marzo. En efecto, la oración del tercer mes de 2022 será para que los cristianos, ante los nuevos desafíos de la bioética, promuevan siempre la defensa de la vida a través de la oración y de la acción social.'
    },
    {
        mes : 'Abril',
        titulo :'Los sanitarios',
        texto: 'La pandemia es la protagonista de este mes. La intención de oración para el mes de abril es por el personal sanitario, que siempre han estado en primera línea en los últimos dos años, especialmente los que trabajan en los países más pobres, para que cuente con el apoyo de los gobiernos y las comunidades locales'
    },
    {
        mes : 'Mayo',
        titulo :'Los jóvenes y su fe',
        texto: 'Una mirada a los distintos componentes del núcleo familiar. En mayo, en el corazón del Papa, los jóvenes y su fe. Francisco nos pide que recemos al Señor para que cada uno crezca en la valentía de la fe, en la entrega al servicio, en la gratuidad del amor y en la santidad de la vida cotidiana. En particular para los ancianos, el Pontífice pide que su experiencia y sabiduría "ayuden a los jóvenes a mirar el futuro con esperanza y responsabilidad".'
    },
    {
        mes : 'Junio',
        titulo :'Las familias cristianas',
        texto: 'Una mirada a los distintos componentes del núcleo familiar. En junio las familias cristianas en su conjunto. Francisco nos pide que recemos al Señor para que cada uno crezca en la valentía de la fe, en la entrega al servicio, en la gratuidad del amor y en la santidad de la vida cotidiana. En particular para los ancianos, el Pontífice pide que su experiencia y sabiduría "ayuden a los jóvenes a mirar el futuro con esperanza y responsabilidad".'
    },
    {
        mes : 'Julio',
        titulo :'Los ancianos',
        texto: 'una mirada a los distintos componentes del núcleo familiar. en julio 2022 los ancianos. Francisco nos pide que recemos al Señor para que cada uno crezca en la valentía de la fe, en la entrega al servicio, en la gratuidad del amor y en la santidad de la vida cotidiana. En particular para los ancianos, el Pontífice pide que su experiencia y sabiduría "ayuden a los jóvenes a mirar el futuro con esperanza y responsabilidad".'
    },
    {
        mes : 'Agosto',
        titulo :'Pequeños y medianos empresarios',
        texto: ' El Papa Francisco reza por los pequeños y medianos empresarios, para que sigan sirviendo a sus comunidades a pesar de las graves dificultades económicas actuales.'
    },
    {
        mes : 'Septiembre',
        titulo :'Abolición de la pena de muerte',
        texto: 'En septiembre, la intención se centra en la abolición de la pena de muerte, un tema muy querido por el Pontífice que, una vez más, a través de la oración, pide su "abolición en la legislación de todos los países del mundo".'
    },
    {
        mes : 'Octubre',
        titulo :'Sinodalidad',
        texto: 'en octubre, la Iglesia es la protagonista de la oración del Papa: para que "fiel al Evangelio y valiente en su anuncio, sea un lugar de solidaridad, fraternidad y acogida, viviendo cada vez más la sinodalidad".'
    },
    {
        mes : 'Noviembre',
        titulo :'Niños que sufren violencia y abuso',
        texto: ' según las intenciones del Papa, a la oración por los niños que sufren diversas formas de violencia y abuso, para que encuentren el "más" de una familia y el espacio para la formación educativa;'
    },
    {
        mes : 'Diciembre',
        titulo :' Organizaciones de voluntariado y promoción humana',
        texto: 'En diciembre, el año se cerrará con la oración por las organizaciones de voluntariado y de promoción humana, para que las organizaciones de voluntariado y de promoción humana encuentren personas que estén deseosas de comprometerse con el bien común y buscar nuevas vías de colaboración a nivel internacional.'
    }    
    ];

var d = new Date();

document.write("<h4> "+ oracionPapa[d.getMonth()].mes+"</h4>");
document.write("<p> "+ oracionPapa[d.getMonth()].titulo+"</p>");
document.write("<blockquote>"+ oracionPapa[d.getMonth()].texto+"</blockquote>");