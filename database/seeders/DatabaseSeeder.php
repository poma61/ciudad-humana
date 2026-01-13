<?php

namespace Database\Seeders;

use App\Models\Candidato;
// Quitar para que funcione los metodos adicionales del modelo  por ejemplo: uuid, slug, que se generan en el modelo
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    // use WithoutModelEvents;
    public function run(): void
    {

        $candidatos = [
            [
                'n' => 1,
                'genero' => 'Femenino',
                'ca' => 'Concejal Titular',
                'name' => 'Miryam Aguilar Rodríguez',
                'summary' => 'Miryam Virginia Aguilar Rodríguez, abogada con maestría en Derecho Constitucional y posgrados en Criminología y Medicina Legal, ha sido juez, secretaria de juzgados y docente universitaria. Experta en derecho laboral y familiar, ahora postula como concejal de La Paz, comprometida con legislar y fiscalizar en beneficio del progreso y los ciudadanos.',
                'bio' => 'Miryam Virginia Aguilar Rodríguez, Abogada de profesión, diplomada en Derecho Civil, Derecho Procesal, Educación Superior y con Posgrados en Criminología Derecho Penal y Medicina Legal, además de tener una maestría en Derecho Constitucional y Derecho Procesal Constitucional.
                    Autora de diferentes artículos especializados en materia de Derecho y autora del texto Manual de Acciones de defensa, mismo que está escrito en castellano y aymará.
                    Respecto a su carrera profesional, Aguilar ha sido Secretaria del Juzgado Primero de Trabajo y Seguridad Social, Secretaria de Juzgado Sexto de Partido de Familia, Juez de Instrucción de la Provincia de Pucarani, Juez de Trabajo y Seguridad Social de El Alto, Juez Sexta de Trabajo y Seguridad Social de La Paz, y Vocal de Salas Ordinarias y Constitucionales.
                    Docente universitaria de Derecho Constitucional y Código de Procedimiento Penal, entre otras.
                    En el sector público fue Asesora Legal de la Prefectura del Departamento de La Paz y Directora Jurídica del Servicio Nacional de Telecomunicaciones Rurales (SENATER).
                    Hoy Miryam Aguilar postula como Concejal por el Municipio de La Paz, con la firme convicción de realizar un trabajo legislativo y de fiscalización a favor del progreso y resguardo de los intereses dela paceñidad.
                    Miryam es una guerrera de vida por su lucha contra el cáncer de mama.
                ',
            ],
            [
                'n' => 1,
                'genero' => 'Masculino',
                'ca' => 'Concejal Suplente',
                'name' => 'Jaime Tiñini Callisaya',
                'summary' => 'Jaime R. Tiñini Callisaya, economista e ingeniero civil, cuenta con amplia experiencia en la administración pública municipal de La Paz, especializado en gestión y prevención de riesgos. Ha liderado proyectos de cuencas, desastres y riesgos urbanos, destacando por su planificación, liderazgo técnico y manejo de herramientas como AutoCAD, SAP, HEC-HMS y Excel.',
                'bio' => 'Jaime R. Tiñini Callisaya nació en la ciudad de La Paz, Bolivia. Es economista e ingeniero civil, con una destacada trayectoria en la administración pública municipal, donde ha dedicado más de 25 años al servicio de la ciudad. A lo largo de su carrera se ha especializado en la gestión integral del riesgo, la prevención de desastres y el manejo de cuencas, desempeñando funciones técnicas y de liderazgo en diferentes instancias del Gobierno Municipal de La Paz.
                        Fue Jefe de Unidad y Director de Prevención de Riesgos, liderando proyectos estratégicos orientados a la seguridad urbana, la reducción de vulnerabilidades y el desarrollo sostenible. Complementó su formación con múltiples cursos y seminarios en construcción, medio ambiente, hidrología, evaluación de proyectos y gestión de emergencias, además de dominar herramientas técnicas especializadas.
                        Su perfil se caracteriza por la planificación, el liderazgo técnico y un firme compromiso con la protección de la vida y el desarrollo responsable de la ciudad de La Paz.
                ',
            ],
            [
                'n' => 2,
                'genero' => 'Masculino',
                'ca' => 'Concejal Titular',
                'name' => 'Juan Carlos Machicao',
                'summary' => 'Juan Carlos Machicao Castillo, abogado de 34 años y vecino de Villa Copacabana, es líder vecinal en San Antonio. Busca igualdad de oportunidades para jóvenes y familias. Como concejal, impulsará emprendedores, abrirá centros de capacitación en los barrios y fiscalizará la alcaldía para un trabajo eficiente, transparente y digital.',
                'bio' => 'Juan Carlos Machicao Castillo es abogado paceño de 34 años, vecino de Villa Copacabana y representante genuino de la ladera, con una vida marcada por el esfuerzo familiar y el compromiso con su barrio. Nacido en la zona San Isidro del macrodistrito San Antonio, vivió también en Villa Armonía y hoy reside junto a su familia en el distrito 14, lo que le ha permitido conocer de primera mano la realidad de distintos sectores de la ciudad.
                        Como líder vecinal en el macrodistrito San Antonio, ha trabajado activamente en acciones comunitarias, acompañando a vecinos y vecinas en la gestión de trámites y proyectos, y poniendo su formación jurídica al servicio de quienes más lo necesitan. Su experiencia le ha permitido comprender cómo las leyes y normativas municipales pueden convertirse en herramientas de desarrollo cuando se aplican con voluntad y transparencia.
                        Juan Carlos está convencido de que La Paz no puede resignarse a sobrevivir, sino que debe volver a ser una ciudad de oportunidades. Aspira a ser concejal para llevar la voz de los barrios al Concejo Municipal, impulsar el apoyo a emprendedores, promover centros de capacitación en las zonas periféricas y fiscalizar una gestión municipal ágil, digital y eficiente, orientada a mejorar la economía y la calidad de vida de todas las familias paceñas.
                    ',
            ],
            [
                'n' => 2,
                'genero' => 'Femenino',
                'ca' => 'Concejal Suplente',
                'name' => 'Valeria Villalba Pacheco',
                'summary' => 'Valeria Villalba Pacheco es psicóloga clínica y gestora social, defensora de la inclusión y los derechos humanos. Activista por los derechos de las personas con discapacidad, combina experiencia pública y privada con trabajo terapéutico y social para construir una ciudad más justa, accesible y humana.',
                'bio' => 'Psicóloga | Gestora Social | Defensora de la Inclusión y los Derechos Humanos
                    Valeria Villalba Pacheco, psicóloga clínica, gestora social, cultural y mujer con discapacidad física, comprometida con la construcción de una ciudad más justa, inclusivo, accessible y humana.
                    Es Licenciada en Psicología por la Universidad Privada del Valle, cuenta con una Maestría en Psicología Clínica con mención en Psicoterapia y Psicoanálisis, formación en Recursos Humanos, estudios en Cine y Teatro y una sólida base en arte, comunicación y educación. Posee dominio avanzado del idioma francés (DALF C1) y experiencia internacional en Francia como asistente de lengua y promotora cultural, representando la identidad y diversidad boliviana.
                    Ha desarrollado su labor profesional en instituciones públicas y privadas estratégicas como el Ministerio de Justicia, ADEMAF, la Universidad Mayor de San Andrés y empresas de alcance nacional, desempeñando funciones técnicas, administrativas, educativas y de gestión humana. En el ámbito público participó en procesos de investigación social, prevención de violencia, trata y tráfico de personas, fortalecimiento institucional y formulación de programas sociales, especialmente en contextos vulnerables y zonas fronterizas.
                    Su experiencia como conferencista en discapacidad e inclusión, junto a su trabajo constante con niñas, niños, jóvenes, mujeres y personas con discapacidad, le ha permitido construir una mirada integral sobre las problemáticas sociales, educativas, de salud mental y derechos humanos que atraviesan a la población paceña.
                    Actualmente, ejerce como psicoterapeuta independiente, brindando atención clínica y acompañamiento emocional con un enfoque humano, ético y comprometido con el bienestar colectivo a grupos vulnerables. En su perfil se cuenta con una formación académica solida, experiencia en gestión pública y privada y tambien resalta su participacion como activista por los derechos de las personas con discacidad en La Paz,  como vicepresidenta de la Asociacion de Personas con Discapacidad Fisica “Lideres en Rueda” La Paz, le permiten tener la sensibilidad, empatica y capacidad de diálogo con grupos vulnerables.
                ',
            ],
            [
                'n' => 3,
                'genero' => 'Femenino',
                'ca' => 'Concejal Titular',
                'name' => 'Ángela Calabi Nowotny',
                'summary' => 'Ángela Victoria Calabi Nowotny es arquitecta y especialista en Gestión Pública Municipal, con más de 20 años de experiencia en catastro, ordenamiento territorial y administración pública. Ha liderado proyectos municipales y estatales, impartido docencia universitaria y capacitaciones, destacándose por su compromiso con la transparencia, planificación urbana y eficiencia en la gestión pública.',
                'bio' => 'Angela Victoria Calabi Nowotny, nacida el 18 de enero de 1971, es arquitecta y especialista en Gestión Pública Municipal, Catastro y Ordenamiento Territorial. Con más de 20 años de experiencia en la administración pública, ha desarrollado su carrera en cargos de alta responsabilidad tanto en el Gobierno Autónomo Municipal de La Paz como en el ámbito estatal, combinando gestión técnica, normativa y planificación territorial.
                    Durante casi una década, se desempeñó como Jefa de la Unidad de Catastro del Gobierno Municipal de La Paz, liderando la supervisión de registros catastrales, la coordinación interinstitucional y la gestión de información territorial estratégica. Su experiencia se extiende a la regularización jurídica de bienes inmuebles en el Ministerio de Defensa y al fortalecimiento institucional de municipios mediante programas de cooperación internacional, como el Programa de Mejora de la Gestión Municipal apoyado por el BID.
                    Ángela también ha dedicado parte de su trayectoria a la docencia universitaria y capacitación profesional, impartiendo conocimientos sobre catastro urbano y ordenamiento territorial en universidades como la UMSA y la Universidad Privada Franz Tamayo, así como en congresos, seminarios y programas de formación para municipios y colegios profesionales.
                    Su carrera se caracteriza por un profundo compromiso con la transparencia, la responsabilidad pública y la eficiencia en la gestión territorial, combinando conocimientos técnicos con visión estratégica para la planificación urbana y la administración de bienes públicos. Ángela Calabi representa un perfil profesional orientado a la legislación municipal, fiscalización de la gestión, planificación territorial y fortalecimiento institucional, pilares fundamentales para ejercer el cargo de Concejala Municipal de La Paz.
                ',
            ],

            [
                'n' => 3,
                'genero' => 'Masculino',
                'ca' => 'Concejal Suplente',
                'name' => 'Reynaldo Vargas Mendoza',
                'summary' => 'Luis Reynaldo Vargas Mendoza, periodista con más de 35 años de experiencia en radio y televisión en La Paz, ha trabajado como reportero, locutor, jefe de prensa y productor-conductor. Reconocido por su trayectoria y compromiso con la información transparente, promueve la participación vecinal y el fortalecimiento de la comunicación comunitaria.',
                'bio' => 'Luis Reynaldo Vargas Mendoza es periodista paceño con más de 35 años de trayectoria en medios de comunicación radiales y televisivos del país. A lo largo de su carrera se desempeñó como reportero, locutor, jefe de prensa y productor–conductor, destacando especialmente por la creación y conducción del programa “Mi Ciudad”, difundido en diversas radios y canales de televisión de La Paz.
                    Trabajó en medios como Radio Illimani “La Voz de Bolivia”, Red Bolivisión, Televisión Boliviana Canal 7, Gigavisión, Católica Televisión, La Paz TV, Radio QHANA y AMITEL TV, entre otros. Su labor periodística ha estado marcada por el compromiso con la información responsable, la comunicación comunitaria y el fortalecimiento de la participación vecinal.
                    Por su aporte al periodismo y al desarrollo social, ha recibido numerosos reconocimientos de instituciones públicas, juntas vecinales, organizaciones sociales y la Asamblea Legislativa Plurinacional. Su trayectoria lo consolida como un referente de la comunicación comprometida con la ciudadanía paceña.
                ',
            ],
            [
                'n' => 4,
                'genero' => 'Masculino',
                'ca' => 'Concejal Titular',
                'name' => 'Iván Solis Daza',
                'summary' => 'Iván Danny Solis Daza, de 54 años, transportista y administrador de empresas, con formación en contabilidad, periodismo deportivo y bachiller en humanidades. Exsecretario general del sindicato Villa Victoria (2019-2022). Candidato a concejal 2026, busca mejorar la ciudad, fiscalizar obras, coordinar con juntas vecinales y combatir la corrupción para un desarrollo sostenible.',
                'bio' => 'Iván Danny Solis Daza es transportista y administrador de empresas, paceño de 54 años, vecino de la Ciudadela Ferroviaria del macrodistrito Maximiliano Paredes. Cuenta con formación en Humanidades, contabilidad, periodismo deportivo y administración de empresas, además de una amplia trayectoria sindical que inició en 1998 en el sindicato de Villa Victoria. Entre 2005 y 2015 desarrolló una activa carrera sindical, llegando a desempeñarse como Secretario General durante dos gestiones consecutivas (2019–2022).
                    Su experiencia en el sector transporte y su contacto permanente con la realidad urbana le han permitido conocer de cerca los problemas de congestión vehicular, falta de planificación y corrupción que afectan a la ciudad. Iván Danny aspira a ser concejal para contribuir a la construcción de una ciudad con calidad de vida, desarrollo y conectividad, trabajando de manera coordinada con juntas vecinales y subalcaldías. Su compromiso es fiscalizar las obras municipales con responsabilidad, impulsar proyectos estratégicos y recuperar para La Paz el liderazgo que merece como ciudad metropolitana.
                ',
            ],
            [
                'n' => 4,
                'genero' => 'Femenino',
                'ca' => 'Concejal Suplente',
                'name' => 'Vania Mickaela Gonzales Reynaga',
                'summary' => 'Vania Mickaela Gonzales Reynaga, ciudadana paceña, posee formación técnica en informática, contabilidad y gestión administrativa. Destacada por su compromiso social, ha liderado campañas solidarias y actividades comunitarias. Propietaria del restaurante “La Familia” y miembro activo de la Asociación Municipal de Vóley y la Unión de Juventudes Paceñas, impulsa el liderazgo juvenil y la integración social.',
                'bio' => 'Vania Mickaela Gonzales Reynaga es ciudadana paceña con formación técnica en informática, contabilidad y gestión administrativa. A lo largo de su trayectoria laboral ha adquirido experiencia en áreas administrativas, producción y manejo de personal, tanto en Bolivia como en el exterior, fortaleciendo sus capacidades organizativas y de liderazgo.
                    Desde 2016 es propietaria del restaurante “La Familia”, emprendimiento desde el cual impulsa acciones sociales como desayunos solidarios, campañas navideñas y apoyo a familias de escasos recursos. Está comprometida con el trabajo comunitario y el liderazgo juvenil, promoviendo la integración social a través del deporte y actividades barriales.
                    Forma parte activa de la Unión de Juventudes Paceñas (U.J.P.), destacándose por su vocación de servicio, solidaridad y compromiso con el desarrollo de su comunidad y de la ciudad de La Paz.
                ',
            ],
            [
                'n' => 5,
                'genero' => 'Femenino',
                'ca' => 'Concejal Titular',
                'name' => 'Silvia Layme Cahuaya',
                'summary' => 'Silvia Layme, joven estudiante paceña, emprendedora y comprometida con su comunidad. Co-propietaria de la panificadora La Paceñita, combina trabajo, liderazgo y dedicación. Habla aymara y es folklorista, promoviendo la cultura boliviana. Representa a mujeres jóvenes trabajadoras, impulsando desarrollo local, esfuerzo constante y crecimiento personal.',
                'bio' => 'Silvia Laime es una joven paceña comprometida con el trabajo, la cultura y el desarrollo comunitario. Actualmente es estudiante y se desempeña como copropietaria de la panificadora “La Paceñita”, emprendimiento familiar en el que participa activamente en la elaboración de masas tradicionales, la organización del trabajo y la atención responsable al público, fortaleciendo la economía local desde el esfuerzo diario.
                        Se caracteriza por su liderazgo, disciplina y vocación de servicio, cualidades que ha desarrollado tanto en el ámbito académico como en su experiencia emprendedora. Habla aymara, lo que le permite mantener un vínculo cercano con su identidad cultural y comunicarse de manera directa con distintos sectores de la comunidad.
                        Silvia también es folklorista, expresión de su profundo respeto por las tradiciones, la música y las danzas bolivianas, entendidas como una forma de preservar la memoria colectiva y fortalecer el sentido de pertenencia. Su visión combina juventud, trabajo y cultura, representando a una generación que apuesta por el crecimiento personal, la responsabilidad social y la construcción de oportunidades desde lo local.
                ',
            ],
            [
                'n' => 5,
                'genero' => 'Masculino',
                'ca' => 'Concejal Suplente',
                'name' => 'Alan García Oros',
                'summary' => 'Alan Luis García Oros, Licenciado en Comunicación Social, cuenta con más de catorce años de experiencia en comunicación corporativa, responsabilidad social y gestión de proyectos. Ha liderado equipos multidisciplinarios, trabajando en planificación, coordinación y ejecución eficiente de iniciativas. Consultor independiente, colaboró con PNUD, AASANA y el sector privado, y posee formación en comunicación estratégica, gestión de proyectos PMI, calidad total y responsabilidad social corporativa.',
                'bio' => 'Alan Luis García Oros es egresado de la carrera de Comunicación Social de la UMSA, con una sólida trayectoria multidisciplinaria en radio, televisión, producción de eventos y dirección técnica teatral. Cuenta con 20 años de experiencia en locución y producción radial, habiendo trabajado en emisoras como Radio Qhana, Radio Pasión Boliviana y Radio Mar. En televisión se desempeñó como productor y conductor en el programa Qd Show en medios como RTP y CVC, además de ejercer el cargo de Gerente de Producción del canal Bo Plus 13.1 entre 2020 y 2022. Es creador, productor y conductor del proyecto multimedia “Ready Player Gik”, referente nacional de la cultura geek desde 2019, y ha sido presentador oficial de eventos masivos como Chukuta Gamer y Otaku Palooza. Actualmente es locutor y coordinador del programa Bolivia para el Mundo en Radio Qhana 98.5 FM, manteniendo un fuerte compromiso con la comunicación cultural y juvenil.',
            ],
            [
                'n' => 6,
                'genero' => 'Masculino',
                'ca' => 'Concejal Titular',
                'name' => 'Cristian Molina Zenteno',
                'summary' => 'Cristian Iván Molina Zenteno, abogado boliviano, Licenciado en Derecho, con amplia experiencia en abogacía y gestión en instituciones privadas. Ha ejercido como Asistente Legal, Jefe de Administración y RR.HH., Ejecutivo Comercial y Corredor de Seguros. Profesional comprometido, responsable y orientado al servicio eficiente, innovador y a la actualización constante.',
                'bio' => 'Cristian Iván Molina Zenteno es abogado boliviano, Licenciado en Derecho, con amplia experiencia en el ejercicio libre de la abogacía y en el desempeño de cargos administrativos, legales, comerciales y de recursos humanos en instituciones privadas. A lo largo de su trayectoria profesional ha ejercido funciones como Asistente Legal, Jefe de Administración y Recursos Humanos, Ejecutivo Comercial y Corredor de Seguros, lo que le ha permitido desarrollar una visión integral de la gestión institucional y empresarial.
                    Cuenta con una sólida formación complementaria en derecho civil, penal, constitucional, laboral, tributario e informático, áreas en las que mantiene una constante actualización académica para responder de manera eficiente a los desafíos jurídicos actuales. Se caracteriza por ser un profesional comprometido, responsable y orientado al servicio, con habilidades para la gestión eficiente, la toma de decisiones y la implementación de soluciones innovadoras, siempre con un enfoque ético y de respeto a la normativa vigente.
                ',
            ],
            [
                'n' => 6,
                'genero' => 'Femenino',
                'ca' => 'Concejal Suplente',
                'name' => 'Camila Villegas Cornejo',
                'summary' => 'Camila Jahel Villegas Cornejo, ingeniera en Negocios Internacionales y Comercio Exterior con formación en Contabilidad, está especializada en análisis de mercados, gestión financiera y políticas públicas para el desarrollo económico local. Ha trabajado como Analista de Negocios, destacando en transparencia, gobierno abierto y voluntariado social y ambiental. Postula a Concejal de La Paz.',
                'bio' => 'Camila Jahel Villegas Cornejo es una joven profesional recién egresada en Ingeniería en Negocios Internacionales y Comercio Exterior, con formación técnica en Contabilidad, especializada en análisis de mercados internacionales, evaluación de riesgos, gestión financiera y formulación de políticas públicas para el desarrollo económico local.
                        Ha desempeñado el rol de Analista de Negocios Internacionales, aplicando herramientas de gestión comercial y financiera para orientar la toma de decisiones en el ámbito público y privado. Complementa su perfil con competencias en negociación intercultural, transparencia institucional y gobierno abierto, potenciadas con conocimientos en robótica aplicada a seguridad ciudadana y sistemas de información.
                        Con una reconocida vocación de servicio, ha liderado y participado en múltiples iniciativas de voluntariado enfocadas en desarrollo sostenible, inclusión social, apoyo a adultos mayores y protección animal, demostrando compromiso con el bienestar de la comunidad.Reconocida por su excelencia académica y seleccionada para un intercambio en México, Camila combina liderazgo, empatía y pensamiento estratégico para impulsar políticas inclusivas que promuevan el bienestar social y económico en su ciudad.
                        Actualmente, postula al cargo de Concejal del Municipio de La Paz con el propósito de impulsar políticas públicas inclusivas, transparentes y orientadas al desarrollo económico local, utilizando su formación técnica, su experiencia analítica y su profundo compromiso social en beneficio de la ciudad y sus habitantes.
                ',
            ],
            [
                'n' => 7,
                'genero' => 'Femenino',
                'ca' => 'Concejal Titular',
                'name' => 'Pamela Aliaga Prudencio',
                'summary' => 'Pamela Aliaga Prudencio, abogada especializada en Derecho Civil y Familiar, con más de 8 años de experiencia. Docente universitaria en La Paz y CEO de Bisontec, promoviendo acceso tecnológico a mujeres vulnerables. Experta en proyectos de género y derechos humanos, activista por adultos mayores, personas con discapacidad, niñez y animales.',
                'bio' => 'Pamela Aliaga Prudencio, abogada especializada en Derecho Civil y Derecho de Familia, con más de ocho años de experiencia profesional al servicio de las personas y la justicia social. Cuenta con un Diplomado en Educación Superior y se desempeña como docente universitaria en prestigiosas universidades de La Paz, convencida de que la educación transforma realidades.
                    Es emprendedora y CEO de Bisontec, empresa que promueve el acceso a la tecnología para mujeres en situación de vulnerabilidad, generando oportunidades, autonomía y desarrollo con enfoque humano. Se especializa en la formulación y ejecución de proyectos con perspectiva de género, trabajando con poblaciones vulnerables y en la promoción de los Derechos Humanos, impulsando iniciativas de impacto social sostenible.
                    Además, es activista independiente en defensa de los derechos de las personas adultas mayores, personas con discapacidad, la niñez y la protección de los animales de compañía, causas que reflejan su compromiso personal y profesional. Fue miembro individual de la Cámara Junior Internacional (JCI), experiencia que fortaleció su liderazgo, vocación de servicio y compromiso ciudadano.
                    Actualmente, junto a la alianza Innovación Humana, reafirma su compromiso con una La Paz más justa, inclusiva y verdaderamente humana.
                ',
            ],
            [
                'n' => 7,
                'genero' => 'Masculino',
                'ca' => 'Concejal Suplente',
                'name' => 'Kevin Aliaga Apaza',
                'summary' => 'Kevin Ramiro Aliaga Apaza, Ingeniero Comercial, Diseñador Gráfico y estudiante de Cine en la UMSA, es emprendedor con experiencia en marketing digital y gestión de negocios. Postula a Concejal en el Macro Distrito Maximiliano Paredes, promoviendo el empoderamiento juvenil mediante emprendimiento, innovación y creación de oportunidades sostenibles para los jóvenes paceños.',
                'bio' => 'Kevin Ramiro Aliaga Apaza, de 32 años, es Ingeniero Comercial, Diseñador Gráfico y estudiante de Cine y Producción Audiovisual en la UMSA. Emprendedor con experiencia en marketing digital y gestión de negocios, ha dedicado su carrera a promover la innovación, la creatividad y el desarrollo económico juvenil en La Paz. Reside en el Macro Distrito Maximiliano Paredes, Distrito 8, Zona Villa Victoria, donde ha conocido de cerca las necesidades de los jóvenes y las familias paceñas.
                    Desde temprana edad, Kevin se ha comprometido con el empoderamiento juvenil y la igualdad de oportunidades. Su labor busca transformar ideas y proyectos creativos en iniciativas sostenibles que fortalezcan la economía local y fomenten la participación activa de los jóvenes en su ciudad.
                    Como candidato a Concejal, busca representar a su generación, promoviendo políticas públicas que conviertan a La Paz en una “Ciudad de Emprendedores”. Entre sus propuestas destacan la creación de Laboratorios de Innovación Municipal, el establecimiento de alianzas público-privadas para apoyar startups juveniles y la implementación de una Ley Municipal de Primer Empleo Joven. Su objetivo es garantizar que ningún joven paceño tenga que abandonar la ciudad para alcanzar sus sueños, fomentando una gestión municipal transparente, participativa y orientada a resultados.
                    Kevin Aliaga se define por su compromiso con la juventud, su enfoque en la innovación y su propósito de generar oportunidades reales que fortalezcan el desarrollo social y económico de La Paz.
                ',
            ],
            [
                'n' => 8,
                'genero' => 'Masculino',
                'ca' => 'Concejal Titular',
                'name' => 'David Salas Lopez',
                'summary' => 'David Andrés Salas López, licenciado en Derecho y Ciencias Jurídicas, es el candidato a concejal más joven de La Paz con 22 años. Destacado como redactor de proyectos de ley sobre niñez y empoderamiento juvenil, ha sido reconocido con el Galardón Titicaca 2023 y distinciones del Senado y Policía.',
                'bio' => 'David Andres Salas Lopez, Licenciado en Derecho y Ciencias Jurídicas, quien hoy se postula como el candidato a concejal más joven del municipio de La Paz.
                    Con solo 22 años, David ya cuenta con una experiencia técnica de alto nivel, habiendo sido redactor y proyectista de tres importantes proyectos de ley presentados ante la Asamblea Legislativa Plurinacional, enfocados en la protección de la niñez y el empoderamiento de nuestra juventud.
                    Su trayectoria como activista y líder académico ha sido reconocida con el Galardón Titicaca 2023 como Personaje Boliviano Destacado, además de recibir honores por parte de la Cámara de Senadores y la Policía Boliviana.
                    David llega a esta candidatura no solo para representar a las nuevas generaciones, sino para inyectar rigor legal e innovación al Concejo Municipal. Él es su concejal para hacer historia, demostrando que el conocimiento y la energía joven son la clave para transformar nuestra ciudad.
                ',
            ],
            [
                'n' => 8,
                'genero' => 'Masculino',
                'ca' => 'Concejal Suplente',
                'name' => 'Carola Fortún Cabrerizo',
                'summary' => 'Carola Viviana Fortún Cabrerizo, Licenciada en Comunicación Social, cuenta con más de 14 años de experiencia en comunicación corporativa, gestión de proyectos y responsabilidad social. Ha liderado equipos multidisciplinarios, trabajado con PNUD, AASANA y el sector privado, y se distingue por su enfoque estratégico, compromiso profesional y habilidades en planificación y redacción técnica.',
                'bio' => 'Carola Viviana Fortún Cabrerizo es licenciada en Comunicación Social por la Universidad Mayor de San Andrés, con más de 14 años de experiencia en comunicación para proyectos, comunicación corporativa y responsabilidad social. A lo largo de su carrera ha liderado equipos multidisciplinarios, implementando estrategias de comunicación integrales que facilitan la coordinación de proyectos y la gestión de información de manera eficiente y efectiva.
                    Ha trabajado en distintos ámbitos, incluyendo consultoría para organismos internacionales como el Programa de Naciones Unidas para el Desarrollo (PNUD), gestión de proyectos y calidad en empresas privadas, así como planificación y reestructuración institucional en el sector público. Su experiencia le ha permitido desarrollar habilidades en comunicación estratégica, gestión documental, elaboración de documentos técnicos y académicos, y coordinación de campañas comunicacionales, siendo la comunicación un eje transversal que conecta áreas y equipos de trabajo.
                    Carola Viviana también se ha formado continuamente, con estudios complementarios en comunicación para el desarrollo, responsabilidad social corporativa, gestión de proyectos bajo metodología PMI, y planificación estratégica, aplicando estos conocimientos en cada proyecto para garantizar resultados medibles y de impacto. Su enfoque combina liderazgo, planificación y gestión de calidad, destacando por su compromiso con la mejora institucional y el desarrollo de iniciativas que contribuyan al bienestar social, económico y educativo de la comunidad.
                ',
            ],
            [
                'n' => 9,
                'genero' => 'Femenino',
                'ca' => 'Concejal Titular',
                'name' => 'Yolanda Marina Limachi',
                'summary' => 'Yolanda Marina Limachi, bachiller del Liceo Venezuela , es una destacada líder gremial paceña que resalta por su dominio del idioma aymara y el español. Con amplia trayectoria como comerciante , actualmente es Secretaria General de la Asociación Isaac Tamayo y posee gran experiencia en la Federación de Gremiales.',
                'bio' => 'Yolanda Marina Limachi es una líder gremial y comerciante boliviana con una trayectoria de servicio que abarca más de cuatro décadas en la ciudad de La Paz. Realizó su formación académica como bachiller en el Liceo Venezuela. Su actividad económica principal se ha desarrollado como comerciante y vendedora desde enero de 1978 hasta la actualidad.
                        Su vocación de liderazgo se ha manifestado principalmente a través de la Asociación de Comerciantes Isaac Tamayo, donde ha desempeñado una extensa variedad de cargos directivos. Inició su participación destacada como porta estandarte entre 1992 y 1994, para luego asumir responsabilidades de mayor peso institucional como Secretaria de Relaciones (1997-1999), Secretaria de Organización (2001-2003) y Secretaria de Hacienda (2018-2020). Ha ejercido el cargo de Secretaria General de dicha asociación en dos periodos significativos, el primero entre 2009 y 2013, y el segundo desde septiembre de 2020 hasta el presente, además de haber servido como Fiscal General entre 2016 y 2018.
                        A nivel estructural y federativo, Yolanda Marina Limachi alcanzó la Secretaría General de la Federación de Gremiales a nivel La Paz entre 2009 y 2011. Su compromiso social también se extendió al ámbito vecinal, desempeñándose como Secretaria Territorial en la Fejuve La Paz durante el periodo de abril de 2021 a abril de 2023. Posee una notable capacidad de liderazgo y es bilingüe, con dominio de los idiomas aymara y español. Actualmente reside en la calle Isaac Tamayo de la ciudad de La Paz.',
            ],
            [
                'n' => 9,
                'genero' => 'Masculino',
                'ca' => 'Concejal Suplente',
                'name' => 'Alvaro Viaña Carretero',
                'summary' => 'Álvaro Xavier Viaña Carretero, arquitecto con postgrado en Gestión Pública, Riesgos y Gestión Inmobiliaria, posee más de 10 años de experiencia en el Gobierno Autónomo Municipal de La Paz. Ha liderado proyectos de planificación urbana, administración territorial y catastro, asesorando al Concejo Municipal y participando en congresos nacionales e internacionales sobre urbanismo y gestión de riesgos.',
                'bio' => 'Alvaro Xavier Viaña Carretero es arquitecto colegiado (C.A.B. 6673) con una sólida trayectoria en gestión territorial y urbana, planificación municipal y administración catastral. Posee postgrados en Gestión Pública para el Desarrollo Territorial, Gestión Integral del Riesgo de Desastres para la Toma de Decisiones y Gestión Inmobiliaria, que respaldan su enfoque técnico y estratégico en la administración pública y privada.
                    Con más de 10 años ocupando cargos jerárquicos en el Gobierno Autónomo Municipal de La Paz, Álvaro ha liderado equipos multidisciplinarios y tomado decisiones clave en áreas de Administración Territorial, Planificación, Catastro Urbano y gestión documental, incluyendo la actualización cartográfica y geográfica del municipio. Su experiencia abarca desde la elaboración de procedimientos internos y proyectos en operación hasta la implementación de políticas de ordenamiento territorial que contribuyen al desarrollo sostenible de la ciudad.
                    Actualmente, se desempeña como socio en el estudio KAOS Arquitectos, brindando asesoramiento en gestión territorial, administración de trámites municipales y avalúos comerciales inmobiliarios. Ha ocupado roles destacados como Secretario Municipal de Planificación para el Desarrollo y Director de Administración Territorial y Catastral, coordinando proyectos estratégicos, administración de predios públicos y privados, y consolidando información catastral y cartográfica de alta relevancia para la ciudad de La Paz.
                    Álvaro también ha desarrollado una sólida labor en la docencia, divulgación y transferencia del conocimiento, participando como expositor en congresos y seminarios nacionales e internacionales sobre urbanismo, catastro y planificación territorial. Su trabajo ha sido reconocido por la implementación de soluciones innovadoras para asentamientos urbanos informales y la promoción de ciudades sostenibles.
                    Entre sus competencias destacan el liderazgo, la toma de decisiones, la resolución de conflictos, la planificación estratégica y la coordinación interinstitucional. Maneja herramientas técnicas avanzadas como AutoCAD, SketchUp, 3D Max, Revit, QGIS y ArcGIS, además de contar con conocimientos intermedios de inglés. Su carrera refleja un compromiso constante con la gestión eficiente del territorio, la sostenibilidad urbana y la mejora de la calidad de vida de la ciudadanía paceña.
                ',
            ],
            [
                'n' => 10,
                'genero' => 'Masculino',
                'ca' => 'Concejal Titular',
                'name' => 'Leónidas Poma Riveros',
                'summary' => 'Leónidas Ariel Poma Riveros, abogado con más de 12 años en administración pública municipal, experto en contrataciones estatales, gestión documental y administración de garantías. Licenciado en Derecho y Magíster en Administración, ha liderado unidades jurídicas y es docente de posgrado en UPEA, promoviendo transparencia, eficiencia y compromiso en la gestión pública.',
                'bio' => 'Leónidas Ariel Poma Riveros, Abogado con más de 12 años de experiencia profesional en la administración pública municipal, especializado en Contrataciones Estatales - Normas Básicas del Sistema de Administración de Bienes y Servicios (NB-SABS), Administración y Ejecución de Garantías y gestión documental contractual. Licenciado en Derecho por la Universidad Mayor de San Andrés y Magíster en Administración y Gestión.
                    Cuenta con formación especializada posgradual, respaldada por diplomados estratégicos en Contrataciones Estatales (NB-SABS), Administración de Bienes y Servicios, Diseño Curricular y Gerencia Educativa, que le permiten articular el conocimiento técnico con la toma de decisiones políticas, garantizando procesos transparentes, eficientes y alineados con el interés colectivo.
                    Su trayectoria en la administración municipal lo posiciona como un profesional con experiencia real en la gestión pública, habiendo asumido responsabilidades de confianza y liderazgo, como Jefe de Unidad y Abogado Institucional en la Dirección de Licitaciones y Contrataciones, donde contribuyó a la seguridad jurídica de los procesos de contratación, al control responsable de los recursos públicos y al fortalecimiento de los mecanismos de fiscalización y rendición de cuentas.
                    Paralelamente, desarrolla una destacada labor como docente de posgrado en la Universidad Pública de El Alto, donde ha formado a servidores públicos y profesionales en Diplomados de Contrataciones Estatales, impartiendo módulos clave sobre fundamentos, actores y etapas posteriores a la formalización de los procesos de contratación. Esta experiencia académica refleja su vocación de servicio, liderazgo intelectual y compromiso con la formación de recursos humanos para el Estado.
                    Su perfil integra experiencia técnica, formación académica de excelencia y compromiso político con el desarrollo institucional, proyectándose como un actor capaz de transformar la gestión pública, fortalecer la legalidad, combatir la improvisación y promover un Estado eficiente, transparente y al servicio del pueblo.
                ',
            ],
            [
                'n' => 10,
                'genero' => 'Femenino',
                'ca' => 'Concejal Suplente',
                'name' => 'Ubaldina Robles Soto',
                'summary' => 'Ubaldina Marina Robles Soto, de 61 años, es gremial y emprendedora comprometida con jóvenes, mujeres y personas con discapacidad en barrios periféricos de La Paz. Busca ser concejal para combatir la corrupción, mejorar oportunidades, defender el trabajo digno, garantizar participación ciudadana y promover normas justas que beneficien a todos los vecinos.',
                'bio' => 'Ubaldina Marina Robles Soto es una mujer emprendedora y líder comunitaria del Macro San Antonio Bajo, Distrito 15 de La Paz. Bachiller en Humanidades, ha dedicado su vida al trabajo gremial, apoyando a personas con discapacidad, niños necesitados y promoviendo el desarrollo integral de los barrios periféricos.
                        Comprometida con la justicia social, la igualdad de oportunidades y la defensa de los derechos de jóvenes, mujeres y gremiales, U Baldina se ha convertido en una referente de participación vecinal. Su experiencia en la gestión comunitaria y el conocimiento de las necesidades locales la motivan a postularse como Concejal Municipal, con el propósito de garantizar una ciudad más inclusiva y productiva.
                        Como concejal, su principal objetivo será promover el trabajo digno, mejorar las condiciones de los vendedores y asegurar que los gremiales, jóvenes y mujeres tengan voz en todas las decisiones que los afecten, combatiendo la corrupción y la desigualdad que persisten en el municipio.
                ',
            ],
            [
                'n' => 11,
                'genero' => 'Femenino',
                'ca' => 'Concejal Titular',
                'name' => 'Janeth Flores Guzmán',
                'summary' => 'Janeth Flores Guzmán es licenciada en Auditoría Financiera con más de 12 años en gestión pública. Destacada por su liderazgo ético y transparencia, ha trabajado en barrios paceños promoviendo participación ciudadana, desarrollo económico local y obras comunitarias. Postula al Concejo Municipal para impulsar una ciudad justa, segura y eficiente.',
                'bio' => 'Janeth Flores Guzmán es una profesional paceña, licenciada en Auditoría Financiera, con más de 12 años de experiencia en gestión pública en áreas administrativa, financiera, planificación y recursos humanos. Su trayectoria incluye cargos estratégicos como Jefa de Unidad, Responsable de áreas clave y Directora Regional a.i., destacándose por su liderazgo ético, eficiencia y compromiso con la transparencia.
                    Ha desarrollado sólidos conocimientos en gobernabilidad, gerencia política, liderazgo para la transformación, sistemas de administración pública y normativa financiera del Estado Plurinacional, lo que le permite combinar preparación técnica con sensibilidad social.
                    En el ámbito comunitario, Janeth ha sido Presidenta de Zona Villalobos Municipal, titular a Control del Distrito 14 Macro San Antonio y dirigente de la Feria de Alasitas. Su labor se centra en la participación ciudadana, el fortalecimiento de expresiones culturales y la gestión de servicios básicos, infraestructura barrial y mejoras viales, siempre priorizando la escucha activa y el trabajo conjunto con los vecinos.
                    A lo largo de más de 15 años, ha ocupado posiciones clave en instituciones públicas como SEPRET, AASANA, el Ministerio de Gobierno, la Prefectura de Cochabamba y el Ministerio de Justicia, así como en proyectos privados. Estas funciones le han permitido dominar sistemas de gestión financiera y administrativa, control de recursos humanos, formulación de estados financieros y análisis institucional.
                    Su compromiso con la ciudad de La Paz la motiva a postularse al Concejo Municipal. Janeth busca representar a las familias, comerciantes, dirigentes y ciudadanos, promoviendo un municipio más humano, seguro, ordenado y próspero. Sus principales objetivos como concejal son: garantizar la ejecución eficiente de los recursos públicos en los barrios, fortalecer el desarrollo económico local y combatir la corrupción mediante una gestión ética y transparente.
                    Madre de tres hijos y comprometida con la mejora de la calidad de vida de su comunidad, Janeth Flores combina experiencia profesional, vocación de servicio y liderazgo comunitario, aportando con capacidad técnica y sensibilidad social al desarrollo de La Paz.
                ',
            ],
            [
                'n' => 11,
                'genero' => 'Masculino',
                'ca' => 'Concejal Suplente',
                'name' => 'Rolando Limachi Pardo',
                'summary' => 'Rolando Limachi Pardo, vecino de Villa Salomé, es informático y contador con diplomado en Gerencia de la Construcción. Postula como concejal para fiscalizar, garantizar obras bien ejecutadas, buena administración de recursos, cero corrupción y una ciudad eficiente y transparente al servicio de la gente.',
                'bio' => 'Rolando Limachi Pardo es vecino del Macrodistrito San Antonio, residente en la zona Villa Salomé, sector Cosmos ’85, con 46 años de edad. Es licenciado, informático y contador general, con un diplomado en Gerencia de la Construcción, formación que le permite comprender tanto la gestión pública como la ejecución técnica y financiera de las obras.
                    Su compromiso nace desde la experiencia y la vida cotidiana, entendiendo de cerca los problemas que afectan a emprendedores, empresarios y trabajadores del sector de la construcción. Por ello, ha decidido asumir el desafío de servir como concejal, con una visión clara de ciudad eficiente y transparente, enmarcada en el Eje I: “Ciudad que Funciona” del proyecto de Innovación Humana.
                    Rolando plantea con firmeza la necesidad de enfrentar problemas estructurales como el incumplimiento de pagos a los emprendedores, la mala ejecución de obras, la presencia de técnicos inexpertos, y la burocracia en las planillas de pago, situaciones que afectan directamente al desarrollo de la ciudad y a la economía local.
                ',
            ],
        ];

        foreach ($candidatos as $data) {
            // AQUÍ calculas el slug usando el name que viene en el array
            $data['photo'] = 'candidatos/'.Str::slug($data['name']).'.png';
            // Usamos create() para disparar los eventos del Modelo (UUID y Slug)
            Candidato::create($data);
        }

    } // classs
}
