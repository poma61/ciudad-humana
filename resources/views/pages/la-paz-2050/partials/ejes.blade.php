{{-- QUICK NAV (Navegación rápida entre ejes) --}}
<div class="sticky top-17 z-20 bg-base-100/80 backdrop-blur-md border-b border-base-200 shadow-sm py-4">
    <div class="max-w-7xl mx-auto px-4 overflow-x-auto overflow-y-none">
        <div class="flex space-x-2 whitespace-nowrap pb-2 md:justify-center">
            <a href="#eje-1" class="btn btn-sm btn-ghost hover:text-purple-500">Eje I</a>
            <a href="#eje-2" class="btn btn-sm btn-ghost hover:text-pink-400">Eje II</a>
            <a href="#eje-3" class="btn btn-sm btn-ghost hover:text-teal-500">Eje III</a>
            <a href="#eje-4" class="btn btn-sm btn-ghost hover:text-sky-300">Eje IV</a>
            <a href="#eje-5" class="btn btn-sm btn-ghost hover:text-pink-500">Eje V</a>
            <a href="#eje-6" class="btn btn-sm btn-ghost hover:text-purple-500">Eje VI</a>
            <a href="#eje-7" class="btn btn-sm btn-ghost hover:text-orange-500">Eje VII</a>
            <a href="#eje-8" class="btn btn-sm btn-ghost hover:text-cyan-500">Eje VIII</a>
            <a href="#eje-9" class="btn btn-sm btn-ghost hover:text-green-500">Eje IX</a>
            <a href="#eje-10" class="btn btn-sm btn-ghost hover:text-indigo-500">Eje X</a>
        </div>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 space-y-25">
    {{-- EJE I --}}
    <section id="eje-1" class="scroll-mt-10">
        <div class="text-center mb-10 animate__animated animate__fadeIn">
            <div class="badge badge-lg mb-4 p-4 font-bold bg-purple-500 text-white">EJE I</div>
            <h2 class="text-4xl font-bold text-base-content mb-2">Ciudad Eficiente y Transparente</h2>
            <h3 class="text-xl text-purple-500 font-medium uppercase tracking-widest">Ciudad que Funciona</h3>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @php
                $eje1 = [
                    [
                        'id' => 1,
                        'title' => 'Política Urbana Integral y Gobernanza del Territorio',
                        'desc' =>
                            'Formular una política urbana de largo plazo que oriente el desarrollo territorial sostenible, equitativo y resiliente.',
                    ],
                    [
                        'id' => 2,
                        'title' => 'Normativa Urbana y Convenios',
                        'desc' =>
                            'Modernizar el marco normativo urbano y establecer convenios con actores barriales, sociales y privados.',
                    ],
                    [
                        'id' => 3,
                        'title' => 'Planificación Urbana Operativa',
                        'desc' =>
                            'Desarrollar instrumentos de planificación (POT, planes de distrito) con enfoque participativo y digital.',
                    ],
                    [
                        'id' => 4,
                        'title' => 'Reforma Institucional y Gestión Municipal por Resultados',
                        'desc' =>
                            'Rediseñar la estructura organizativa de la Alcaldía para lograr eficiencia operativa, desconcentración y control de resultados. Gestión de la Documentación Urbana y Municipal.',
                    ],
                    [
                        'id' => 5,
                        'title' => 'Sistema de Recaudación Municipal',
                        'desc' =>
                            'Modernizar el sistema tributario, ampliar la base contributiva y digitalizar el cobro.',
                    ],
                    [
                        'id' => 6,
                        'title' => 'Presupuesto y POA Transparente',
                        'desc' =>
                            'Establecer un sistema de presupuesto orientado a resultados, visual, comprensible y participativo.',
                    ],
                    [
                        'id' => 7,
                        'title' => 'Transparencia y Ética Pública Municipal',
                        'desc' =>
                            'Institucionalizar mecanismos de ética, acceso a la información y seguimiento social.',
                    ],
                    [
                        'id' => 8,
                        'title' => 'Participación y Control Social Organizado',
                        'desc' => 'Empoderar a la ciudadanía mediante mecanismos reales de deliberación y control.',
                    ],
                    [
                        'id' => 9,
                        'title' => 'Auditoría Técnica y Evaluación Pública',
                        'desc' =>
                            'Instalar procesos permanentes de auditoría técnica y financiera con participación comunitaria.',
                    ],
                    [
                        'id' => 10,
                        'title' => 'Presupuesto Participativo y Contraloría Social',
                        'desc' =>
                            'Delegar parte del presupuesto municipal a decisiones directas de los vecinos por zona.',
                    ],
                    [
                        'id' => 11,
                        'title' => 'Estrategia de Financiamiento Mixto y Fondos Fiduciarios',
                        'desc' =>
                            'Diseñar un fondo fiduciario con recursos públicos, privados e internacionales para megaproyectos.',
                    ],
                    [
                        'id' => 12,
                        'title' => 'Estrategia de Financiamiento con participación Privada',
                        'desc' => 'Promover inversión privada mediante APP, OxI, concesiones y patrocinios sociales.',
                    ],
                    [
                        'id' => 13,
                        'title' => 'Gestión de Recursos Estatales y Cooperación Internacional',
                        'desc' =>
                            'Establecer mecanismos efectivos para obtener inversión nacional e internacional para proyectos urbanos.',
                    ],
                    [
                        'id' => 14,
                        'title' => 'Transformación Digital Ciudadana',
                        'desc' =>
                            'Digitalizar la gestión, participación y servicios públicos para acercar el municipio a las personas.',
                    ],
                ];
            @endphp
            @foreach ($eje1 as $item)
                <div
                    class="card bg-base-100 shadow-md hover:shadow-xl transition-all duration-300 border-l-4 border-purple-500 group">
                    <div class="card-body">
                        <div class="flex justify-between items-start mb-2">
                            <span class="badge badge-outline font-mono text-sm font-bold">#{{ $item['id'] }}</span>
                            <i data-lucide="layout-dashboard"
                                class="w-5 h-5 text-purple-500 opacity-50 group-hover:opacity-100 transition-opacity"></i>
                        </div>
                        <h3 class="card-title text-lg leading-snug mb-2 group-hover:text-purple-500 transition-colors">
                            {{ $item['title'] }}</h3>
                        <p class="text-base text-base-content/70">{{ $item['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- EJE II --}}
    <section id="eje-2" class="scroll-mt-10">
        <div class="text-center mb-10">
            <div class="badge badge-lg mb-4 p-4 font-bold text-white bg-pink-400">EJE II</div>
            <h2 class="text-4xl font-bold text-base-content mb-2">Ciudad Vital</h2>
            <h3 class="text-xl text-pink-400 font-medium uppercase tracking-widest">Ciudad que Cuida la Vida</h3>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @php
                $eje2 = [
                    [
                        'id' => 15,
                        'title' => 'Salud Primaria Integral',
                        'desc' => 'Garantizar atención integral y accesible en salud primaria para toda la población.',
                    ],
                    [
                        'id' => 16,
                        'title' => 'Salud Inteligente y Preventiva',
                        'desc' => 'Promover sistemas de prevención, monitoreo y respuesta temprana en salud urbana.',
                    ],
                    [
                        'id' => 17,
                        'title' => 'Salud Mental Comunitaria',
                        'desc' =>
                            'Instalar servicios permanentes de atención en salud mental con enfoque comunitario y territorial.',
                    ],
                    [
                        'id' => 18,
                        'title' => 'Deporte para la Vida (Formativo y comunitario)',
                        'desc' =>
                            'Fomentar el deporte como herramienta educativa para desarrollar disciplina, autoestima, liderazgo y sentido de propósito en niñas, niños, adolescentes y jóvenes.',
                    ],
                    [
                        'id' => 19,
                        'title' => 'Deporte de Alto Rendimiento Paceño (Competitivo y de representación)',
                        'desc' =>
                            'Desarrollar una estructura profesional para formar deportistas de élite que representen a La Paz en torneos nacionales e internacionales.',
                    ],
                    [
                        'id' => 20,
                        'title' => 'Control de Alimentos y Salud Nutricional',
                        'desc' =>
                            'Fortalecer el control sanitario de alimentos, nutrición escolar y consumo saludable.',
                    ],
                    [
                        'id' => 21,
                        'title' => 'Agua Segura y Gestión Hídrica',
                        'desc' =>
                            'Garantizar calidad, disponibilidad y resiliencia hídrica en contexto de sequía o exceso.',
                    ],
                    [
                        'id' => 22,
                        'title' => 'Defensa del Consumidor',
                        'desc' =>
                            'Proteger al ciudadano frente a abusos en servicios básicos, alimentos y otros rubros de competencia municipal.',
                    ],
                ];
            @endphp
            @foreach ($eje2 as $item)
                <div
                    class="card bg-base-100 shadow-md hover:shadow-xl transition-all duration-300 border-l-4 border-pink-400 group">
                    <div class="card-body">
                        <div class="flex justify-between items-start mb-2">
                            <span class="badge badge-outline font-mono text-sm font-bold">#{{ $item['id'] }}</span>
                            <i data-lucide="heart"
                                class="w-5 h-5 text-pink-400 opacity-50 group-hover:opacity-100 transition-opacity"></i>
                        </div>
                        <h3 class="card-title text-lg leading-snug mb-2 group-hover:text-pink-400 transition-colors">
                            {{ $item['title'] }}</h3>
                        <p class="text-base text-base-content/70">{{ $item['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- EJE III --}}
    <section id="eje-3" class="scroll-mt-10">
        <div class="text-center mb-10">
            <div class="badge badge-lg mb-4 p-4 font-bold bg-teal-500 text-white">EJE III</div>
            <h2 class="text-4xl font-bold text-base-content mb-2">Ciudad Inteligente</h2>
            <h3 class="text-xl text-accent font-medium uppercase tracking-widest">Ciudad que Aprende e Innova</h3>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @php
                $eje3 = [
                    [
                        'id' => 23,
                        'title' => 'Infraestructura y Equipamiento Educativo',
                        'desc' =>
                            'Garantizar infraestructura y condiciones dignas para la enseñanza en todo el municipio.',
                    ],
                    [
                        'id' => 24,
                        'title' => 'Educación para el Desarrollo',
                        'desc' => 'Promover formación integral para la ciudadanía activa, productiva y resiliente.',
                    ],
                    [
                        'id' => 25,
                        'title' => 'Educación Digital y Tecnologías para la Vida',
                        'desc' => 'Democratizar el acceso a herramientas digitales para cerrar brechas tecnológicas.',
                    ],
                    [
                        'id' => 26,
                        'title' => 'Innovación y Tecnología Aplicada',
                        'desc' => 'Fomentar soluciones técnicas, científicas y digitales a problemas urbanos.',
                    ],
                    [
                        'id' => 27,
                        'title' => 'Ciudad Inteligente',
                        'desc' => 'Utilizar la tecnología para cuidar y mejorar la vida de la gente.',
                    ],
                    [
                        'id' => 28,
                        'title' => 'Laboratorios Urbanos de Innovación Social',
                        'desc' =>
                            'Experimentar soluciones participativas a retos sociales mediante prototipos urbanos.',
                    ],
                ];
            @endphp
            @foreach ($eje3 as $item)
                <div
                    class="card bg-base-100 shadow-md hover:shadow-xl transition-all duration-300 border-l-4 border-teal-500 group">
                    <div class="card-body">
                        <div class="flex justify-between items-start mb-2">
                            <span class="badge badge-outline font-mono text-sm font-bold">#{{ $item['id'] }}</span>
                            <i data-lucide="cpu"
                                class="w-5 h-5 text-teal-500 opacity-50 group-hover:opacity-100 transition-opacity"></i>
                        </div>
                        <h3 class="card-title text-lg leading-snug mb-2 group-hover:text-teal-500 transition-colors">
                            {{ $item['title'] }}</h3>
                        <p class="text-base text-base-content/70">{{ $item['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- EJE IV --}}
    <section id="eje-4" class="scroll-mt-10">
        <div class="text-center mb-10">
            <div class="badge badge-lg mb-4 p-4 font-bold bg-sky-300 text-white">EJE IV</div>
            <h2 class="text-4xl font-bold text-base-content mb-2">Ciudad Productiva</h2>
            <h3 class="text-xl text-sky-300 font-medium uppercase tracking-widest">Ciudad de Oportunidades</h3>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @php
                $eje4 = [
                    [
                        'id' => 29,
                        'title' => 'Autonomía Económica de Mujeres',
                        'desc' =>
                            'Impulsar la autonomía económica de mujeres mediante formación técnica, acceso a ingresos propios y redes de cuidado.',
                    ],
                    [
                        'id' => 30,
                        'title' => 'Juventudes con Futuro',
                        'desc' =>
                            'Fortalecer las capacidades, liderazgo y empleabilidad de jóvenes a través de centros de innovación social y técnica.',
                    ],
                    [
                        'id' => 31,
                        'title' => 'Empleo Productivo y Sostenible',
                        'desc' =>
                            'Promover empleo digno a partir de inversión pública, alianzas estratégicas y capacitación técnica en barrios.',
                    ],
                    [
                        'id' => 32,
                        'title' => 'Empresas Públicas Eficientes',
                        'desc' =>
                            'Reestructurar las empresas municipales para garantizar eficiencia, transparencia y autosostenibilidad con visión ciudadana.',
                    ],
                    [
                        'id' => 33,
                        'title' => 'Nuevas Empresas Mixtas',
                        'desc' =>
                            'Crear empresas Mixtas en áreas estratégicas como alimentos, logística, reciclaje y residuos, con modelos sostenibles.',
                    ],
                    [
                        'id' => 34,
                        'title' => 'Mercados y Comercio Digno',
                        'desc' =>
                            'Convertir los mercados en espacios modernos, seguros y dignos, con innovación comercial y social.',
                    ],
                    [
                        'id' => 35,
                        'title' => 'Planificación Productiva, Competitividad y Oportunidades Territoriales',
                        'desc' =>
                            'Impulsar polos productivos por distrito a partir del análisis de vocación, competitividad y oportunidades de desarrollo.',
                    ],
                    [
                        'id' => 36,
                        'title' => 'Ecosistema Municipal del Emprendimiento',
                        'desc' =>
                            'Consolidar un entorno integral para emprendedores con formación, incubación, mercado y financiamiento.',
                    ],
                    [
                        'id' => 37,
                        'title' => 'Economía Social, Solidaria y Popular',
                        'desc' =>
                            'Potenciar modelos económicos alternativos basados en la cooperación, reciprocidad, trueque y redes comunitarias.',
                    ],
                ];
            @endphp
            @foreach ($eje4 as $item)
                <div
                    class="card bg-base-100 shadow-md hover:shadow-xl transition-all duration-300 border-l-4 border-sky-300 group">
                    <div class="card-body">
                        <div class="flex justify-between items-start mb-2">
                            <span class="badge badge-outline font-mono text-sm font-bold">#{{ $item['id'] }}</span>
                            <i data-lucide="trending-up"
                                class="w-5 h-5 text-sky-300 opacity-50 group-hover:opacity-100 transition-opacity"></i>
                        </div>
                        <h3 class="card-title text-lg leading-snug mb-2 group-hover:text-sky-300 transition-colors">
                            {{ $item['title'] }}</h3>
                        <p class="text-base text-base-content/70">{{ $item['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- EJE V --}}
    <section id="eje-5" class="scroll-mt-10">
        <div class="text-center mb-10">
            <div class="badge badge-lg mb-4 p-4 font-bold bg-pink-500 text-white border-pink-500">EJE V</div>
            <h2 class="text-4xl font-bold text-base-content mb-2">Ciudad de Cuidados y Derechos</h2>
            <h3 class="text-xl text-pink-500 font-medium uppercase tracking-widest">Ciudad Para Todos</h3>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @php
                $eje5 = [
                    [
                        'id' => 38,
                        'title' => 'Ciudad Longeva y Activa',
                        'desc' =>
                            'Garantizar bienestar integral a personas adultas mayores con salud, espacios, y participación.',
                    ],
                    [
                        'id' => 39,
                        'title' => 'Ciudad Inclusiva con Discapacidad',
                        'desc' =>
                            'Fortalecer derechos, accesibilidad, participación y autonomía de personas con discapacidad.',
                    ],
                    [
                        'id' => 40,
                        'title' => 'Infancia y Adolescencia Protegida',
                        'desc' =>
                            'Prevenir vulneraciones, promover derechos y crear entornos protectores para niñas, niños y adolescentes.',
                    ],
                    [
                        'id' => 41,
                        'title' => 'Ciudad Segura para las Mujeres',
                        'desc' =>
                            'Prevenir la violencia de género y garantizar igualdad, protección y espacios seguros para mujeres y niñas.',
                    ],
                    [
                        'id' => 42,
                        'title' => 'Seguridad Ciudadana con Comunidad',
                        'desc' => 'Prevenir el delito y fortalecer redes vecinales de seguridad.',
                    ],
                    [
                        'id' => 43,
                        'title' => 'Redes de Cuidado Intergeneracional',
                        'desc' =>
                            'Promover redes de apoyo mutuo entre generaciones y servicios de cuidados solidarios.',
                    ],
                    [
                        'id' => 44,
                        'title' => 'Atención a Personas en Situación de Calle',
                        'desc' =>
                            'Brindar atención integral, salud, alojamiento y reinserción social a personas sin hogar.',
                    ],
                    [
                        'id' => 45,
                        'title' => 'Ciudad Protectora de Animales',
                        'desc' =>
                            'Desarrollar políticas de protección animal, control poblacional y convivencia armónica.',
                    ],
                ];
            @endphp
            @foreach ($eje5 as $item)
                <div
                    class="card bg-base-100 shadow-md hover:shadow-xl transition-all duration-300 border-l-4 border-pink-500 group">
                    <div class="card-body">
                        <div class="flex justify-between items-start mb-2">
                            <span class="badge badge-outline font-mono text-sm font-bold">#{{ $item['id'] }}</span>
                            <i data-lucide="users"
                                class="w-5 h-5 text-pink-500 opacity-50 group-hover:opacity-100 transition-opacity"></i>
                        </div>
                        <h3 class="card-title text-lg leading-snug mb-2 group-hover:text-pink-500 transition-colors">
                            {{ $item['title'] }}</h3>
                        <p class="text-base text-base-content/70">{{ $item['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- EJE VI --}}
    <section id="eje-6" class="scroll-mt-10">
        <div class="text-center mb-10">
            <div class="badge badge-lg mb-4 p-4 font-bold bg-purple-500 text-white border-purple-500">EJE VI</div>
            <h2 class="text-4xl font-bold text-base-content mb-2">Ciudad Cultural y Turística</h2>
            <h3 class="text-xl text-purple-500 font-medium uppercase tracking-widest">Ciudad que Inspira y Atrae</h3>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @php
                $eje6 = [
                    [
                        'id' => 46,
                        'title' => 'Culturas para la Vida',
                        'desc' =>
                            'Democratizar el acceso a la cultura, fortaleciendo a artistas, gestores y organizaciones culturales.',
                    ],
                    [
                        'id' => 47,
                        'title' => 'Turismo de Altura',
                        'desc' =>
                            'Posicionar a La Paz como un destino turístico urbano, cultural e histórico de referencia internacional.',
                    ],
                    [
                        'id' => 48,
                        'title' => 'Patrimonio para el Futuro',
                        'desc' => 'Proteger, restaurar y revalorizar el patrimonio material e inmaterial de la ciudad.',
                    ],
                    [
                        'id' => 49,
                        'title' => 'Infraestructura Cultural y Recreativa',
                        'desc' => 'Mejorar, construir y operar espacios culturales, deportivos y recreativos.',
                    ],
                    [
                        'id' => 50,
                        'title' => 'Economía Creativa y Naranja',
                        'desc' =>
                            'Generar oportunidades de empleo y negocio para artistas, creadores y emprendedores culturales.',
                    ],
                    [
                        'id' => 51,
                        'title' => 'Ciudad Vivencial Comunitaria y Laboratorios Culturales',
                        'desc' =>
                            'Fortalecer las expresiones culturales populares y territoriales como factor de cohesión y orgullo urbano.',
                    ],
                ];
            @endphp
            @foreach ($eje6 as $item)
                <div
                    class="card bg-base-100 shadow-md hover:shadow-xl transition-all duration-300 border-l-4 border-purple-500 group">
                    <div class="card-body">
                        <div class="flex justify-between items-start mb-2">
                            <span class="badge badge-outline font-mono text-sm font-bold">#{{ $item['id'] }}</span>
                            <i data-lucide="palette"
                                class="w-5 h-5 text-purple-500 opacity-50 group-hover:opacity-100 transition-opacity"></i>
                        </div>
                        <h3 class="card-title text-lg leading-snug mb-2 group-hover:text-purple-500 transition-colors">
                            {{ $item['title'] }}</h3>
                        <p class="text-base text-base-content/70">{{ $item['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- EJE VII --}}
    <section id="eje-7" class="scroll-mt-10">
        <div class="text-center mb-10">
            <div class="badge badge-lg mb-4 p-4 font-bold bg-orange-500 text-white border-orange-500">EJE VII</div>
            <h2 class="text-4xl font-bold text-base-content mb-2">Ciudad Planificada y Habitable</h2>
            <h3 class="text-xl text-orange-500 font-medium uppercase tracking-widest">Ciudad con Barrios Dignos</h3>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @php
                $eje7 = [
                    [
                        'id' => 52,
                        'title' => 'Planificación Territorial y Urbanismo Eficiente',
                        'desc' =>
                            'Consolidar un marco técnico y normativo de ordenamiento urbano, con enfoque de resiliencia, equidad y sostenibilidad.',
                    ],
                    [
                        'id' => 53,
                        'title' => 'Habitat Digno y Vivienda Social',
                        'desc' =>
                            'Promover soluciones habitacionales para sectores vulnerables, con acceso a servicios y tenencia legal segura.',
                    ],
                    [
                        'id' => 54,
                        'title' => 'Catastro Moderno y Justicia Urbana',
                        'desc' =>
                            'Modernizar el sistema catastral para asegurar equidad tributaria, planificación y acceso a datos georreferenciados.',
                    ],
                    [
                        'id' => 55,
                        'title' => 'Gestión del Suelo y Asentamientos Seguros',
                        'desc' =>
                            'Controlar la expansión informal, regularizar asentamientos seguros y proteger zonas de riesgo.',
                    ],
                    [
                        'id' => 56,
                        'title' => 'Prevención de Riesgos Urbanos',
                        'desc' =>
                            'Ejecutar medidas estructurales y comunitarias para reducir vulnerabilidad a desastres.',
                    ],
                    [
                        'id' => 57,
                        'title' => 'Sistema Inteligente de Monitoreo de Riesgos',
                        'desc' => 'Desarrollar un sistema tecnológico y territorial de monitoreo continuo de amenazas.',
                    ],
                    [
                        'id' => 58,
                        'title' => 'Equipamiento y Servicios Urbanos',
                        'desc' =>
                            'Asegurar cobertura equitativa de infraestructura urbana (escuelas, centros de salud, parques).',
                    ],
                    [
                        'id' => 59,
                        'title' => 'Rehabilitación de Barrios Históricos',
                        'desc' => 'Recuperar barrios patrimoniales como espacios activos, turísticos y habitables.',
                    ],
                    [
                        'id' => 60,
                        'title' => 'Barrios Comunitarios Autogestionados',
                        'desc' => 'Fortalecer la organización barrial para mejorar y mantener su entorno urbano.',
                    ],
                    [
                        'id' => 61,
                        'title' => 'Regeneración y Mejora Integral de Barrios',
                        'desc' =>
                            'Intervenir barrios degradados con mejoras integrales: accesos, escaleras, pavimentos, seguridad.',
                    ],
                    [
                        'id' => 62,
                        'title' => 'Hábitat Verde y Urbanismo Ecosistémico',
                        'desc' => 'Incorporar criterios ecológicos y resilientes en la infraestructura barrial.',
                    ],
                    [
                        'id' => 63,
                        'title' => 'Red Distrital de Justicia y Mediación Barrial “Derechos cerca de casa”',
                        'desc' => 'Promover mecanismos accesibles de orientación legal, mediación y acceso a justicia.',
                    ],
                ];
            @endphp
            @foreach ($eje7 as $item)
                <div
                    class="card bg-base-100 shadow-md hover:shadow-xl transition-all duration-300 border-l-4 border-orange-500 group">
                    <div class="card-body">
                        <div class="flex justify-between items-start mb-2">
                            <span class="badge badge-outline font-mono text-sm font-bold">#{{ $item['id'] }}</span>
                            <i data-lucide="map"
                                class="w-5 h-5 text-orange-500 opacity-50 group-hover:opacity-100 transition-opacity"></i>
                        </div>
                        <h3 class="card-title text-lg leading-snug mb-2 group-hover:text-orange-500 transition-colors">
                            {{ $item['title'] }}</h3>
                        <p class="text-base text-base-content/70">{{ $item['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- EJE VIII --}}
    <section id="eje-8" class="scroll-mt-10">
        <div class="text-center mb-10">
            <div class="badge badge-lg mb-4 p-4 font-bold bg-cyan-500 text-white border-cyan-500">EJE VIII</div>
            <h2 class="text-4xl font-bold text-base-content mb-2">Ciudad Conectada</h2>
            <h3 class="text-xl text-cyan-500 font-medium uppercase tracking-widest">Ciudad que Integra</h3>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @php
                $eje8 = [
                    [
                        'id' => 64,
                        'title' => 'Movilidad Urbana Sostenible',
                        'desc' =>
                            'Fomentar modos activos y sostenibles de transporte (peatonal, ciclístico y multimodal) en todos los distritos.',
                    ],
                    [
                        'id' => 65,
                        'title' => 'Sistema Integrado de Transporte Público',
                        'desc' =>
                            'Articular un sistema multimodal de transporte público con integración tarifaria, física, operativa y tecnológica.',
                    ],
                    [
                        'id' => 66,
                        'title' => 'Ordenamiento del Transporte Público Colectivo',
                        'desc' =>
                            'Reestructurar el sistema de transporte urbano (minibuses, buses, trufis) con criterios de calidad, rutas eficientes y formalización.',
                    ],
                    [
                        'id' => 67,
                        'title' => 'Logística Urbana Inteligente',
                        'desc' =>
                            'Modernizar la infraestructura urbana para el flujo de bienes, servicios y vehículos: paradas, semáforos, sensores, vías, horarios.',
                    ],
                    [
                        'id' => 68,
                        'title' => 'Infraestructura Vial Estratégica',
                        'desc' =>
                            'Desarrollar vías urbanas y metropolitanas con criterios de resiliencia, conectividad y mantenimiento inteligente.',
                    ],
                    [
                        'id' => 69,
                        'title' => 'Parqueo y Control del Espacio Público Vial',
                        'desc' =>
                            'Regular el uso del espacio urbano para vehículos y comercio informal mediante infraestructura de parqueo y control digital.',
                    ],
                    [
                        'id' => 70,
                        'title' => 'Control del Transporte Interciudad y Fronteras Urbanas',
                        'desc' =>
                            'Controlar el ingreso y salida de transporte entre municipios del área metropolitana con criterios técnicos y fiscales.',
                    ],
                    [
                        'id' => 71,
                        'title' => 'Caminos Distritales y Rurales',
                        'desc' =>
                            'Mejorar la conectividad de barrios periféricos y zonas rurales con caminos resilientes y de bajo mantenimiento.',
                    ],
                    [
                        'id' => 72,
                        'title' => 'Seguridad y Cultura Vial',
                        'desc' =>
                            'Prevenir siniestros con educación vial, campañas, infraestructura segura y control electrónico.',
                    ],
                    [
                        'id' => 73,
                        'title' => 'Movilidad Inclusiva y Accesibilidad Universal',
                        'desc' =>
                            'Garantizar que todos los modos de transporte y el espacio público sean accesibles para personas con discapacidad, niños y mayores.',
                    ],
                    [
                        'id' => 74,
                        'title' => 'Gestión Vehicular y Revisión Técnica Digital',
                        'desc' =>
                            'Modernizar el sistema de control y registro de vehículos mediante tecnologías inteligentes.',
                    ],
                    [
                        'id' => 75,
                        'title' => 'Centralidades Urbanas',
                        'desc' =>
                            'Acercar servicios, empleo, comercio y espacios públicos a los barrios, equilibrando el desarrollo territorial y reduciendo desplazamientos.',
                    ],
                    [
                        'id' => 76,
                        'title' => 'Convenios público - Privados para transporte',
                        'desc' =>
                            'Incorporar inversión y gestión privada para mejorar la cobertura, calidad y eficiencia del transporte, con reglas claras y enfoque en resultados.',
                    ],
                    [
                        'id' => 77,
                        'title' => 'Movilidad Activa',
                        'desc' =>
                            'Impulsar caminar y usar bicicleta de forma segura para mejorar la salud, reducir contaminación y recuperar el espacio público para las personas.',
                    ],
                ];
            @endphp
            @foreach ($eje8 as $item)
                <div
                    class="card bg-base-100 shadow-md hover:shadow-xl transition-all duration-300 border-l-4 border-cyan-500 group">
                    <div class="card-body">
                        <div class="flex justify-between items-start mb-2">
                            <span class="badge badge-outline font-mono text-sm font-bold">#{{ $item['id'] }}</span>
                            <i data-lucide="bus"
                                class="w-5 h-5 text-cyan-500 opacity-50 group-hover:opacity-100 transition-opacity"></i>
                        </div>
                        <h3 class="card-title text-lg leading-snug mb-2 group-hover:text-cyan-500 transition-colors">
                            {{ $item['title'] }}</h3>
                        <p class="text-base text-base-content/70">{{ $item['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- EJE IX --}}
    <section id="eje-9" class="scroll-mt-10">
        <div class="text-center mb-10">
            <div class="badge badge-lg mb-4 p-4 font-bold bg-green-500 text-white border-green-500">EJE IX</div>
            <h2 class="text-4xl font-bold text-base-content mb-2">Ciudad Verde</h2>
            <h3 class="text-xl text-green-500 font-medium uppercase tracking-widest">Ciudad que Respira</h3>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @php
                $eje9 = [
                    [
                        'id' => 78,
                        'title' => 'Gestión Ambiental Integral Urbana',
                        'desc' =>
                            'Fortalecer la institucionalidad ambiental y la regulación de impactos ambientales en todo el municipio.',
                    ],
                    [
                        'id' => 79,
                        'title' => 'Áreas Verdes y Parques Urbanos',
                        'desc' =>
                            'Rehabilitar, mantener y ampliar las áreas verdes urbanas en todos los distritos con participación comunitaria.',
                    ],
                    [
                        'id' => 80,
                        'title' => 'Reforestación Participativa y Conservación Urbana',
                        'desc' =>
                            'Reforestar cerros, quebradas y zonas de riesgo con especies nativas y redes vecinales.',
                    ],
                    [
                        'id' => 81,
                        'title' => 'Adaptación Climática Urbana y Gestión Hídrica',
                        'desc' =>
                            'Implementar infraestructura natural y resiliente para mitigar sequías, lluvias extremas y calor urbano.',
                    ],
                    [
                        'id' => 82,
                        'title' => 'Energías Renovables y Eficiencia Energética',
                        'desc' =>
                            'Promover la transición energética en instalaciones municipales y hogares vulnerables.',
                    ],
                    [
                        'id' => 83,
                        'title' => 'Gestión Integral de Residuos Sólidos',
                        'desc' =>
                            'Fortalecer la gestión desde la separación, recolección, tratamiento hasta el destino final.',
                    ],
                    [
                        'id' => 84,
                        'title' => 'Economía Circular y Reciclaje Inclusivo',
                        'desc' =>
                            'Impulsar modelos productivos basados en reciclaje, reutilización y cierre de ciclos.',
                    ],
                    [
                        'id' => 85,
                        'title' => 'Centro Metropolitano de Residuos y Economía Verde',
                        'desc' =>
                            'Crear un centro integral metropolitano para gestión de residuos, compostaje y reciclaje.',
                    ],
                    [
                        'id' => 86,
                        'title' => 'Agricultura Urbana y Soberanía Alimentaria',
                        'desc' =>
                            'Fomentar huertos urbanos, agricultura familiar y circuitos cortos de alimentación saludable.',
                    ],
                    [
                        'id' => 87,
                        'title' => 'Educación y Cultura Ambiental Comunitaria',
                        'desc' => 'Generar conciencia ambiental ciudadana desde el hogar, las escuelas y los barrios.',
                    ],
                    [
                        'id' => 88,
                        'title' => 'Biodiversidad Urbana y Protección de Fauna Silvestre',
                        'desc' =>
                            'Proteger especies nativas, corredores biológicos y fauna silvestre en zonas periurbanas.',
                    ],
                ];
            @endphp
            @foreach ($eje9 as $item)
                <div
                    class="card bg-base-100 shadow-md hover:shadow-xl transition-all duration-300 border-l-4 border-green-500 group">
                    <div class="card-body">
                        <div class="flex justify-between items-start mb-2">
                            <span class="badge badge-outline font-mono text-sm font-bold">#{{ $item['id'] }}</span>
                            <i data-lucide="leaf"
                                class="w-5 h-5 text-green-500 opacity-50 group-hover:opacity-100 transition-opacity"></i>
                        </div>
                        <h3 class="card-title text-lg leading-snug mb-2 group-hover:text-green-500 transition-colors">
                            {{ $item['title'] }}</h3>
                        <p class="text-base text-base-content/70">{{ $item['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- EJE X --}}
    <section id="eje-10" class="scroll-mt-10">
        <div class="text-center mb-10">
            <div class="badge badge-lg mb-4 p-4 font-bold bg-indigo-500 text-white border-indigo-500">EJE X</div>
            <h2 class="text-4xl font-bold text-base-content mb-2">Ciudad Metropolitana</h2>
            <h3 class="text-xl text-indigo-500 font-medium uppercase tracking-widest">Ciudad sin Fronteras</h3>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @php
                $eje10 = [
                    [
                        'id' => 89,
                        'title' => 'Planes Metropolitanos de Desarrollo Urbano y Territorial',
                        'desc' =>
                            'Formular e implementar planes conjuntos con municipios vecinos (La Paz, El Alto, Viacha, Achocalla, Mecapaca) para desarrollo armónico.',
                    ],
                    [
                        'id' => 90,
                        'title' => 'Mancomunidades Productivas y Ambientales',
                        'desc' =>
                            'Articular territorios rurales y periurbanos en torno a economías locales, biodiversidad y cadenas de valor.',
                    ],
                    [
                        'id' => 91,
                        'title' => 'Centralidades Metropolitanas',
                        'desc' =>
                            'Revalorizar zonas limítrofes entre municipios como nuevos polos de desarrollo inclusivo.',
                    ],
                    [
                        'id' => 92,
                        'title' => 'Cultura e Identidad Metropolitana',
                        'desc' => 'Fomentar una identidad compartida entre los habitantes del área metropolitana.',
                    ],
                    [
                        'id' => 93,
                        'title' => 'Gobernanza Metropolitana y Coordinación Intermunicipal',
                        'desc' =>
                            'Institucionalizar mecanismos de coordinación entre municipios para planificación, ejecución y evaluación conjunta.',
                    ],
                    [
                        'id' => 94,
                        'title' => 'Gestión Metropolitana de Servicios Básicos y Ambientales',
                        'desc' => 'Ejecutar políticas conjuntas para residuos, agua, energía, movilidad y riesgos.',
                    ],
                    [
                        'id' => 95,
                        'title' => 'Integración Metropolitana de Transporte y Logística',
                        'desc' =>
                            'Promover la interoperabilidad tarifaria, física y administrativa entre sistemas de transporte urbano e interurbano.',
                    ],
                    [
                        'id' => 96,
                        'title' => 'Centro Metropolitano de Soluciones Urbanas – CEMSU',
                        'desc' =>
                            'Instalar una plataforma técnica conjunta para generar soluciones urbanas basadas en evidencia y participación.',
                    ],
                    [
                        'id' => 97,
                        'title' => 'Red Campo-Ciudad',
                        'desc' =>
                            'Construir una alianza estratégica y solidaria entre el área urbana y rural, que reconozca su interdependencia, fortalezca la producción local, garantice la seguridad alimentaria, y promueva el desarrollo integral, justo y sostenible de ambos territorios. Mejorar las vías de conexión con las áreas rurales del Municipio',
                    ],
                    [
                        'id' => 98,
                        'title' => 'Infraestructura Metropolitana',
                        'desc' =>
                            'Desarrollar y coordinar infraestructura estratégica compartida que soporte movilidad, servicios, producción y gestión de riesgos a escala metropolitana.',
                    ],
                    [
                        'id' => 99,
                        'title' => 'Red de Apoyo municipal',
                        'desc' =>
                            'Fortalecer la cooperación técnica, operativa y solidaria entre municipios para responder de manera conjunta a emergencias, servicios y proyectos comunes.',
                    ],
                    [
                        'id' => 100,
                        'title' => 'Fondo Metropolitano de Inversión y Valor Compartido (FMIVC)',
                        'desc' =>
                            'Crear un vehículo financiero y de gestión de proyectos para movilizar recursos (públicos, privados, internacionales y comunitarios) hacia infraestructura metropolitana prioritaria, con reglas claras de cofinanciamiento, captura de valor y asignación por resultados.',
                    ],
                ];
            @endphp
            @foreach ($eje10 as $item)
                <div
                    class="card bg-base-100 shadow-md hover:shadow-xl transition-all duration-300 border-l-4 border-indigo-500 group">
                    <div class="card-body">
                        <div class="flex justify-between items-start mb-2">
                            <span class="badge badge-outline font-mono text-sm font-bold">#{{ $item['id'] }}</span>
                            <i data-lucide="globe"
                                class="w-5 h-5 text-indigo-500 opacity-50 group-hover:opacity-100 transition-opacity"></i>
                        </div>
                        <h3 class="card-title text-lg leading-snug mb-2 group-hover:text-indigo-500 transition-colors">
                            {{ $item['title'] }}</h3>
                        <p class="text-base text-base-content/70">{{ $item['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

</div>
