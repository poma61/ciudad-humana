{{-- 1. Apoyo Vecinal --}}
<x-card
    class="group h-full bg-base-100 border border-base-200 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 rounded-2xl overflow-hidden animate__animated animate__fadeInUp">
    {{-- CORRECCIÓN: Usamos name="img" y pasamos src y class como atributos del slot --}}
    <x-slot name="img" src="{{ asset('assets/img/ayuda-vecino.jpg') }}"
        class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-105"></x-slot>

    <x-slot name="title">
        <div class="flex items-center gap-3 mb-2">
            <div class="p-2 bg-primary/10 rounded-lg text-primary">
                <i data-lucide="users" class="w-6 h-6"></i>
            </div>
            <h3 class="text-xl font-bold text-base-content">Programa de Apoyo Vecinal</h3>
        </div>
    </x-slot>

    <x-slot name="text">
        <p class="text-base-content/70 leading-relaxed text-base">
            Este programa ofrece asesoramiento a nuestros vecinos sobre temas importantes como riesgos, seguridad
            ciudadana, planificación operativa anual (POA) y derecho propietario. Nuestro equipo de expertos se desplaza
            a los barrios para responder a las solicitudes de la comunidad, brindando orientación y apoyo directo para
            mejorar la calidad de vida de todos.
        </p>
    </x-slot>
</x-card>

{{-- 2. Ciudad de la Juventud --}}
<x-card
    class="group h-full bg-base-100 border border-base-200 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 rounded-2xl overflow-hidden animate__animated animate__fadeInUp"
    style="animation-delay: 100ms;">
    <x-slot name="img" src="{{ asset('assets/img/juventud.JPG') }}"
        class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-105"></x-slot>

    <x-slot name="title">
        <div class="flex items-center gap-3 mb-2">
            <div class="p-2 bg-secondary/10 rounded-lg text-secondary">
                <i data-lucide="zap" class="w-6 h-6"></i>
            </div>
            <h3 class="text-xl font-bold text-base-content">Ciudad de la Juventud</h3>
        </div>
    </x-slot>

    <x-slot name="text">
        <p class="text-base-content/70 leading-relaxed text-base">
            Creemos en el potencial de la juventud como motor de cambio. A través de ferias, encuentros y
            conversatorios, les proporcionamos plataformas para que se expresen y muestren sus habilidades. Este
            programa fomenta el liderazgo juvenil, permitiendo que los jóvenes demuestren que son protagonistas en el
            desarrollo de su comunidad y del país.
        </p>
    </x-slot>
</x-card>

{{-- 3. Juventud con Propósito --}}
<x-card
    class="group h-full bg-base-100 border border-base-200 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 rounded-2xl overflow-hidden animate__animated animate__fadeInUp"
    style="animation-delay: 200ms;">
    <x-slot name="img" src="{{ asset('assets/img/juventud-proposito.jpg') }}"
        class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-105"></x-slot>

    <x-slot name="title">
        <div class="flex items-center gap-3 mb-2">
            <div class="p-2 bg-accent/10 rounded-lg text-accent">
                <i data-lucide="compass" class="w-6 h-6"></i>
            </div>
            <h3 class="text-xl font-bold text-base-content">Juventud con Propósito</h3>
        </div>
    </x-slot>

    <x-slot name="text">
        <p class="text-base-content/70 leading-relaxed text-base">
            A través de conferencias inspiradoras y talleres de liderazgo, este programa está diseñado para motivar a
            los jóvenes a encontrar un propósito en sus vidas. Les ayudamos a identificar sus talentos y a potenciar sus
            habilidades, guiándolos en su camino hacia un futuro exitoso y pleno.
        </p>
    </x-slot>
</x-card>

{{-- 4. Turismo de Altura --}}
<x-card
    class="group h-full bg-base-100 border border-base-200 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 rounded-2xl overflow-hidden animate__animated animate__fadeInUp"
    style="animation-delay: 300ms;">
    <x-slot name="img" src="{{ asset('assets/img/teleferico-amarillo.jpg') }}"
        class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-105"></x-slot>

    <x-slot name="title">
        <div class="flex items-center gap-3 mb-2">
            <div class="p-2 bg-info/10 rounded-lg text-info">
                <i data-lucide="mountain" class="w-6 h-6"></i>
            </div>
            <h3 class="text-xl font-bold text-base-content">Turismo de Altura</h3>
        </div>
    </x-slot>

    <x-slot name="text">
        <p class="text-base-content/70 leading-relaxed text-base">
            Este ambicioso proyecto busca fomentar el turismo en Bolivia, desarrollando una estrategia nacional que no
            solo promueva nuestro país en mercados internacionales, sino que también genere empleo y ingresos en
            divisas. Queremos que el turismo se convierta en un pilar de la economía boliviana, mejorando el bienestar
            de las comunidades locales y promoviendo la cultura y biodiversidad.
        </p>
    </x-slot>
