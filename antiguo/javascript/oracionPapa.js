var i=0;
var oracionPapa2021 =[
    {
        mes: 'ENERO',
        titulo :'Intención para la evangelización – <strong>La fraternidad humana</strong>',
        texto: 'Que el Señor nos dé la gracia de vivir en plena fraternidad con hermanos y hermanas de otras religiones, rezando unos por otros, abriéndonos a todos.'
    },
    {
        mes : 'FEBRERO',
        titulo :'Intención universal ‐ <strong>Violencia contra la mujer</strong>',
        texto: 'Recemos por las mujeres que son víctimas de la violencia, para que sean protegidas por la sociedad y para que su sufrimiento sea considerado y escuchado.'},
    {
        mes : 'MARZO',
        titulo :'Intención para la evangelización ‐ Sacramento de la reconciliación',
        texto: 'Recemos para que vivamos el sacramento de la reconciliación con renovada profundidad, para saborear la infinita misericordia de Dios.'
    },
    {
        mes : 'ABRIL',
        titulo :'Intención universal ‐ Derechos fundamentales',
        texto: 'Recemos por aquellos que arriesgan sus vidas luchando por los derechos fundamentales en dictaduras, en regímenes autoritarios e incluso en democracias en crisis.'
    },
    {
        mes : 'MAYO',
        titulo :'Intención universal ‐ El mundo de las finanzas',
        texto: 'Recemos para que los responsables del mundo financiero colaboren con los gobiernos, a fin de regular los mercados financieros para proteger a los ciudadanos de su peligro.'
    },
    {
        mes : 'JUNIO',
        titulo :'Intención para la evangelización ‐ <strong>La belleza del matrimonio</strong>',
        texto: 'Recemos por los jóvenes que se preparan para el matrimonio con el apoyo de una comunidad cristiana: para que crezcan en el amor, con generosidad, fidelidad y paciencia.'
    },
    {
        mes : 'JULIO',
        titulo :'Intención para la universal ‐ <strong>L La amistad social</strong>',
        texto: 'Recemos para que, en situaciones sociales, económicas y políticas conflictivas, seamos arquitectos de diálogo y de amistad valientes y apasionados.'
    },
    {
        mes : 'AGOSTO',
        titulo :'Intención para la evangelización ‐ <strong>La Iglesia</strong>',
        texto: 'Recemos por la Iglesia, para que reciba del Espíritu Santo la gracia y la fuerza para reformarse a la luz del Evangelio.'
    },
    {
        mes : 'SEPTIEMBRE',
        titulo :'Intención universal  ‐ <strong>Un estilo de vida ecosostenible</strong>',
        texto: 'Recemos para que todos tomemos decisiones valientes a favor de un estilo de vida sobrio y ecosostenible, alegrándonos por los jóvenes que están comprometidos con él.'
    },
    {
        mes : 'OCTUBRE',
        titulo :'Intención para la evangelización ‐ <strong>Discípulos misioneros</strong>',
        texto: 'Recemos para que cada bautizado participe en la evangelización y esté disponible para la misión, a través de un testimonio de vida que tenga el sabor del Evangelio.'
    },
    {
        mes : 'NOVIEMBRE',
        titulo :'Intención para la universal ‐ <strong>Las personas que sufren de depresión</strong>',
        texto: 'Recemos para que las personas, que sufren de depresión o agotamiento extremo, reciban apoyo de todos y una luz que les abra a la vida.'
    },
    {
        mes : 'DICIEMBRE',
        titulo :'Intención para la evangelización ‐ <strong>Los catequistas</strong>',
        texto: 'Recemos por los catequistas, llamados a proclamar la Palabra de Dios: para que sean testigos de ella con valentía, creatividad y con la fuerza del Espíritu Santo.'
    }    
    ];

var d = new Date();

document.write("<h4> "+ oracionPapa2021[d.getMonth()].mes+"</h4>");
document.write("<p> "+ oracionPapa2021[d.getMonth()].titulo+"</p>");
document.write("<blockquote>"+ oracionPapa2021[d.getMonth()].texto+"</blockquote>");