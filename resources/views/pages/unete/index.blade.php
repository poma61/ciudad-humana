@extends('layouts.app')
@section('title', 'Únete - ')

@section('main-content')
    {{-- SECCIÓN 1: ¿CÓMO SER PARTE? --}}
    <section class="pt-30 px-4 max-w-6xl mx-auto">
        <div class="text-center mb-12 animate__animated animate__fadeIn">
            <h2 class="text-3xl font-bold text-shadow-lg/20 mb-6">
                ¿Cómo ser parte de Innovación Humana?
            </h2>
            <p class="text-base max-w-4xl mx-auto">
                ¡Únete a nosotros en este emocionante viaje hacia un futuro mejor! Ser parte de Innovación Humana no solo es
                un
                compromiso con tu comunidad, sino también una oportunidad para contribuir al bienestar de todos. Aquí te
                mostramos cómo puedes involucrarte:
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
            <div class="card bg-base-100 shadow-xl border border-base-200 hover:shadow-2xl transition-all duration-300">
                <div class="card-body items-center text-center">
                    <div class="p-3 bg-primary/10 rounded-full mb-2">
                        <i data-lucide="hand-heart" class="w-8 h-8 text-primary"></i>
                    </div>
                    <h3 class="card-title">I. Voluntariado</h3>
                    <p class="text-base">Dedica tu tiempo y habilidades para ayudar en nuestros proyectos. Cada mano cuenta
                        y cada esfuerzo suma.</p>
                </div>
            </div>

            <div class="card bg-base-100 shadow-xl border border-base-200 hover:shadow-2xl transition-all duration-300">
                <div class="card-body items-center text-center">
                    <div class="p-3 bg-secondary/10 rounded-full mb-2">
                        <i data-lucide="lightbulb" class="w-8 h-8 text-secondary"></i>
                    </div>
                    <h3 class="card-title">II. Ideas Innovadoras</h3>
                    <p class="text-base">Comparte tus propuestas y visión para construir una ciudad más inclusiva y
                        sostenible. ¡Tus ideas pueden marcar la diferencia!</p>
                </div>
            </div>

            <div class="card bg-base-100 shadow-xl border border-base-200 hover:shadow-2xl transition-all duration-300">
                <div class="card-body items-center text-center">
                    <div class="p-3 bg-accent/10 rounded-full mb-2">
                        <i data-lucide="calendar-days" class="w-8 h-8 text-accent"></i>
                    </div>
                    <h3 class="card-title">III. Eventos y Actividades</h3>
                    <p class="text-base">Participa en nuestras actividades, talleres y foros. Tu presencia es vital para
                        fortalecer el tejido social y construir la comunidad que soñamos.</p>
                </div>
            </div>

            <div class="card bg-base-100 shadow-xl border border-base-200 hover:shadow-2xl transition-all duration-300">
                <div class="card-body items-center text-center">
                    <div class="p-3 bg-info/10 rounded-full mb-2">
                        <i data-lucide="megaphone" class="w-8 h-8 text-info"></i>
                    </div>
                    <h3 class="card-title">IV. Difusión</h3>
                    <p class="text-base">Ayúdanos a correr la voz. Comparte nuestros proyectos y mensajes en tus redes
                        sociales. Juntos podemos llegar a más corazones y mentes.</p>
                </div>
            </div>

            <div
                class="card bg-base-100 shadow-xl border border-base-200 hover:shadow-2xl transition-all duration-300 md:col-span-2 lg:col-span-1">
                <div class="card-body items-center text-center">
                    <div class="p-3 bg-success/10 rounded-full mb-2">
                        <i data-lucide="gift" class="w-8 h-8 text-success"></i>
                    </div>
                    <h3 class="card-title">V. Contribuciones</h3>
                    <p class="text-base">Ya sea con donaciones de recursos, servicios o conocimiento, cada aporte es un paso
                        hacia el cambio que queremos ver.</p>
                </div>
            </div>
        </div>

        <div class="alert  border-primary text-center block">
            <span class="text-base">
                ¡La transformación comienza contigo! Tu compromiso y entusiasmo son fundamentales para hacer de nuestra
                ciudad un lugar más humano y vibrante. ¡Únete a Innovación Humana y sé parte de esta maravillosa aventura!
            </span>
        </div>
    </section>

    {{-- SECCIÓN 2: VOLUNTARIADO DETALLADO --}}
    <section class="bg-base-200 py-16 px-4 md:px-8">
        <div class="max-w-6xl mx-auto">

            <div class="mb-10 text-center md:text-left">
                <h2 class="text-3xl font-bold mb-4 flex items-center justify-center md:justify-start gap-2">
                    <i data-lucide="users" class="w-8 h-8"></i>
                    Voluntariado Innovación Humana
                </h2>
                <p class="mb-6 text-base">
                    En Innovación Humana, creemos que cada uno de nosotros tiene algo valioso que aportar para mejorar
                    nuestra
                    ciudad. Nuestro programa de voluntariado invita a todos: comunicadores, estudiantes, profesionales, y
                    cualquier persona dispuesta a compartir su tiempo, conocimientos y energía. Juntos, podemos transformar
                    nuestro entorno, apoyar a los más vulnerables y construir una ciudad más inclusiva, solidaria y humana.
                </p>
                <div class="divider"></div>
                <h3 class="text-2xl font-bold text-center text-primary mt-8 mb-8">¿Qué Puedes Hacer?</h3>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

                {{-- 1. Proyectos Urbanos --}}
                <div class="card bg-base-100 shadow-lg">
                    <div class="card-body">
                        <h4 class="card-title text-xl text-primary flex items-start gap-2">
                            <span
                                class="bg-primary text-primary-content rounded-full w-8 h-8 flex items-center justify-center text-base flex-shrink-0">1</span>
                            Participación en Proyectos Urbanos
                        </h4>
                        <ul class="list-disc list-outside ml-5 space-y-2 mt-2 text-base">
                            <li><strong>Apoyo en el Programa de Apoyo Vecinal - PAV:</strong> Únete y apoya a nuestros
                                expertos del PAV en áreas de Riesgos, Seguridad Ciudadana, POA o Derecho Propietario.</li>
                            <li><strong>Diseño Urbano y Arquitectura:</strong> Colabora en la planificación y desarrollo de
                                espacios públicos más seguros y accesibles para todos.</li>
                            <li><strong>Restauración de Barrios:</strong> Ayuda a renovar y embellecer áreas deterioradas
                                para crear espacios de convivencia más agradables.</li>
                            <li><strong>Movilidad Sostenible:</strong> Participa en campañas que promuevan el uso de
                                transporte alternativo, como bicicletas y transporte público ecoamigable.</li>
                            <li><strong>Monitoreo de Riesgos:</strong> Participa desde tu barrio en el equipo de Sistema de
                                Alerta Temprana con Información Vecinal – SATIV, realizando el monitoreo y reporte periódico
                                de diversas condiciones. Tu participación puede salvar vidas!!!</li>
                        </ul>
                    </div>
                </div>

                {{-- 2. Comunicación y Difusión --}}
                <div class="card bg-base-100 shadow-lg">
                    <div class="card-body">
                        <h4 class="card-title text-xl text-primary flex items-start gap-2">
                            <span
                                class="bg-primary text-primary-content rounded-full w-8 h-8 flex items-center justify-center text-base flex-shrink-0">2</span>
                            Proyectos de Comunicación y Difusión
                        </h4>
                        <ul class="list-disc list-outside ml-5 space-y-2 mt-2 text-base ">
                            <li><strong>Comunicación Social:</strong> Usa tus habilidades de comunicación para informar y
                                sensibilizar a la ciudadanía sobre temas clave como el medio ambiente, la inclusión y el
                                desarrollo urbano.</li>
                            <li><strong>Campañas Digitales:</strong> Ayuda a crear y difundir contenidos en redes sociales y
                                otros medios para promover los valores de Innovación Humana.</li>
                            <li><strong>Producción Audiovisual:</strong> Apoya la creación de videos, podcasts y contenido
                                multimedia que inspire el cambio social.</li>
                        </ul>
                    </div>
                </div>

                {{-- 3. Proyectos Solidarios --}}
                <div class="card bg-base-100 shadow-lg">
                    <div class="card-body">
                        <h4 class="card-title text-xl text-primary flex items-start gap-2">
                            <span
                                class="bg-primary text-primary-content rounded-full w-8 h-8 flex items-center justify-center text-base flex-shrink-0">3</span>
                            Proyectos Solidarios
                        </h4>
                        <ul class="list-disc list-outside ml-5 space-y-2 mt-2 text-base ">
                            <li><strong>Apoyo en actividades para los animalitos de la calle:</strong> Incorpórate al equipo
                                de Ciudad Pet Friendly se sentirá complacido en recibirte, para aunar esfuerzos y ampliar
                                las actividades en favor de los animalitos en situación de calle.</li>
                            <li><strong>Apoyo en Escuelas y Centros Educativos:</strong> Ofrece tutorías, talleres
                                educativos y actividades extracurriculares para niños y jóvenes en zonas vulnerables.</li>
                            <li><strong>Orfanatos y Hogares de Niños:</strong> Comparte tu tiempo brindando compañía, juegos
                                y actividades recreativas para niños que lo necesitan.</li>
                            <li><strong>Asilos y Centros de Adultos Mayores:</strong> Acompaña y brinda apoyo a personas
                                mayores, escuchando sus historias y haciendo que se sientan valoradas.</li>
                            <li><strong>Personas con Discapacidad:</strong> Colabora en programas de inclusión y apoyo para
                                personas con discapacidades, ayudándolas a participar activamente en la vida comunitaria.
                            </li>
                        </ul>
                    </div>
                </div>

                {{-- 4. Mantenimiento --}}
                <div class="card bg-base-100 shadow-lg">
                    <div class="card-body">
                        <h4 class="card-title text-xl text-primary flex items-start gap-2">
                            <span
                                class="bg-primary text-primary-content rounded-full w-8 h-8 flex items-center justify-center text-base flex-shrink-0">4</span>
                            Mantenimiento y Embellecimiento de Espacios Públicos
                        </h4>
                        <ul class="list-disc list-outside ml-5 space-y-2 mt-2 text-base ">
                            <li><strong>Jornadas de Limpieza:</strong> Únete a equipos de voluntarios para mantener limpias
                                nuestras plazas, parques y calles.</li>
                            <li><strong>Reforestación y Cuidado de Áreas Verdes:</strong> Ayuda a plantar árboles, cuidar
                                jardines comunitarios y promover un entorno más verde.</li>
                            <li><strong>Arte Urbano y Murales:</strong> Participa en la creación de murales que embellezcan
                                la ciudad y promuevan mensajes positivos.</li>
                        </ul>
                    </div>
                </div>

                {{-- 5. Asistencia en Eventos --}}
                <div class="card bg-base-100 shadow-lg">
                    <div class="card-body">
                        <h4 class="card-title text-xl text-primary flex items-start gap-2">
                            <span
                                class="bg-primary text-primary-content rounded-full w-8 h-8 flex items-center justify-center text-base flex-shrink-0">5</span>
                            Asistencia en Eventos Locales
                        </h4>
                        <ul class="list-disc list-outside ml-5 space-y-2 mt-2 text-base ">
                            <li><strong>Eventos Culturales y Recreativos:</strong> Colabora en la organización y desarrollo
                                de ferias, festivales y actividades recreativas que fomenten la cohesión social.</li>
                            <li><strong>Charlas y Talleres de Formación:</strong> Ofrece tu experiencia y conocimientos a
                                través de charlas o talleres en temas de desarrollo urbano, liderazgo juvenil,
                                sostenibilidad y más.</li>
                        </ul>
                    </div>
                </div>

                {{-- 6. Inclusión --}}
                <div class="card bg-base-100 shadow-lg">
                    <div class="card-body">
                        <h4 class="card-title text-xl text-primary flex items-start gap-2">
                            <span
                                class="bg-primary text-primary-content rounded-full w-8 h-8 flex items-center justify-center text-base flex-shrink-0">6</span>
                            Voluntariado en Proyectos de Inclusión
                        </h4>
                        <ul class="list-disc list-outside ml-5 space-y-2 mt-2 text-base ">
                            <li><strong>Integración de Comunidades Migrantes:</strong> Ayuda a organizar actividades que
                                promuevan la inclusión y participación de personas migrantes en la vida comunitaria.</li>
                            <li><strong>Apoyo Psicosocial:</strong> Brinda apoyo emocional y psicológico a quienes lo
                                necesiten, colaborando con profesionales de la salud mental.</li>
                        </ul>
                    </div>
                </div>

                {{-- 7. Innovación Social --}}
                <div class="card bg-base-100 shadow-lg md:col-span-2">
                    <div class="card-body">
                        <h4 class="card-title text-xl text-primary flex items-start gap-2">
                            <span
                                class="bg-primary text-primary-content rounded-full w-8 h-8 flex items-center justify-center text-base flex-shrink-0">7</span>
                            Proyectos de Innovación Social y Sostenibilidad
                        </h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-2">
                            <ul class="list-disc list-outside ml-5 space-y-2 text-base ">
                                <li><strong>Reciclaje y Educación Ambiental:</strong> Participa en proyectos de educación
                                    ambiental, enseñando prácticas de reciclaje y manejo de residuos.</li>
                            </ul>
                            <ul class="list-disc list-outside ml-5 space-y-2 text-base ">
                                <li><strong>Energías Renovables:</strong> Colabora en la implementación de soluciones
                                    energéticas limpias y sostenibles para comunidades locales.</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
