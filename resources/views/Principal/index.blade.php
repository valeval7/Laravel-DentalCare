@extends('layouts.app')

@section('title', 'Consulta Dental')

@section('content')
<div
  class="Pagina1 px-4 sm:px-8 md:px-12 lg:px-20 pt-8 sm:pt-12 md:pt-16 lg:pt-20 w-auto min-h-screen">

  <div
    class="Texto1 flex flex-col lg:flex-row items-center lg:items-start justify-between mt-8 sm:mt-12 md:mt-16 lg:mt-20 px-4 sm:px-6 md:px-8 lg:px-12 gap-8 lg:gap-0">
    <div class="w-full lg:max-w-[600px] text-center lg:text-left">
      <h1 class="text-[#5175A0] font-bold mb-6 leading-[1.15]">
        <span
          class="text-[28px] sm:text-[36px] md:text-[48px] lg:text-[56px] block">
          Cuidando tu
          <span class="italic font-normal"> Sonrisa</span>,
        </span>
        <span
          class="text-[28px] sm:text-[36px] md:text-[48px] lg:text-[56px] block mt-1">Visita tras Visita.</span>
      </h1>
      <p
        class="text-[#5175A0] text-[14px] sm:text-[15px] md:text-[16px] lg:text-[17px] mb-6 sm:mb-7 md:mb-8 leading-relaxed max-w-full lg:max-w-[500px] mx-auto lg:mx-0">
        Tu sonrisa es mucho más que una expresión, es el reflejo de tu
        confianza, tu salud y tu bienestar.
      </p>
      <button
        class="bg-[#5DABDA] hover:bg-[#4a9ac4] text-white font-semibold py-3 sm:py-3.5 md:py-4 px-6 sm:px-7 md:px-8 rounded-full shadow-md transition-all inline-flex items-center gap-2 text-sm sm:text-base">
        Agendar cita
      </button>
    </div>

    <div
      class="Imagen1 flex justify-center lg:justify-end w-full lg:w-auto lg:-mt-40">
      <img
        src="https://raw.githubusercontent.com/valeval7/Practicas/8445316a8a587a253482d54da9593ef4a5241ab2/12%20Desarrollo%20de%20Página%20Web/Resources/1.svg"
        alt="Imagen de nuestra paciente"
        class="w-[250px] sm:w-[300px] md:w-[400px] lg:w-[480px] h-auto" />
    </div>
  </div>
</div>

