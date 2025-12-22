  @php
      $videos = [
          [
              'title' => 'Av del Poeta ',
              'subtitle' => 'Programas y Proyectos de Innovación Humana',
              'poster' => 'assets/videos/posters/av-del-poeta.png',
              'video' => 'assets/videos/av-del-poeta.mp4',
          ],
          [
              'title' => 'Av Siles Suazo',
              'subtitle' => 'Programas y Proyectos de Innovación Humana',
              'poster' => 'assets/videos/posters/av-siles-suazo.png',
              'video' => 'assets/videos/av-siles-suazo.mp4',
          ],
          [
              'title' => 'Boulevard San Miguel',
              'subtitle' => 'Programas y Proyectos de Innovación Humana',
              'poster' => 'assets/videos/posters/boulevard-san-miguel.png',
              'video' => 'assets/videos/boulevard-san-miguel.mp4',
          ],
          [
              'title' => 'Conexión Kantutani',
              'subtitle' => 'Programas y Proyectos de Innovación Humana',
              'poster' => 'assets/videos/posters/conexion-kantutani.png',
              'video' => 'assets/videos/conexion-kantutani.mp4',
          ],
          [
              'title' => 'Hospital Chasquipampa',
              'subtitle' => 'Programas y Proyectos de Innovación Humana',
              'poster' => 'assets/videos/posters/hospital-chasquipampa.png',
              'video' => 'assets/videos/hospital-chasquipampa.mp4',
          ],
          [
              'title' => 'Hospital del Norte',
              'subtitle' => 'Programas y Proyectos de Innovación Humana',
              'poster' => 'assets/videos/posters/hospital-del-norte.png',
              'video' => 'assets/videos/hospital-del-norte.mp4',
          ],
          [
              'title' => 'Hospital del Sur',
              'subtitle' => 'Programas y Proyectos de Innovación Humana',
              'poster' => 'assets/videos/posters/hospital-del-sur.png',
              'video' => 'assets/videos/hospital-del-sur.mp4',
          ],
          [
              'title' => 'Hospital La Paz',
              'subtitle' => 'Programas y Proyectos de Innovación Humana',
              'poster' => 'assets/videos/posters/hospital-la-paz.png',
              'video' => 'assets/videos/hospital-la-paz.mp4',
          ],
          [
              'title' => 'Hospital San Antonio',
              'subtitle' => 'Programas y Proyectos de Innovación Humana',
              'poster' => 'assets/videos/posters/hospital-san-antonio.png',
              'video' => 'assets/videos/hospital-san-antonio.mp4',
          ],
          [
              'title' => 'Las Cholas',
              'subtitle' => 'Programas y Proyectos de Innovación Humana',
              'poster' => 'assets/videos/posters/las-cholas.png',
              'video' => 'assets/videos/las-cholas.mp4',
          ],
          [
              'title' => 'Obrajes',
              'subtitle' => 'Programas y Proyectos de Innovación Humana',
              'poster' => 'assets/videos/posters/obrajes.png',
              'video' => 'assets/videos/obrajes.mp4',
          ],
          [
              'title' => 'Pasaje Nuñez del Prado',
              'subtitle' => 'Programas y Proyectos de Innovación Humana',
              'poster' => 'assets/videos/posters/pasaje-nunez-del-prado.png',
              'video' => 'assets/videos/pasaje-nunez-del-prado.mp4',
          ],
          [
              'title' => 'Plaza Murillo',
              'subtitle' => 'Programas y Proyectos de Innovación Humana',
              'poster' => 'assets/videos/posters/plaza-murillo.png',
              'video' => 'assets/videos/plaza-murillo.mp4',
          ],
          [
              'title' => 'Rotonda C-16',
              'subtitle' => 'Programas y Proyectos de Innovación Humana',
              'poster' => 'assets/videos/posters/rotonda-c-16.png',
              'video' => 'assets/videos/rotonda-c-16.mp4',
          ],
          [
              'title' => 'Teleférico Curva de Olguin',
              'subtitle' => 'Programas y Proyectos de Innovación Humana',
              'poster' => 'assets/videos/posters/teleferico-curva-de-olguin.png',
              'video' => 'assets/videos/teleferico-curva-de-olguin.mp4',
          ],
          [
              'title' => 'Teleférico Línea Café',
              'subtitle' => 'Programas y Proyectos de Innovación Humana',
              'poster' => 'assets/videos/posters/teleferico-linea-cafe.png',
              'video' => 'assets/videos/teleferico-linea-cafe.mp4',
          ],
          [
              'title' => 'Teleférico Línea Dorada',
              'subtitle' => 'Programas y Proyectos de Innovación Humana',
              'poster' => 'assets/videos/posters/teleferico-linea-dorada.png',
              'video' => 'assets/videos/teleferico-linea-dorada.mp4',
          ],
          [
              'title' => 'Teleférico Línea Naranja Integrado',
              'subtitle' => 'Programas y Proyectos de Innovación Humana',
              'poster' => 'assets/videos/posters/teleferico-linea-naranja-integrado.png',
              'video' => 'assets/videos/teleferico-linea-naranja-integrado.mp4',
          ],
          [
              'title' => 'Teleférico Mercado Lanza',
              'subtitle' => 'Programas y Proyectos de Innovación Humana',
              'poster' => 'assets/videos/posters/teleferico-mercado-lanza.png',
              'video' => 'assets/videos/teleferico-mercado-lanza.mp4',
          ],
          [
              'title' => 'Transporte Integrado',
              'subtitle' => 'Programas y Proyectos de Innovación Humana',
              'poster' => 'assets/videos/posters/transporte-integrado.png',
              'video' => 'assets/videos/transporte-integrado.mp4',
          ],
      ];
  @endphp
  <div class="max-w-240 mx-auto">
      <div class="swiper proyectoSwiper2 select-none ">
          <div class="swiper-wrapper">
              @foreach ($videos as $video)
                  <div class="swiper-slide">
                      <x-video-player title="{{ $video['title'] }}" subtitle="{{ $video['subtitle'] }}"
                          poster="{{ $video['poster'] }}" src="{{ asset($video['video']) }}" />
                  </div>
              @endforeach
          </div>
      </div>

      <div thumbsSlider="" style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff;"
          class="swiper proyectoSwiper select-none">
          <div class="swiper-wrapper">
              @foreach ($videos as $video)
                  <div class="swiper-slide relative">
                      <img src="{{ asset($video['poster']) }}" alt="Videos de Ciudad Humana">
                      <div class="absolute bottom-0 w-full " style="background-color: #0000005c;">
                          <p class="text-lg  text-white text-center">
                              {{ $video['title'] }}
                          </p>
                      </div>
                  </div>
              @endforeach
          </div>
          <button
              class="custom-prev btn btn-circle btn-neutral absolute left-2 top-1/2 -translate-y-1/2 z-10 shadow-lg opacity-70 hover:opacity-100 transition-all">
              <i data-lucide="chevron-left" class="w-6 h-6"></i>
          </button>

          <button
              class="custom-next btn btn-circle btn-neutral absolute right-2 top-1/2 -translate-y-1/2 z-10 shadow-lg opacity-70 hover:opacity-100 transition-all">
              <i data-lucide="chevron-right" class="w-6 h-6"></i>
          </button>
      </div>
  </div>
