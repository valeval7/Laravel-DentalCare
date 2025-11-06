@extends('layouts.app')

@section('title', 'Esquema- Tu Sonrisa')

@section('content')
<div
  class="Pagina4 px-4 sm:px-8 md:px-12 lg:px-20 pt-8 sm:pt-12 md:pt-16 lg:pt-20 pb-12">

  <button
    class="backBtn rounded-full p-3 shadow-lg hover:shadow-xl transition-all mb-10 bg-white">
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
    class="flex flex-col lg:flex-row gap-6 sm:gap-7 md:gap-8 max-w-6xl mx-auto -mt-20">
    <div class="flex-1 border-2 border-[#7ba5c3] rounded-3xl p-8 bg-white">
      <h2 class="text-[#5175A0] font-bold text-2xl mb-6">
        ¿Qué le duele en sus Dientes?
      </h2>
      <div class="flex flex-col lg:flex-row gap-6">
        <div class="w-full lg:w-[549px] mx-auto">
          <div class="dental-map-wrapper flex justify-center">
            <img
              src="https://raw.githubusercontent.com/valeval7/Practicas/f12cab38f107e3988068df47595cf3352ee5eeac/12%20Desarrollo%20de%20Página%20Web/Resources/Dientes/diagrama.svg"
              alt="Diagrama Dental Superior"
              class="w-full h-auto max-w-[549px]" />
            <section
              style="
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                  ">
              {{-- IMAGENES HOTSPOT --}}
              <img
                src="https://raw.githubusercontent.com/valeval7/Practicas/f12cab38f107e3988068df47595cf3352ee5eeac/12%20Desarrollo%20de%20Página%20Web/Resources/Dientes/1.svg"
                alt="Diente Sup 1"
                onclick="openModal('modal-sup-1', 'Diente Superior 1')"
                class="hotspot"
                style="top: 17%; left: 45.5%; width: 5%; height: 5%" />
              <img
                src="https://raw.githubusercontent.com/valeval7/Practicas/f12cab38f107e3988068df47595cf3352ee5eeac/12%20Desarrollo%20de%20Página%20Web/Resources/Dientes/2.svg"
                alt="Diente Sup 2"
                onclick="openModal('modal-sup-2', 'Diente Superior 2')"
                class="hotspot"
                style="top: 18%; left: 37.5%; width: 5%; height: 5%" />
              <img
                src="https://raw.githubusercontent.com/valeval7/Practicas/f12cab38f107e3988068df47595cf3352ee5eeac/12%20Desarrollo%20de%20Página%20Web/Resources/Dientes/3.svg"
                alt="Diente Sup 3"
                onclick="openModal('modal-sup-3', 'Diente Superior 3')"
                class="hotspot"
                style="top: 21%; left: 31%; width: 5%; height: 5%" />
              <img
                src="https://raw.githubusercontent.com/valeval7/Practicas/f12cab38f107e3988068df47595cf3352ee5eeac/12%20Desarrollo%20de%20Página%20Web/Resources/Dientes/4.svg"
                alt="Diente Sup 4"
                onclick="openModal('modal-sup-4', 'Diente Superior 4')"
                class="hotspot"
                style="top: 25%; left: 26%; width: 5%; height: 5%" />
              <img
                src="https://raw.githubusercontent.com/valeval7/Practicas/f12cab38f107e3988068df47595cf3352ee5eeac/12%20Desarrollo%20de%20Página%20Web/Resources/Dientes/5.svg"
                alt="Diente Sup 5"
                onclick="openModal('modal-sup-5', 'Diente Superior 5')"
                class="hotspot"
                style="top: 29%; left: 22%; width: 5%; height: 5%" />
              <img
                src="https://raw.githubusercontent.com/valeval7/Practicas/f12cab38f107e3988068df47595cf3352ee5eeac/12%20Desarrollo%20de%20Página%20Web/Resources/Dientes/6.svg"
                alt="Diente Sup 6"
                onclick="openModal('modal-sup-6', 'Diente Superior 6')"
                class="hotspot"
                style="top: 33%; left: 20%; width: 5%; height: 5%" />
              <img
                src="https://raw.githubusercontent.com/valeval7/Practicas/f12cab38f107e3988068df47595cf3352ee5eeac/12%20Desarrollo%20de%20Página%20Web/Resources/Dientes/7.svg"
                alt="Diente Sup 7"
                onclick="openModal('modal-sup-7', 'Diente Superior 7')"
                class="hotspot"
                style="top: 38%; left: 18%; width: 5%; height: 5%" />
              <img
                src="https://raw.githubusercontent.com/valeval7/Practicas/f12cab38f107e3988068df47595cf3352ee5eeac/12%20Desarrollo%20de%20Página%20Web/Resources/Dientes/8.svg"
                alt="Diente Sup 8"
                onclick="openModal('modal-sup-8', 'Diente Superior 8')"
                class="hotspot"
                style="top: 43%; left: 17%; width: 5%; height: 5%" />

              {{-- MODALES --}}
              <div id="modal-sup-1" class="modal">
                <span class="close" onclick="closeModal('modal-sup-1')">&times;</span>
                <img
                  src="https://raw.githubusercontent.com/valeval7/Practicas/f12cab38f107e3988068df47595cf3352ee5eeac/12%20Desarrollo%20de%20Página%20Web/Resources/Dientes/t/Tarjeta1.svg"
                  alt="Diente Superior 1"
                  class="modal-content" />
                <div class="caption"></div>
              </div>
              <div id="modal-sup-2" class="modal">
                <span class="close" onclick="closeModal('modal-sup-2')">&times;</span>
                <img
                  src="https://raw.githubusercontent.com/valeval7/Practicas/f12cab38f107e3988068df47595cf3352ee5eeac/12%20Desarrollo%20de%20Página%20Web/Resources/Dientes/t/Tarjeta2.svg"
                  alt="Diente Superior 2"
                  class="modal-content" />
                <div class="caption"></div>
              </div>
              <div id="modal-sup-3" class="modal">
                <span class="close" onclick="closeModal('modal-sup-3')">&times;</span>
                <img
                  src="https://raw.githubusercontent.com/valeval7/Practicas/f12cab38f107e3988068df47595cf3352ee5eeac/12%20Desarrollo%20de%20Página%20Web/Resources/Dientes/t/Tarjeta3.svg"
                  alt="Diente Superior 3"
                  class="modal-content" />
                <div class="caption"></div>
              </div>
              <div id="modal-sup-4" class="modal">
                <span class="close" onclick="closeModal('modal-sup-4')">&times;</span>
                <img
                  src="https://raw.githubusercontent.com/valeval7/Practicas/f12cab38f107e3988068df47595cf3352ee5eeac/12%20Desarrollo%20de%20Página%20Web/Resources/Dientes/t/Tarjeta4.svg"
                  alt="Diente Superior 4"
                  class="modal-content" />
                <div class="caption"></div>
              </div>
              <div id="modal-sup-5" class="modal">
                <span class="close" onclick="closeModal('modal-sup-5')">&times;</span>
                <img
                  src="https://raw.githubusercontent.com/valeval7/Practicas/f12cab38f107e3988068df47595cf3352ee5eeac/12%20Desarrollo%20de%20Página%20Web/Resources/Dientes/t/Tarjeta5.svg"
                  alt="Diente Superior 5"
                  class="modal-content" />
                <div class="caption"></div>
              </div>
              <div id="modal-sup-6" class="modal">
                <span class="close" onclick="closeModal('modal-sup-6')">&times;</span>
                <img
                  src="https://raw.githubusercontent.com/valeval7/Practicas/f12cab38f107e3988068df47595cf3352ee5eeac/12%20Desarrollo%20de%20Página%20Web/Resources/Dientes/t/Tarjeta6.svg"
                  alt="Diente Superior 6"
                  class="modal-content" />
                <div class="caption"></div>
              </div>
              <div id="modal-sup-7" class="modal">
                <span class="close" onclick="closeModal('modal-sup-7')">&times;</span>
                <img
                  src="https://raw.githubusercontent.com/valeval7/Practicas/f12cab38f107e3988068df47595cf3352ee5eeac/12%20Desarrollo%20de%20Página%20Web/Resources/Dientes/t/Tarjeta7.svg"
                  alt="Diente Superior 7"
                  class="modal-content" />
                <div class="caption"></div>
              </div>
              <div id="modal-sup-8" class="modal">
                <span class="close" onclick="closeModal('modal-sup-8')">&times;</span>
                <img
                  src="https://raw.githubusercontent.com/valeval7/Practicas/f12cab38f107e3988068df47595cf3352ee5eeac/12%20Desarrollo%20de%20Página%20Web/Resources/Dientes/t/Tarjeta8.svg"
                  alt="Diente Superior 8"
                  class="modal-content" />
                <div class="caption"></div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('styles')
