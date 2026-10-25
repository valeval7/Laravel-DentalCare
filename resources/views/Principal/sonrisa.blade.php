@extends('layouts.app')

@section('title', 'Your Smile – Dental Map')

@section('content')
<div class="Pagina4 px-4 sm:px-8 md:px-12 lg:px-20 pt-8 sm:pt-12 md:pt-16 lg:pt-20 pb-12">

    <button class="backBtn fixed top-32 left-40 z-50 rounded-full p-3 shadow-lg bg-white">
        <svg class="w-6 h-6 text-[#5175A0]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
        </svg>
    </button>

    <div class="flex flex-col lg:flex-row gap-6 max-w-6xl mx-auto -mt-5">
        <div class="flex-1 border-2 border-[#7ba5c3] rounded-3xl p-8 bg-white">
            <h2 class="text-[#5175A0] font-bold text-2xl mb-6">
                Which tooth is bothering you?
            </h2>

            <div class="flex flex-col lg:flex-row gap-6">
                <div class="w-full lg:w-[549px] mx-auto">
                    <div class="dental-map-wrapper">
                        <img
                            src="https://raw.githubusercontent.com/valeval7/Practicas/f12cab38f107e3988068df47595cf3352ee5eeac/12%20Desarrollo%20de%20Página%20Web/Resources/Dientes/diagrama.svg"
                            alt="Upper Dental Diagram"
                            class="w-full h-auto max-w-[549px]"
                        >

                        <section class="hotspot-container">

                            @for ($i = 1; $i <= 8; $i++)
                                <img
                                    src="https://raw.githubusercontent.com/valeval7/Practicas/f12cab38f107e3988068df47595cf3352ee5eeac/12%20Desarrollo%20de%20Página%20Web/Resources/Dientes/{{ $i }}.svg"
                                    alt="Upper Tooth {{ $i }}"
                                    onclick="openModal('modal-sup-{{ $i }}', 'Upper Tooth {{ $i }}')"
                                    class="hotspot"
                                    style="{{ [
                                        1 => 'top:17%;left:45.5%;',
                                        2 => 'top:18%;left:37.5%;',
                                        3 => 'top:21%;left:31%;',
                                        4 => 'top:25%;left:26%;',
                                        5 => 'top:29%;left:22%;',
                                        6 => 'top:33%;left:20%;',
                                        7 => 'top:38%;left:18%;',
                                        8 => 'top:43%;left:17%;',
                                    ][$i] }} width:5%;height:5%;"
                                >
                            @endfor

                            @for ($i = 1; $i <= 8; $i++)
                                <div id="modal-sup-{{ $i }}" class="modal">
                                    <span class="close" onclick="closeModal('modal-sup-{{ $i }}')">&times;</span>

                                    @if ($i === 8)
                                        <img
                                            src="https://raw.githubusercontent.com/valeval7/Practicas/f12cab38f107e3988068df47595cf3352ee5eeac/12%20Desarrollo%20de%20Página%20Web/Resources/Dientes/t/Tarjeta8.svg"
                                            alt="Upper Tooth 8"
                                            class="modal-content"
                                        >
                                    @else
                                        <img
                                            src="https://github.com/valeval7/Practicas/blob/main/12%20Desarrollo%20de%20Página%20Web/Resources/Dientes/Tarjeta{{ $i }}.jpg?raw=true"
                                            alt="Upper Tooth {{ $i }}"
                                            class="modal-content"
                                        >
                                    @endif

                                    <div class="caption"></div>
                                </div>
                            @endfor

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
.modal {
    display: none;
    position: fixed;
    z-index: 1000;
    inset: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.8);
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
    overflow: auto;
}

.modal.show {
    display: flex;
    opacity: 1;
}

.modal-content {
    width: 70%;
    max-width: 90%;
    max-height: 90%;
    height: auto;
    object-fit: contain;
    border-radius: 5px;
    cursor: zoom-in;
    transition: transform 0.3s ease;
}

.modal-content.zoomed {
    transform: scale(1.5);
    cursor: zoom-out;
}

.close {
    position: fixed;
    top: 10px;
    right: 25px;
    color: white;
    font-size: 35px;
    font-weight: bold;
    cursor: pointer;
    z-index: 1001;
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
    max-width: 549px;
    margin: 0 auto;
}

.dental-map-wrapper > img:first-child {
    display: block;
    width: 100%;
    height: auto;
}

.hotspot-container {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
}

.hotspot {
    position: absolute;
    cursor: pointer;
    transform: translate(-50%, -50%);
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
document.querySelectorAll('.backBtn').forEach(button => {
    button.addEventListener('click', () => {
        window.location.href = "{{ route('inicio') }}";
    });
});

function openModal(modalId, caption) {
    const modal = document.getElementById(modalId);
    if (!modal) return;

    modal.style.display = 'flex';

    setTimeout(() => modal.classList.add('show'), 10);

    modal.querySelector('.caption').textContent = caption;

    const img = modal.querySelector('.modal-content');

    img.classList.remove('zoomed');

    img.onclick = function(e) {
        e.stopPropagation();
        img.classList.toggle('zoomed');
    };
}

function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    if (!modal) return;

    modal.classList.remove('show');

    setTimeout(() => {
        modal.style.display = 'none';
        modal.querySelector('.caption').textContent = '';
        modal.querySelector('.modal-content').classList.remove('zoomed');
    }, 300);
}

document.querySelectorAll('.modal').forEach(modal => {
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            closeModal(modal.id);
        }
    });
});
</script>
@endpush