@extends('layouts.app')
@section('title', 'Dental Care')
@section('content')

<div class="Pagina1 relative isolate overflow-hidden px-4 sm:px-8 md:px-12 lg:px-20 pt-8 sm:pt-12 md:pt-16 lg:pt-20 w-auto min-h-screen">
  <div class="blob-a absolute top-10 left-[-60px] w-72 h-72 bg-[#5DABDA]/15 rounded-full blur-3xl pointer-events-none -z-10"></div>
  <div class="blob-b absolute top-1/3 right-[-60px] w-80 h-80 bg-[#7F99C9]/15 rounded-full blur-3xl pointer-events-none -z-10"></div>

  <div class="Texto1 flex flex-col lg:flex-row items-center lg:items-start justify-between mt-8 sm:mt-12 md:mt-16 lg:mt-20 px-4 sm:px-6 md:px-8 lg:px-12 gap-8 lg:gap-0">
    <div class="w-full lg:max-w-[600px] text-center lg:text-left reveal-on-scroll">
      <h1 class="text-[#5175A0] font-bold mb-6 leading-[1.15]">
        <span data-an="wipe" class="text-[28px] sm:text-[36px] md:text-[48px] lg:text-[56px] block">
          Caring for your <span class="smile-u italic font-normal">Smile</span>,
        </span>
        <span data-an="wipe" class="text-[28px] sm:text-[36px] md:text-[48px] lg:text-[56px] block mt-1">Visit after Visit.</span>
      </h1>
      <p data-an="up" class="text-[#5175A0] text-[14px] sm:text-[15px] md:text-[16px] lg:text-[17px] mb-6 sm:mb-7 md:mb-8 leading-relaxed max-w-full lg:max-w-[500px] mx-auto lg:mx-0">
        Your smile is far more than just an expression — it is a reflection of your confidence, your health, and your well-being.
      </p>
      <button data-an="pop" class="btn-shine bg-[#5DABDA] hover:bg-[#4a9ac4] hover:shadow-lg hover:-translate-y-1 active:translate-y-0 text-white font-semibold py-3 sm:py-3.5 md:py-4 px-6 sm:px-7 md:px-8 rounded-full shadow-md transition-all duration-300 inline-flex items-center gap-2 text-sm sm:text-base">
        Schedule Appointment
      </button>
    </div>

    <div class="Imagen1 hero-img flex justify-center lg:justify-end w-full lg:w-auto lg:-mt-30 reveal-on-scroll">
      <img
        src="https://raw.githubusercontent.com/valeval7/Practicas/8445316a8a587a253482d54da9593ef4a5241ab2/12%20Desarrollo%20de%20Página%20Web/Resources/1.svg"
        alt="Image of our patient"
        class="w-[500px] sm:w-[300px] md:w-[400px] lg:w-[480px] h-auto animate-float duration-500 drop-shadow-md hover:scale-105 transition-transform" />
    </div>
  </div>
</div>