<div
  class="Pagina2 min-h-screen px-4 sm:px-8 md:px-12 lg:px-20 pt-8 pb-12">
  <div class="Texto2 mt-10 text-center">
    <h1
      class="text-[#5175A0] font-bold mb-3 sm:mb-4 leading-[1.15] text-[28px] sm:text-[36px] md:text-[48px] lg:text-[56px]">
      Servicios
    </h1>
    <p
      class="text-[#5175A0] text-[14px] sm:text-[16px] md:text-[18px] lg:text-[20px] italic font-normal max-w-full sm:max-w-[600px] md:max-w-[800px] lg:max-w-[1035px] mx-auto px-4">
      Transforma tu sonrisa con tecnología de vanguardia y cuidado
      excepcional. Tu bienestar es nuestra prioridad.
    </p>

    <div
      class="Galeria1 relative mt-6 sm:mt-8 md:mt-10 px-0 sm:px-2 md:px-4 lg:px-6">
      <button
        class="hidden lg:block absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-white rounded-full p-2 md:p-3 shadow-lg hover:shadow-xl transition-all">
        <svg
          class="w-6 h-6 text-[#5175A0]"
          fill="none"
          stroke="currentColor"
          viewBox="0 0 24 24">
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M15 19l-7-7 7-7" />
        </svg>
      </button>

      <div class="overflow-x-auto pb-6 hide-scrollbar">
        <div
          class="flex gap-4 sm:gap-5 md:gap-6 justify-start lg:justify-center px-4 sm:px-8 md:px-12 min-w-max lg:min-w-0">
          <div
            class="group cursor-pointer transition-transform duration-300 hover:scale-105 shrink-0">
            <img
              src="https://raw.githubusercontent.com/valeval7/Practicas/8445316a8a587a253482d54da9593ef4a5241ab2/12%20Desarrollo%20de%20Página%20Web/Resources/odontologia.svg"
              alt="Odontología General"
              class="h-24 sm:h-28 md:h-32 lg:h-36 w-auto" />
          </div>

          <div
            class="group cursor-pointer transition-transform duration-300 hover:scale-105 shrink-0">
            <img
              src="https://raw.githubusercontent.com/valeval7/Practicas/8445316a8a587a253482d54da9593ef4a5241ab2/12%20Desarrollo%20de%20Página%20Web/Resources/Blanca.svg"
              alt="Blanqueamiento Dental"
              class="h-24 sm:h-28 md:h-32 lg:h-36 w-auto" />
          </div>

          <div
            class="group cursor-pointer transition-transform duration-300 hover:scale-105 shrink-0">
            <img
              src="https://raw.githubusercontent.com/valeval7/Practicas/8445316a8a587a253482d54da9593ef4a5241ab2/12%20Desarrollo%20de%20Página%20Web/Resources/ortodoncia.svg"
              alt="Ortodoncia"
              class="h-24 sm:h-28 md:h-32 lg:h-36 w-auto" />
          </div>

          <div
            class="group cursor-pointer transition-transform duration-300 hover:scale-105 shrink-0">
            <img
              src="https://raw.githubusercontent.com/valeval7/Practicas/8445316a8a587a253482d54da9593ef4a5241ab2/12%20Desarrollo%20de%20Página%20Web/Resources/estetica.svg"
              alt="Estética Dental"
              class="h-24 sm:h-28 md:h-32 lg:h-36 w-auto" />
          </div>
        </div>
      </div>

      <button
        class="hidden lg:block absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-white rounded-full p-2 md:p-3 shadow-lg hover:shadow-xl transition-all">
        <svg
          class="w-6 h-6 text-[#5175A0]"
          fill="none"
          stroke="currentColor"
          viewBox="0 0 24 24">
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M9 5l7 7-7 7" />
        </svg>
      </button>
    </div>
  </div>

  <div class="Texto3 mt-10 sm:mt-16 md:mt-24 text-center">
    <h1
      class="text-[#5175A0] font-bold mb-4 leading-[1.15] text-[28px] sm:text-[36px] md:text-[48px] lg:text-[56px]">
      Soluciones
    </h1>
    <p
      class="text-[#5175A0] text-[14px] sm:text-[16px] md:text-[20px] italic font-normal max-w-[1035px] mx-auto">
      Tu sonrisa merece la mejor atención. Experimenta soluciones dentales
      completas.
    </p>
  </div>
  <div
    class="Galeria2 flex flex-col sm:flex-row sm:flex-wrap lg:flex-nowrap gap-5 sm:gap-6 md:gap-8 justify-center items-center px-4 sm:px-6 md:px-8 lg:px-12 mt-8 sm:mt-10 md:mt-12 lg:mt-16">
    <div
      class="w-full sm:w-[calc(50%-10px)] lg:w-72 xl:w-80 bg-[#EEEDF2] border-2 border-[#7F99C9] rounded-3xl p-5 sm:p-6 md:p-8 text-center max-w-sm">
      <img
        src="https://raw.githubusercontent.com/valeval7/Practicas/8445316a8a587a253482d54da9593ef4a5241ab2/12%20Desarrollo%20de%20Página%20Web/Resources/Persona1.svg"
        alt="General"
        class="w-full h-44 sm:h-48 md:h-56 object-cover rounded-2xl mb-3 sm:mb-4" />
      <h3 class="text-[#5175A0] text-xl font-bold mb-2">General</h3>
      <p class="text-[#5175A0] text-sm">
        Limpiezas, exámenes, empastes y tratamientos preventivos.
      </p>
    </div>

    <div
      class="w-full sm:w-[calc(50%-10px)] lg:w-72 xl:w-80 bg-[#F0EEED] border-2 border-[#7F99C9] rounded-3xl p-5 sm:p-6 md:p-8 text-center max-w-sm">
      <img
        src="https://raw.githubusercontent.com/valeval7/Practicas/8445316a8a587a253482d54da9593ef4a5241ab2/12%20Desarrollo%20de%20Página%20Web/Resources/Persona2.svg"
        alt="Restaurativa"
        class="w-full h-44 sm:h-48 md:h-56 object-cover rounded-2xl mb-3 sm:mb-4" />
      <h3 class="text-[#5175A0] text-xl font-bold mb-2">Restaurativa</h3>
      <p class="text-[#5175A0] text-sm">
        Recupera la función y estética con implantes, coronas y
        endodoncias.
      </p>
    </div>

    <div
      class="w-full sm:w-[calc(50%-10px)] lg:w-72 xl:w-80 bg-[#FCFAFA] border-2 border-[#7F99C9] rounded-3xl p-5 sm:p-6 md:p-8 text-center max-w-sm">
      <img
        src="https://github.com/valeval7/Practicas/blob/main/12%20Desarrollo%20de%20Página%20Web/Resources/Persona3.png?raw=true"
        alt="Cosmética"
        class="w-full h-44 sm:h-48 md:h-56 object-cover rounded-2xl mb-3 sm:mb-4" />
      <h3 class="text-[#5175A0] text-xl font-bold mb-2">Cosmética</h3>
      <p class="text-[#5175A0] text-sm">
        Blanqueamiento, carillas y diseño de sonrisa personalizado.
      </p>
    </div>
  </div>

  <div
    class="px-4 sm:px-6 md:px-12 lg:px-20 pt-12 sm:pt-16 md:pt-20 pb-8">
    <div
      class="flex flex-col lg:flex-row gap-8 sm:gap-10 md:gap-12 lg:gap-16 items-start">
      <div class="w-full lg:w-[450px] mt-7">
        <h1
          class="text-[#5175A0] font-bold text-[36px] sm:text-[48px] lg:text-[56px] mb-6 leading-tight text-center lg:text-left">
          VISÍTANOS
        </h1>
        <p
          class="text-[#5175A0] text-[16px] sm:text-[18px] italic mb-12 text-center lg:text-left">
          Descubre nuestras diversas clínicas, convenientemente ubicadas
          para atenderte en zona metropolitana
        </p>

        <div class="space-y-10">
          <div class="flex gap-4 text-[#5175A0]">
            <svg
              class="w-6 h-6 sm:w-8 sm:h-8 text-[#5DABDA] shrink-0 mt-1"
              fill="currentColor"
              viewBox="0 0 20 20">
              <path
                fill-rule="evenodd"
                d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                clip-rule="evenodd" />
            </svg>
            <div>
              <p class="font-bold text-lg sm:text-xl mb-1">Zapopan</p>
              <p class="text-sm sm:text-base italic">
                Av. Patria No. 1891, Jardines Universidad, C.P. 45110,
                Zapopan, Jalisco
              </p>
            </div>
          </div>

          <div class="flex gap-4 text-[#5175A0]">
            <svg
              class="w-6 h-6 sm:w-8 sm:h-8 text-[#5DABDA] shrink-0 mt-1"
              fill="currentColor"
              viewBox="0 0 20 20">
              <path
                fill-rule="evenodd"
                d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                clip-rule="evenodd" />
            </svg>
            <div>
              <p class="font-bold text-lg sm:text-xl mb-1">
                Guadalajara (Centro)
              </p>
              <p class="text-sm sm:text-base italic">
                Calle Juárez No. 234, Col. Centro, C.P. 44100,
                Guadalajara, Jalisco
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="relative w-full lg:flex-1">
        <img
          src="https://raw.githubusercontent.com/valeval7/Practicas/8445316a8a587a253482d54da9593ef4a5241ab2/12%20Desarrollo%20de%20Página%20Web/Resources/clinica.svg"
          alt="Clínica Dental"
          class="w-full h-auto object-cover rounded-2xl" />

        <div
          class="absolute bottom-3 sm:bottom-4 md:bottom-6 right-3 sm:right-4 md:right-6 bg-white rounded-2xl sm:rounded-3xl md:rounded-3xl shadow-2xl p-3 sm:p-4 md:p-6 lg:p-8 w-40 sm:w-52 md:w-64 lg:w-80">

          <h3
            class="text-[#5175A0] font-bold text-[14px] sm:text-[16px] md:text-[18px] lg:text-[22px] mb-2 sm:mb-3 md:mb-4 lg:mb-6">
            Días laborales
          </h3>
          <div class="flex items-center gap-3 mb-4 text-[#5175A0]">
            <svg
              class="w-5 h-5 sm:w-6 sm:h-6 text-[#5DABDA]"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24">
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            <p class="font-semibold text-sm sm:text-lg">Lunes-Sábado</p>
          </div>
          <div class="flex items-center gap-3 text-[#5175A0]">
            <svg
              class="w-5 h-5 sm:w-6 sm:h-6 text-[#5DABDA]"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24">
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <p class="text-sm sm:text-lg">9:00 am - 20:00 pm</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection

  @push('scripts')
  <script>
    const menuBtns = document.querySelectorAll(".menuBtn");
    const menuDropdowns = document.querySelectorAll(".menuDropdown");

    menuBtns.forEach((btn, i) => {
      btn.addEventListener("click", (e) => {
        e.stopPropagation();
        menuDropdowns.forEach((d, index) => {
          if (index !== i) d.classList.add("hidden");
        });
        menuDropdowns[i]?.classList.toggle("hidden");
      });
    });

    document.addEventListener("click", (e) => {
      const clickedInsideMenu = [...menuBtns, ...menuDropdowns].some(el => el.contains(e.target));
      if (!clickedInsideMenu) {
        menuDropdowns.forEach((d) => d.classList.add("hidden"));
      }
    });
  </script>
  @endpush