</x-card>

{{-- 5. Ciudad Pet Friendly --}}
<x-card
    class="group h-full bg-base-100 border border-base-200 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 rounded-2xl overflow-hidden animate__animated animate__fadeInUp"
    style="animation-delay: 400ms;">
    <x-slot name="img" src="{{ asset('assets/img/pet.jpg') }}"
        class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-105"></x-slot>

    <x-slot name="title">
        <div class="flex items-center gap-3 mb-2">
            <div class="p-2 bg-warning/10 rounded-lg text-warning">
                <i data-lucide="dog" class="w-6 h-6"></i>
            </div>
            <h3 class="text-xl font-bold text-base-content">Ciudad Pet Friendly</h3>
        </div>
    </x-slot>

    <x-slot name="text">
        <p class="text-base-content/70 leading-relaxed text-base">
            En Innovación Humana, consideramos a los animales como parte de nuestra familia. Este programa tiene como
            objetivo erradicar el abandono y el maltrato animal. Los voluntarios se involucran en actividades de
            rescate, adopción y concienciación sobre el cuidado de las mascotas, asegurando que cada perrito y gatito
            tenga un hogar amoroso y seguro.
        </p>
    </x-slot>
</x-card>

{{-- 6. Ciudad Eficiente --}}
<x-card
    class="group h-full bg-base-100 border border-base-200 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 rounded-2xl overflow-hidden animate__animated animate__fadeInUp"
    style="animation-delay: 500ms;">
    <x-slot name="img" src="{{ asset('assets/img/transparente.JPG') }}"
        class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-105"></x-slot>

    <x-slot name="title">
        <div class="flex items-center gap-3 mb-2">
            <div class="p-2 bg-error/10 rounded-lg text-error">
                <i data-lucide="shield-check" class="w-6 h-6"></i>
            </div>
            <h3 class="text-xl font-bold text-base-content">Ciudad Eficiente y Transparente</h3>
        </div>
    </x-slot>

    <x-slot name="text">
        <p class="text-base-content/70 leading-relaxed text-base">
            Fomentamos la participación ciudadana mediante la denuncia de hechos irregulares o incumplimientos en las
            obras públicas. Este programa proporciona herramientas y asesoramiento para que los ciudadanos exijan a las
            autoridades el cumplimiento de sus deberes, promoviendo una gestión más transparente y eficiente.
        </p>
    </x-slot>
</x-card>

{{-- 7. SATIV --}}
<x-card
    class="group h-full bg-base-100 border border-base-200 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 rounded-2xl overflow-hidden animate__animated animate__fadeInUp"
    style="animation-delay: 0ms;">
    <x-slot name="img" src="{{ asset('assets/img/alerta.jpg') }}"
        class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-105"></x-slot>

    <x-slot name="title">
        <div class="flex items-center gap-3 mb-2">
            <div class="p-2 bg-primary/10 rounded-lg text-primary">
                <i data-lucide="siren" class="w-6 h-6"></i>
            </div>
            <h3 class="text-xl font-bold text-base-content">Sistema de Alerta Temprana con Información Vecinal - SATIV
            </h3>
        </div>
    </x-slot>

    <x-slot name="text">
        <p class="text-base-content/70 leading-relaxed text-base">
            Implementamos una red en diferentes barrios para monitorear y reportar situaciones de riesgo como
            deslizamientos o inundaciones. A través de esta iniciativa, capacitamos a los vecinos para que puedan
            identificar y comunicar emergencias, asegurando una respuesta rápida y eficaz ante posibles desastres.
        </p>
    </x-slot>
</x-card>