<div class="Pagina2 relative isolate overflow-hidden px-4 sm:px-8 md:px-12 lg:px-20 pt-0 pb-12 -mt-6 sm:-mt-10 lg:-mt-16">
  <div class="blob-b absolute top-1/4 left-[-80px] w-80 h-80 bg-[#5DABDA]/15 rounded-full blur-3xl pointer-events-none -z-10"></div>
  <div class="blob-a absolute bottom-10 right-[-80px] w-96 h-96 bg-[#7F99C9]/15 rounded-full blur-3xl pointer-events-none -z-10"></div>

  <div class="Texto2 mt-10 text-center reveal-on-scroll">
    <h1 data-an="wipe" class="text-[#5175A0] font-bold mb-3 sm:mb-4 leading-[1.15] text-[28px] sm:text-[36px] md:text-[48px] lg:text-[56px]">
      Our Services
    </h1>
    <p data-an="up" class="text-[#5175A0] text-[14px] sm:text-[16px] md:text-[18px] lg:text-[20px] italic font-normal max-w-full sm:max-w-[600px] md:max-w-[800px] lg:max-w-[1035px] mx-auto px-4">
      Transform your smile with cutting-edge technology and exceptional care. Your well-being is our priority.
    </p>

    <div class="Galeria1 relative mt-12 sm:mt-14 md:mt-16 lg:mt-20 px-0 sm:px-2 md:px-4 lg:px-6">
      <button id="galPrev" class="hidden lg:block absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-white rounded-full p-2 md:p-3 shadow-lg hover:shadow-xl hover:scale-110 active:scale-95 transition-all">
        <svg class="w-6 h-6 text-[#5175A0]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
      </button>

      <div id="galTrack" class="overflow-x-auto pt-12 pb-12 sm:pt-14 sm:pb-14 hide-scrollbar scroll-smooth">
        <div class="flex gap-4 sm:gap-5 md:gap-6 justify-start lg:justify-center px-4 sm:px-8 md:px-12 min-w-max lg:min-w-0">
          <div data-an="pop" class="group cursor-pointer transition-transform duration-300 hover:scale-110 hover:-translate-y-1 shrink-0">
            <img src="https://raw.githubusercontent.com/valeval7/Practicas/f3dc3e80b63ad36a94e927c2226a19a1fe1d91e5/12%20Desarrollo%20de%20Página%20Web/Resources/odontologia.svg" alt="General Dentistry" class="bob h-24 sm:h-28 md:h-32 lg:h-36 w-auto" />
          </div>
          <div data-an="pop" class="group cursor-pointer transition-transform duration-300 hover:scale-110 hover:-translate-y-1 shrink-0">
            <img src="https://raw.githubusercontent.com/valeval7/Practicas/021bd02475ba1f332047448ce68ab9637b79905e/12%20Desarrollo%20de%20Página%20Web/Resources/Blanca.svg" alt="Teeth Whitening" class="bob h-24 sm:h-28 md:h-32 lg:h-36 w-auto" style="animation-delay:-0.9s" />
          </div>
          <div data-an="pop" class="group cursor-pointer transition-transform duration-300 hover:scale-110 hover:-translate-y-1 shrink-0">
            <img src="https://raw.githubusercontent.com/valeval7/Practicas/9be6e37e30d3ae0f12c5264be6c6b4e82ae969b0/12%20Desarrollo%20de%20Página%20Web/Resources/ortodoncia.svg" alt="Orthodontics" class="bob h-24 sm:h-28 md:h-32 lg:h-36 w-auto" style="animation-delay:-1.8s" />
          </div>
          <div data-an="pop" class="group cursor-pointer transition-transform duration-300 hover:scale-110 hover:-translate-y-1 shrink-0">
            <img src="https://raw.githubusercontent.com/valeval7/Practicas/f3dc3e80b63ad36a94e927c2226a19a1fe1d91e5/12%20Desarrollo%20de%20Página%20Web/Resources/estetica.svg" alt="Cosmetic Dentistry" class="bob h-24 sm:h-28 md:h-32 lg:h-36 w-auto" style="animation-delay:-2.7s" />
          </div>
        </div>
      </div>

      <button id="galNext" class="hidden lg:block absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-white rounded-full p-2 md:p-3 shadow-lg hover:shadow-xl hover:scale-110 active:scale-95 transition-all">
        <svg class="w-6 h-6 text-[#5175A0]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
      </button>
    </div>
  </div>

  <div class="Texto3 mt-10 sm:mt-16 md:mt-24 text-center reveal-on-scroll">
    <h1 data-an="wipe" class="text-[#5175A0] font-bold mb-4 leading-[1.15] text-[28px] sm:text-[36px] md:text-[48px] lg:text-[56px]">
      Personalized Solutions
    </h1>
    <p data-an="up" class="text-[#5175A0] text-[14px] sm:text-[16px] md:text-[20px] italic font-normal max-w-[1035px] mx-auto">
      Your smile deserves the very best care. Experience comprehensive dental solutions tailored to you.
    </p>
  </div>

  <div class="Galeria2 flex flex-col sm:flex-row sm:flex-wrap lg:flex-nowrap gap-5 sm:gap-6 md:gap-8 justify-center items-center px-4 sm:px-6 md:px-8 lg:px-12 mt-8 sm:mt-10 md:mt-12 lg:mt-16 reveal-on-scroll">
    <div data-an="up" class="w-full sm:w-[calc(50%-10px)] lg:w-72 xl:w-80 bg-[#EEEDF2] border-2 border-[#7F99C9] rounded-3xl p-5 sm:p-6 md:p-8 text-center max-w-sm hover:-translate-y-2 hover:shadow-xl hover:border-[#5DABDA] transition-all duration-300 cursor-pointer">
      <div data-an="curtain" class="overflow-hidden rounded-2xl mb-3 sm:mb-4">
        <img src="https://raw.githubusercontent.com/valeval7/Practicas/8445316a8a587a253482d54da9593ef4a5241ab2/12%20Desarrollo%20de%20Página%20Web/Resources/Persona1.svg" alt="General Dentistry" class="w-full h-44 sm:h-48 md:h-56 object-cover hover:scale-105 transition-transform duration-300" />
      </div>
      <h3 data-an="up" class="text-[#5175A0] text-xl font-bold mb-2">General Care</h3>
      <p data-an="up" class="text-[#5175A0] text-sm">Cleanings, exams, fillings, and preventive treatments.</p>
    </div>

    <div data-an="up" class="w-full sm:w-[calc(50%-10px)] lg:w-72 xl:w-80 bg-[#F0EEED] border-2 border-[#7F99C9] rounded-3xl p-5 sm:p-6 md:p-8 text-center max-w-sm hover:-translate-y-2 hover:shadow-xl hover:border-[#5DABDA] transition-all duration-300 cursor-pointer">
      <div data-an="curtain" class="overflow-hidden rounded-2xl mb-3 sm:mb-4">
        <img src="https://raw.githubusercontent.com/valeval7/Practicas/8445316a8a587a253482d54da9593ef4a5241ab2/12%20Desarrollo%20de%20Página%20Web/Resources/Persona2.svg" alt="Restorative Dentistry" class="w-full h-44 sm:h-48 md:h-56 object-cover hover:scale-105 transition-transform duration-300" />
      </div>
      <h3 data-an="up" class="text-[#5175A0] text-xl font-bold mb-2">Restorative Care</h3>
      <p data-an="up" class="text-[#5175A0] text-sm">Restore function and appearance with implants, crowns, and root canal treatments.</p>
    </div>

    <div data-an="up" class="w-full sm:w-[calc(50%-10px)] lg:w-72 xl:w-80 bg-[#FCFAFA] border-2 border-[#7F99C9] rounded-3xl p-5 sm:p-6 md:p-8 text-center max-w-sm hover:-translate-y-2 hover:shadow-xl hover:border-[#5DABDA] transition-all duration-300 cursor-pointer">
      <div data-an="curtain" class="overflow-hidden rounded-2xl mb-3 sm:mb-4">
        <img src="https://raw.githubusercontent.com/valeval7/Practicas/main/12%20Desarrollo%20de%20P%C3%A1gina%20Web/Resources/Persona3.png" alt="Cosmetic Dentistry" class="w-full h-44 sm:h-48 md:h-56 object-cover hover:scale-105 transition-transform duration-300" />
      </div>
      <h3 data-an="up" class="text-[#5175A0] text-xl font-bold mb-2">Cosmetic Care</h3>
      <p data-an="up" class="text-[#5175A0] text-sm">Whitening, veneers, and fully personalized smile design.</p>
    </div>
  </div>

  <div class="px-4 sm:px-6 md:px-12 lg:px-20 pt-16 sm:pt-20 md:pt-24 pb-12">
    <div class="flex flex-col lg:flex-row gap-8 sm:gap-10 md:gap-12 lg:gap-16 items-start lg:items-center">

      <div class="w-full lg:w-[480px] reveal-on-scroll">
        <h1 data-an="wipe" class="text-[#5175A0] font-bold text-[36px] sm:text-[48px] lg:text-[56px] mb-4 leading-tight text-center lg:text-left">
          Visit Us
        </h1>
        <p data-an="up" class="text-[#5175A0] text-[16px] sm:text-[18px] italic mb-8 text-center lg:text-left">
          Visit our conveniently located clinics across the metropolitan area
        </p>

        <div class="space-y-5">
          <!-- Zapopan -->
          <a
            data-an="left"
            data-map-target
            href="https://www.google.com/maps/search/?api=1&query=Av.+Patria+No.+1891,+Jardines+Universidad,+Zapopan,+Jalisco"
            target="_blank"
            rel="noopener noreferrer"
            class="group block bg-white/80 hover:bg-white border-2 border-[#7F99C9]/60 hover:border-[#5DABDA] p-5 rounded-2xl shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
            <div class="flex gap-4 text-[#5175A0] items-start">
              <div data-an="pop" class="bg-[#5DABDA]/10 group-hover:bg-[#5DABDA] p-3 rounded-xl transition-colors duration-300 shrink-0 mt-0.5">
                <svg class="pin-svg w-6 h-6 text-[#5DABDA] group-hover:text-white transition-colors duration-300" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                </svg>
              </div>
              <div class="flex-1">
                <div class="flex items-center justify-between gap-2">
                  <p data-an="up" class="font-bold text-lg sm:text-xl mb-1 group-hover:text-[#5DABDA] transition-colors">Zapopan Clinic</p>
                  <span class="text-xs font-semibold text-[#5DABDA] opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">Open in Maps →</span>
                </div>
                <p data-an="up" class="text-sm sm:text-base italic text-[#5175A0]/90">
                  Av. Patria No. 1891, Jardines Universidad, C.P. 45110, Zapopan, Jalisco
                </p>
              </div>
            </div>
          </a>

          <!-- Guadalajara -->
          <a
            data-an="left"
            data-map-target
            href="https://www.google.com/maps/search/?api=1&query=Calle+Juárez+No.+234,+Col.+Centro,+Guadalajara,+Jalisco"
            target="_blank"
            rel="noopener noreferrer"
            class="group block bg-white/80 hover:bg-white border-2 border-[#7F99C9]/60 hover:border-[#5DABDA] p-5 rounded-2xl shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
            <div class="flex gap-4 text-[#5175A0] items-start">
              <div data-an="pop" class="bg-[#5DABDA]/10 group-hover:bg-[#5DABDA] p-3 rounded-xl transition-colors duration-300 shrink-0 mt-0.5">
                <svg class="pin-svg w-6 h-6 text-[#5DABDA] group-hover:text-white transition-colors duration-300" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                </svg>
              </div>
              <div class="flex-1">
                <div class="flex items-center justify-between gap-2">
                  <p data-an="up" class="font-bold text-lg sm:text-xl mb-1 group-hover:text-[#5DABDA] transition-colors">Guadalajara Downtown Clinic</p>
                  <span class="text-xs font-semibold text-[#5DABDA] opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">Open in Maps →</span>
                </div>
                <p data-an="up" class="text-sm sm:text-base italic text-[#5175A0]/90">
                  Calle Juárez No. 234, Col. Centro, C.P. 44100, Guadalajara, Jalisco
                </p>
              </div>
            </div>
          </a>
        </div>
      </div>

      <div id="clinicMedia" class="relative w-full lg:flex-1 reveal-on-scroll">
        <div id="mapFrame" data-an="curtain" class="relative overflow-hidden rounded-3xl shadow-xl border-2 border-[#7F99C9]/30">
          <img
            src="https://raw.githubusercontent.com/valeval7/Practicas/8445316a8a587a253482d54da9593ef4a5241ab2/12%20Desarrollo%20de%20Página%20Web/Resources/clinica.svg"
            alt="Our Dental Clinic"
            class="w-full h-auto object-cover hover:scale-[1.02] transition-transform duration-500" />
        </div>

        <div data-an="wipe" class="hours-card absolute bottom-3 sm:bottom-4 md:bottom-6 right-3 sm:right-4 md:right-6 bg-white/95 backdrop-blur-md rounded-2xl sm:rounded-3xl shadow-2xl p-4 sm:p-5 md:p-6 w-44 sm:w-56 md:w-68 border border-white/60 hover:-translate-y-1 transition-transform duration-300">
          <h3 data-an="up" class="text-[#5175A0] font-bold text-[15px] sm:text-[17px] md:text-[19px] mb-2 sm:mb-3">
            Business Hours
          </h3>
          <div data-an="left" class="flex items-center gap-2.5 mb-2 text-[#5175A0]">
            <svg class="bob w-5 h-5 text-[#5DABDA] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            <p class="font-semibold text-xs sm:text-sm md:text-base">Monday–Saturday</p>
          </div>
          <div data-an="left" class="flex items-center gap-2.5 text-[#5175A0]">
            <svg class="tick w-5 h-5 text-[#5DABDA] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <p class="text-xs sm:text-sm md:text-base">9:00 AM – 8:00 PM</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection

@push('styles')
<style>
  @keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
  }
  .animate-float {
    animation: float 4s ease-in-out infinite;
  }

  .reveal-on-scroll {
    opacity: 0;
    transform: translateY(24px);
    transition: opacity 0.6s cubic-bezier(0.16, 1, 0.3, 1), transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
    will-change: opacity, transform;
  }
  .reveal-on-scroll.is-visible {
    opacity: 1;
    transform: translateY(0);
  }

  .Imagen1.hero-img.reveal-on-scroll {
    transform: translateX(90px);
    filter: blur(10px);
    transition: opacity 1.2s cubic-bezier(.16,1,.3,1) .35s, transform 1.2s cubic-bezier(.16,1,.3,1) .35s, filter 1.2s ease .35s;
  }
  .Imagen1.hero-img.reveal-on-scroll.is-visible { transform: none; filter: none; }

  .hide-scrollbar::-webkit-scrollbar { display: none; }
  .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }

  [data-an] { opacity: 0; }
  [data-an]:not(.absolute) { position: relative; }
  [data-an].in {
    animation-duration: .9s;
    animation-timing-function: cubic-bezier(.22, 1, .36, 1);
    animation-fill-mode: both;
    animation-delay: var(--d, 0ms);
  }
  [data-an="up"].in      { animation-name: an-up; }
  [data-an="left"].in    { animation-name: an-left; }
  [data-an="pop"].in     { animation-name: an-pop; }
  [data-an="wipe"].in    { animation-name: an-wipe; animation-duration: 1.1s; }
  [data-an="curtain"].in { animation-name: an-curtain; animation-duration: 1.2s; }

  @keyframes an-up {
    from { opacity: 0; top: 36px; filter: blur(6px); }
    to   { opacity: 1; top: 0;    filter: none; }
  }
  @keyframes an-left {
    from { opacity: 0; left: -60px; filter: blur(6px); }
    to   { opacity: 1; left: 0;     filter: none; }
  }
  @keyframes an-pop {
    0%   { opacity: 0; top: 36px; }
    60%  { opacity: 1; top: -10px; }
    100% { opacity: 1; top: 0; }
  }
  @keyframes an-wipe {
    from { opacity: 0; clip-path: inset(0 100% 0 0); }
    to   { opacity: 1; clip-path: inset(-60px); }
  }
  @keyframes an-curtain {
    from { opacity: 1; clip-path: inset(100% 0 0 0); }
    to   { opacity: 1; clip-path: inset(-60px); }
  }

  .smile-u {
    background-image: linear-gradient(#5DABDA, #5DABDA);
    background-repeat: no-repeat;
    background-position: 0 96%;
    background-size: 0 4px;
  }
  .in .smile-u, .in.smile-u { animation: underline 1s cubic-bezier(.22,1,.36,1) 1.1s forwards; }
  @keyframes underline { to { background-size: 100% 4px; } }

  .btn-shine {
    background-image: linear-gradient(110deg, transparent 40%, rgba(255,255,255,.45) 50%, transparent 60%);
    background-size: 250% 100%;
    background-repeat: no-repeat;
    background-position: 160% 0;
  }
  .btn-shine.in {
    animation: an-pop .9s cubic-bezier(.22,1,.36,1) var(--d, 0ms) both,
               shine 4.5s ease-in-out 2.5s infinite;
  }
  @keyframes shine {
    0%, 55% { background-position: 160% 0; }
    100%    { background-position: -60% 0; }
  }

  .bob { animation: bob 3.6s ease-in-out infinite; }
  @keyframes bob {
    0%, 100% { transform: translateY(0); }
    50%      { transform: translateY(-6px); }
  }

  .in .tick { animation: tick 1.2s cubic-bezier(.3, 1.4, .5, 1) 1.2s both; }
  @keyframes tick { from { transform: rotate(-360deg); } to { transform: rotate(0); } }

  .group:hover .pin-svg { animation: hop .5s ease; }
  @keyframes hop {
    0%, 100% { transform: translateY(0); }
    40%      { transform: translateY(-5px); }
    70%      { transform: translateY(1px); }
  }

  .blob-a { animation: drift 16s ease-in-out infinite alternate; }
  .blob-b { animation: drift 20s ease-in-out -8s infinite alternate; }
  @keyframes drift {
    from { transform: translate(0, 0) scale(1); }
    to   { transform: translate(40px, -30px) scale(1.15); }
  }

  .map-layer {
    --crop: 230px;
    position: absolute; inset: 0; z-index: 5; overflow: hidden;
    background: #e8eef6;
    opacity: 0; pointer-events: none;
    clip-path: circle(0% at 0% 50%);
    transition: clip-path .8s cubic-bezier(.22, 1, .36, 1), opacity .4s ease;
  }
  .map-layer.active { opacity: 1; clip-path: circle(150% at 0% 50%); }
  .map-layer iframe {
    position: absolute; left: 0; top: calc(var(--crop) * -1);
    width: 100%; height: calc(100% + var(--crop)); border: 0;
  }

  #clinicMedia.map-on .hours-card { opacity: 0 !important; pointer-events: none; transition: opacity .3s ease; }

  @media (prefers-reduced-motion: reduce) {
    [data-an], [data-an].in { opacity: 1 !important; animation: none !important; }
    .reveal-on-scroll, .Imagen1.hero-img.reveal-on-scroll { opacity: 1 !important; transform: none !important; filter: none !important; }
    .bob, .blob-a, .blob-b, .animate-float, .tick { animation: none !important; }
    .smile-u { background-size: 100% 4px; }
    .map-layer { transition: opacity .2s ease; clip-path: none; }
  }
</style>
@endpush

@push('scripts')
<script>
  document.addEventListener("DOMContentLoaded", () => {
    const reduce = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
    const wrapObs = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("is-visible");
          wrapObs.unobserve(entry.target);
        }
      });
    }, { threshold: 0, rootMargin: "0px 0px -8% 0px" });
    document.querySelectorAll(".reveal-on-scroll").forEach((el) => wrapObs.observe(el));

    const items = document.querySelectorAll("[data-an]");
    if (reduce) {
      items.forEach((el) => el.classList.add("in"));
    } else {
      const itemObs = new IntersectionObserver((entries) => {
        const batch = entries
          .filter((e) => e.isIntersecting)
          .map((e) => e.target)
          .sort((a, b) => (a.compareDocumentPosition(b) & Node.DOCUMENT_POSITION_FOLLOWING ? -1 : 1));
        const inBatch = new Set(batch);
        const counters = new Map();
        let top = 0;

        batch.forEach((el) => {
          const parent = el.parentElement.closest("[data-an]");
          let d;
          if (parent) {
            const n = counters.get(parent) || 0;
            counters.set(parent, n + 1);
            const base = inBatch.has(parent) ? parseInt(parent.dataset.d || 0, 10) : 0;
            d = base + 300 + n * 100;
          } else {
            d = top * 140;
            top++;
          }
          d = Math.min(d, 1600);
          el.dataset.d = d;
          el.style.setProperty("--d", d + "ms");
          el.classList.add("in");
          itemObs.unobserve(el);
        });
      }, { threshold: 0.2, rootMargin: "0px 0px -6% 0px" });
      items.forEach((el) => itemObs.observe(el));
    }

    const galTrack = document.getElementById("galTrack");
    document.getElementById("galPrev")?.addEventListener("click", () => {
      galTrack?.scrollBy({ left: -260, behavior: "smooth" });
    });
    document.getElementById("galNext")?.addEventListener("click", () => {
      galTrack?.scrollBy({ left: 260, behavior: "smooth" });
    });

    const media = document.getElementById("clinicMedia");
    const frame = document.getElementById("mapFrame");
    const cards = document.querySelectorAll("[data-map-target]");
    if (media && frame && cards.length) {
      const layers = new Map();
      let hideTimer;

      cards.forEach((card) => {
        const q = new URL(card.href).searchParams.get("query");
        const layer = document.createElement("div");
        const map = document.createElement("iframe");
        layer.className = "map-layer";
        layer.setAttribute("aria-hidden", "true");
        map.title = "Map of " + card.querySelector("p").textContent.trim();
        map.tabIndex = -1;
        map.referrerPolicy = "no-referrer-when-downgrade";
        map.dataset.src = "https://www.google.com/maps?q=" + encodeURIComponent(q) + "&output=embed&z=16";
        layer.appendChild(map);
        frame.appendChild(layer);
        layers.set(card, layer);
      });

      // Se cargan una sola vez, cuando la sección se acerca a la pantalla
      const loadMaps = () => layers.forEach((l) => {
        const map = l.firstChild;
        if (!map.src) map.src = map.dataset.src;
      });
      new IntersectionObserver((entries, obs) => {
        if (entries.some((e) => e.isIntersecting)) { loadMaps(); obs.disconnect(); }
      }, { rootMargin: "200px" }).observe(media);

      const show = (card) => {
        clearTimeout(hideTimer);
        loadMaps();
        media.classList.add("map-on");
        layers.forEach((l, c) => l.classList.toggle("active", c === card));
      };
      const hide = () => {
        hideTimer = setTimeout(() => {
          media.classList.remove("map-on");
          layers.forEach((l) => l.classList.remove("active"));
        }, 120);
      };

      cards.forEach((card) => {
        card.addEventListener("mouseenter", () => show(card));
        card.addEventListener("focus", () => show(card));
        card.addEventListener("mouseleave", hide);
        card.addEventListener("blur", hide);
      });
    }
  });

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