<style>
  /* The Modal (background) */
  .modal {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.8);
    align-items: center;
    justify-content: center;
    transition: opacity 0.5s ease;
    opacity: 0;
  }

  .modal-content {
    position: relative;
    width: 70%;
    height: auto;
    max-width: 90%;
    max-height: 90%;
    border-radius: 5px;
    overflow: hidden;
    animation: zoomIn 0.5s;
  }

  @keyframes zoomIn {
    from {
      transform: scale(0.6);
    }

    to {
      transform: scale(1);
    }
  }

  .modal.show {
    display: flex;
    opacity: 1;
  }

  .close {
    position: absolute;
    top: 10px;
    right: 15px;
    color: #ffffff;
    font-size: 35px;
    font-weight: bold;
    cursor: pointer;
    transition: transform 0.3s;
  }

  .caption {
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    color: #7ba5c3;
    text-align: center;
    font-size: 18px;
    background: whitesmoke;
    padding: 10px 20px;
    border-radius: 5px;
  }

  .dental-map-wrapper {
    position: relative;
    padding-top: 100%;
    max-width: 549px;
    margin: 0 auto;
  }

  .dental-map-wrapper>img:first-child {
    position: absolute;
    inset: 0;
    object-fit: contain;
  }

  .hotspot {
    position: absolute;
    cursor: pointer;
    transform: translate(-50%, -50%);
    width: 5%;
    height: 5%;
  }

  .hide-scrollbar::-webkit-scrollbar {
    display: none;
  }

  .hide-scrollbar {
    -ms-overflow-style: none;
    scrollbar-width: none;
  }
</style>

@endpush

@push('scripts')
<script>
  document.querySelectorAll(".backBtn").forEach((button) => {
    button.addEventListener("click", (e) => {
      e.preventDefault();
      window.location.href = "{{ route('inicio') }}";
    });
  });

  window.openModal = function(modalId, caption) {
    let modal = document.getElementById(modalId);
    if (modal) {
      modal.style.display = "flex";
      setTimeout(() => {
        modal.classList.add("show");
      }, 10);
      let message = modal.querySelector(".caption");
      if (message) message.innerText = caption;
    }
  }

  window.closeModal = function(modalId) {
    let modal = document.getElementById(modalId);
    if (modal) {
      modal.classList.remove("show");
      setTimeout(function() {
        modal.style.display = "none";
        let message = modal.querySelector(".caption");
        if (message) message.innerText = "";
      }, 300);
    }
  }
</script>
@endpush