{{-- 8. Instituto del Emprendimiento --}}
<x-card
    class="group h-full bg-base-100 border border-base-200 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 rounded-2xl overflow-hidden animate__animated animate__fadeInUp"
    style="animation-delay: 100ms;">
    <x-slot name="img" src="{{ asset('assets/img/taller.jpg') }}"
        class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-105"></x-slot>

    <x-slot name="title">
        <div class="flex items-center gap-3 mb-2">
            <div class="p-2 bg-secondary/10 rounded-lg text-secondary">
                <i data-lucide="briefcase" class="w-6 h-6"></i>
            </div>
            <h3 class="text-xl font-bold text-base-content">Instituto del Emprendimiento</h3>
        </div>
    </x-slot>

    <x-slot name="text">
        <p class="text-base-content/70 leading-relaxed text-base">
            Este proyecto ofrece talleres de capacitación en habilidades blandas, liderazgo y actualización tecnológica.
            Nuestro objetivo es empoderar a los emprendedores locales con las herramientas necesarias para que
            desarrollen sus proyectos, mejoren su competitividad y contribuyan al crecimiento económico de la comunidad.
        </p>
    </x-slot>
</x-card>

{{-- 9. Te Estamos Buscando --}}
<x-card
    class="group h-full bg-base-100 border border-base-200 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 rounded-2xl overflow-hidden animate__animated animate__fadeInUp"
    style="animation-delay: 200ms;">
    <x-slot name="img" src="{{ asset('assets/img/buscando.jpg') }}"
        class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-105"></x-slot>

    <x-slot name="title">
        <div class="flex items-center gap-3 mb-2">
            <div class="p-2 bg-accent/10 rounded-lg text-accent">
                <i data-lucide="search" class="w-6 h-6"></i>
            </div>
            <h3 class="text-xl font-bold text-base-content">Te Estamos Buscando</h3>
        </div>
    </x-slot>

    <x-slot name="text">
        <p class="text-base-content/70 leading-relaxed text-base">
            Este programa se enfoca en generar una red de búsqueda inmediata para localizar a personas desaparecidas.
            Con la colaboración de la comunidad, movilizamos las redes e impulsamos la comunicación para asegurar que
            cada caso reciba la atención necesaria, ayudando a reunir a las familias en el menor tiempo posible.
        </p>
    </x-slot>
</x-card>

{{-- 10. Útiles para el Futuro --}}
<x-card
    class="group h-full bg-base-100 border border-base-200 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 rounded-2xl overflow-hidden animate__animated animate__fadeInUp"
    style="animation-delay: 300ms;">
    <x-slot name="img" src="{{ asset('assets/img/utiles.JPG') }}"
        class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-105"></x-slot>

    <x-slot name="title">
        <div class="flex items-center gap-3 mb-2">
            <div class="p-2 bg-info/10 rounded-lg text-info">
                <i data-lucide="book-open" class="w-6 h-6"></i>
            </div>
            <h3 class="text-xl font-bold text-base-content">Útiles para el Futuro</h3>
        </div>
    </x-slot>

    <x-slot name="text">
        <p class="text-base-content/70 leading-relaxed text-base">
            Recaudamos materiales escolares como libros, cuadernos y útiles para apoyar a estudiantes de familias con
            recursos limitados. Creemos que todos los niños merecen una educación de calidad y este programa busca
            garantizar que tengan las herramientas necesarias para aprender y crecer.
        </p>
    </x-slot>
</x-card>

{{-- 11. Ciudad Vital --}}
<x-card
    class="group h-full bg-base-100 border border-base-200 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 rounded-2xl overflow-hidden animate__animated animate__fadeInUp"
    style="animation-delay: 400ms;">
    <x-slot name="img" src="{{ asset('assets/img/vital.jpg') }}"
        class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-105"></x-slot>

    <x-slot name="title">
        <div class="flex items-center gap-3 mb-2">
            <div class="p-2 bg-success/10 rounded-lg text-success">
                <i data-lucide="heart-pulse" class="w-6 h-6"></i>
            </div>
            <h3 class="text-xl font-bold text-base-content">Ciudad Vital</h3>
        </div>
    </x-slot>

    <x-slot name="text">
        <p class="text-base-content/70 leading-relaxed text-base">
            Con la colaboración de médicos voluntarios, organizamos jornadas de salud en comunidades con menor acceso a
            servicios médicos. Estas ferias ofrecen consultas y diagnósticos, asegurando que las personas de menores
            recursos tengan acceso a atención médica básica.
        </p>
    </x-slot>
</x-card>

