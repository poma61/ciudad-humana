 <section class="bloque py-16 bg-base-100">
     <h2 class="text-3xl font-bold text-center mb-12 animate__animated animate__fadeIn text-shadow-lg/20">
         Explora Innovación Humana
     </h2>

     <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto px-4">

         <a href="{{ route('n-quienes-somos') }}" 
             class="card bg-base-200 shadow-xl p-6 hover:shadow-2xl transition animate__animated animate__fadeInUp">
             <img src="{{ asset('assets/img/ch-04.png') }}" class="rounded mb-4 w-full h-60 object-cover" alt="">
             <h3 class="text-xl font-bold">¿Quiénes Somos?</h3>
             <p class="mt-2 text-base">Conoce nuestra historia, visión, misión y valores.</p>
         </a>

         <a href="{{ route('n-ch-en-accion') }}"
             class="card bg-base-200 shadow-xl p-6 hover:shadow-2xl transition animate__animated animate__fadeInUp animate__delay-1s">
             <img src="{{ asset('assets/img/ch-05.jpg') }}" class="rounded mb-4 w-full h-60 object-cover" alt="">
             <h3 class="text-xl font-bold">Innovación Humana en Acción</h3>
             <p class="mt-2 text-base">Programas que ya están transformando comunidades.</p>
         </a>

         <a href="{{ route('n-la-paz-2050') }}"
             class="card bg-base-200 shadow-xl p-6 hover:shadow-2xl transition animate__animated animate__fadeInUp animate__delay-2s">
             <img src="{{ asset('assets/img/ch-06.png') }}" class="rounded mb-4 w-full h-60 object-cover" alt="">
             <h3 class="text-xl font-bold">La Paz 2050</h3>
             <p class="mt-2 text-base">Una ciudad moderna, sostenible e inteligente.</p>
         </a>
     </div>
 </section>
