@extends('layouts.app')

@section('title', 'Agendar cita')

@section('content')
<div
  class="Pagina3 px-4 sm:px-8 md:px-12 lg:px-20 pt-8 sm:pt-12 md:pt-16 lg:pt-20 pb-12">
  <button
    class="backBtn rounded-full p-3 shadow-lg hover:shadow-xl transition-all mb-10 bg-white mt-10">
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

  <div
    class="flex flex-col lg:flex-row gap-6 sm:gap-7 md:gap-8 max-w-6xl mx-auto -mt-5">
    <div class="flex-1 border-2 border-[#7ba5c3] rounded-3xl p-8 bg-white">
      <h2 class="text-[#5175A0] font-bold text-2xl mb-6">
        DATOS PERSONALES
      </h2>
      <div class="space-y-6">
        <div>
          <label class="text-[#5175A0] font-semibold mb-2 block">Tu nombre completo:</label>
          <input
            type="text"
            class="w-full border-2 border-gray-300 rounded-lg px-4 py-2" />
        </div>
        <div>
          <label class="text-[#5175A0] font-semibold mb-2 block">Correo electrónico:</label>
          <input
            type="email"
            class="w-full border-2 border-gray-300 rounded-lg px-4 py-2" />
        </div>
        <div>
          <label class="text-[#5175A0] font-semibold mb-2 block">Teléfono:</label>
          <input
            type="tel"
            class="w-full border-2 border-gray-300 rounded-lg px-4 py-2" />
        </div>
        <div>
          <label class="text-[#5175A0] font-semibold mb-2 block">Edad:</label>
          <input
            type="number"
            class="w-full border-2 border-gray-300 rounded-lg px-4 py-2" />
        </div>
      </div>
    </div>

    <div class="flex-1 border-2 border-[#7ba5c3] rounded-3xl p-8 bg-white">
      <h2 class="text-[#5175A0] font-bold text-2xl mb-6">
        DATOS DE LA CITA:
      </h2>
      <div class="space-y-6">
        <div>
          <label class="text-[#5175A0] font-semibold mb-2 block">Elige consultorio:</label>
          <select
            class="w-full border-2 border-gray-300 rounded-lg px-4 py-2">
            <option>Selecciona...</option>
            <option>Zapopan</option>
            <option>Guadalajara (Centro)</option>
          </select>
        </div>
        <div class="flex gap-4">
          <div class="flex-1">
            <label class="text-[#5175A0] font-semibold mb-2 block">Fecha preferida:</label>
            <input
              type="date"
              class="w-full border-2 border-gray-300 rounded-lg px-4 py-2" />
          </div>
          <div class="flex-1">
            <label class="text-[#5175A0] font-semibold mb-2 block">Horario preferido:</label>
            <input
              type="time"
              class="w-full border-2 border-gray-300 rounded-lg px-4 py-2" />
          </div>
        </div>
        <div>
          <label class="text-[#5175A0] font-semibold mb-2 block">En caso de molestia específica:</label>
          <textarea
            class="w-full border-2 border-gray-300 rounded-lg px-4 py-2 h-32"></textarea>
        </div>
      </div>
    </div>
  </div>

  <div class="flex justify-end max-w-6xl mx-auto mt-8">
    <button
      class="bg-[#5DABDA] hover:bg-[#4a9ac4] text-white font-semibold py-3 px-8 rounded-full shadow-lg transition-all flex items-center gap-2">
      Confirmar cita
    </button>
  </div>
</div>
@endsection

@push('scripts')
<script>
  document.querySelectorAll(".backBtn").forEach((button) => {
    button.addEventListener("click", (e) => {
      e.preventDefault();
      window.location.href = "{{ route('inicio') }}";
    });
  });
</script>
@endpush