{{-- 12. Ponte en Mis Zapatos --}}
<x-card
    class="group h-full bg-base-100 border border-base-200 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 rounded-2xl overflow-hidden animate__animated animate__fadeInUp"
    style="animation-delay: 500ms;">
    <x-slot name="img" src="{{ asset('assets/img/ponte-en-mis-zapatos.jpg') }}"
        class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-105"></x-slot>

    <x-slot name="title">
        <div class="flex items-center gap-3 mb-2">
            <div class="p-2 bg-warning/10 rounded-lg text-warning">
                <i data-lucide="footprints" class="w-6 h-6"></i>
            </div>
            <h3 class="text-xl font-bold text-base-content">Ponte en Mis Zapatos</h3>
        </div>
    </x-slot>

    <x-slot name="text">
        <p class="text-base-content/70 leading-relaxed text-base">
            Esta iniciativa tiene como objetivo recolectar zapatos nuevos que se donarán a niñas y niños de hogares y
            barrios de bajos recursos durante la temporada navideña. Con tu apoyo, podemos llevar alegría y confort a
            quienes más lo necesitan en esta época especial.
        </p>
    </x-slot>
</x-card>

{{-- 13. Corazones Solidarios --}}
<x-card
    class="group h-full bg-base-100 border border-base-200 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 rounded-2xl overflow-hidden animate__animated animate__fadeInUp"
    style="animation-delay: 0ms;">
    <x-slot name="img" src="{{ asset('assets/img/abuelito.png') }}"
        class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-105"></x-slot>

    <x-slot name="title">
        <div class="flex items-center gap-3 mb-2">
            <div class="p-2 bg-error/10 rounded-lg text-error">
                <i data-lucide="heart-handshake" class="w-6 h-6"></i>
            </div>
            <h3 class="text-xl font-bold text-base-content">Corazones Solidarios</h3>
        </div>
    </x-slot>

    <x-slot name="text">
        <p class="text-base-content/70 leading-relaxed text-base">
            En diversas fechas y circunstancias, organizamos actividades de apoyo como la recolección de ropa, alimentos
            y juguetes. También realizamos conciertos y eventos para recaudar recursos que serán entregados a las
            personas más necesitadas o a quienes han sufrido desastres naturales.
        </p>
    </x-slot>
</x-card>

{{-- 14. Ciudad Verde --}}
<x-card
    class="group h-full bg-base-100 border border-base-200 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 rounded-2xl overflow-hidden animate__animated animate__fadeInUp"
    style="animation-delay: 100ms;">
    <x-slot name="img" src="{{ asset('assets/img/planta-y-cesar.JPG') }}"
        class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-105"></x-slot>

    <x-slot name="title">
        <div class="flex items-center gap-3 mb-2">
            <div class="p-2 bg-success/10 rounded-lg text-success">
                <i data-lucide="leaf" class="w-6 h-6"></i>
            </div>
            <h3 class="text-xl font-bold text-base-content">Ciudad Verde</h3>
        </div>
    </x-slot>

    <x-slot name="text">
        <p class="text-base-content/70 leading-relaxed text-base">
            En Innovación Humana, estamos comprometidos con la protección del medio ambiente. Realizamos actividades de
            arborización, reciclaje y cuidado del agua. También defendemos el medio ambiente de amenazas como la minería
            ilegal, abogando por un manejo responsable de los recursos naturales y el bienestar de nuestra comunidad.
        </p>
    </x-slot>
</x-card>

{{-- 15. Ciudad Cultural --}}
<x-card
    class="group h-full bg-base-100 border border-base-200 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 rounded-2xl overflow-hidden animate__animated animate__fadeInUp"
    style="animation-delay: 200ms;">
    <x-slot name="img" src="{{ asset('assets/img/cultural.png') }}"
        class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-105"></x-slot>

    <x-slot name="title">
        <div class="flex items-center gap-3 mb-2">
            <div class="p-2 bg-secondary/10 rounded-lg text-secondary">
                <i data-lucide="music" class="w-6 h-6"></i>
            </div>
            <h3 class="text-xl font-bold text-base-content">Ciudad Cultural</h3>
        </div>
    </x-slot>

    <x-slot name="text">
        <p class="text-base-content/70 leading-relaxed text-base">
            Promovemos la música y la cultura como herramientas para conectar a la ciudadanía y mejorar la calidad de
            vida. A través de eventos culturales y artísticos, buscamos fortalecer los lazos comunitarios y celebrar la
            riqueza cultural de nuestra ciudad.
        </p>
    </x-slot>
</x-card>
